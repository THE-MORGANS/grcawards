<?php

use App\Http\Controllers\Uk\LandingPageController;
use Illuminate\Support\Facades\Route;




Route::prefix('uk')->group(function() { 
Route::get('/home', [LandingPageController::class, 'showLandingIndex'])->name('uk.landing.index');
Route::get('/', [LandingPageController::class, 'showLandingIndex'])->name('uk.landing.index');
});