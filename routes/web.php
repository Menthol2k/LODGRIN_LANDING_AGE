<?php

use App\Models\Caen;
use Inertia\Inertia;
use App\Http\Controllers\Home\Index;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Controllers\Tariff\Index as TariffIndex;

Route::get('/', function () {
    return Inertia::render('LP/Home');
})->name('home');

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

Route::post('/send-message', [Index::class, 'contact_form'])->name('send.message');
Route::post('/send-offer', [TariffIndex::class, 'tariff_form'])->name('send.offer');
Route::get('/politica', function() {
    return Inertia::render('LP/Politica');
});

Route::get('/tariff', function () {
    return Inertia::render('LP/Tariff', [
        'caens' => Caen::all()
    ]);
})->name('tariff');
