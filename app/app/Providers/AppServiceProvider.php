<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Session;
use App\Http\Traits\TokenTrait;
use App\Models\AwardProgram;

class AppServiceProvider extends ServiceProvider
{
    use TokenTrait;
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if(config('app.env') === 'production') {
            URL::forceScheme('https');
        }

        Schema::defaultStringLength(191);

        // Prevent database queries during console commands (like migrations)
        // and only run them if the tables exist to avoid circular dependencies.
        if (!app()->runningInConsole()) {
            Session::put('user', 'user'.$this->getToken(16));

            if (Schema::hasTable('award_programs')) {
                $award_program_years = \App\Models\AwardProgram::all(['year']);
                $currentYear = \App\Models\AwardProgram::where('status', 1)->first();
                
                view()->share('award_program_years', $award_program_years);
                view()->share('currentYear', $currentYear);
            }

            if (Schema::hasTable('gallery')) {
                $pictures = \App\Models\Gallery::where('award_program_id', 1)->take(20)->get(); //pictures for gallery sidebar
                view()->share('pictures', $pictures);
            }
        }
    }
}
