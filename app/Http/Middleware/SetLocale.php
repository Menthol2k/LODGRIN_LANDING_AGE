<?php

namespace App\Http\Middleware;

use Closure;
use GeoIp2\Database\Reader;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $supportedLocales = [
            'es' => 'Español',
            'ro' => 'Română',
            'en' => 'English',
            'fr' => 'Français',
            'ch' => 'Chinese',
            'ru' => 'Russian',
        ];

        try {
            $reader = new Reader(base_path('database/GeoLite2-Country.mmdb'));
            $record = $reader->country($request->ip());
            $countryCode = $record->country->isoCode;

            if (array_key_exists($countryCode, $supportedLocales)) {
                app()->setLocale($countryCode);
            } else {
                app()->setLocale('en');
            }
        } catch (\Exception $e) {
            \Log::error($e->getMessage());
            \Log::info(app()->getLocale());
            app()->setLocale('en');
        }

        if (session()->has('locale')) {
            app()->setLocale(session('locale'));
        }

        return $next($request);
    }
}
