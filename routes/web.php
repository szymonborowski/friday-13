<?php

use App\Livewire\Json;
use App\Livewire\Faq;
use App\Livewire\Dashboard;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

Route::get('/', Json::class);
Route::get('/faq', Faq::class);

Route::get('/language/{locale}', function (string $locale) {
    if (in_array($locale, config('app.available_locales'))) {
        Session::put('locale', $locale);
        App::setLocale($locale);
    }

    return redirect()->back();
});
