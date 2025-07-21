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
        Session::put('user', 'user'.$this->getToken(16));
        Schema::defaultStringLength(191);
        $award_program_years = \App\Models\AwardProgram::all(['year']);
        $pictures = \App\Models\Gallery::where('award_program_id', 1)->take(20)->get(); //pictures for gallery sidebar
        view()->share('award_program_years', $award_program_years);
        view()->share('pictures', $pictures);
        view()->share('currentYear', AwardProgram::where('status', 1)->first());

    }
}
