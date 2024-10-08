<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/{locale}/', function () {
    return Inertia::render('LP/Home');
})->where(['locale' => 'en|ro'])->name('home');



Route::get('language/{language}', function ($language) {
    Session()->put('locale', $language);
    if ($language != auth()->user()->language) {
        auth()->user()->update([
            'language' => $language
        ]);
        return redirect()->back()->with(['success' => ['message' => __('Limba a fost schimbata')]]);
    } else {
        return redirect()->back();
    }
})->name('language');
