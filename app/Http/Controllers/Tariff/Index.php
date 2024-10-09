<?php

namespace App\Http\Controllers\Tariff;

use App\Models\Tariff;
use GuzzleHttp\Client;
use App\Http\Controllers\Controller;
use Illuminate\Validation\ValidationException;

class Index extends Controller
{
    public function tariff_form()
    {
        request()->validate([
            'name' => ['required', 'string', 'max:100'],
            'company' => ['required', 'string', 'max:50'],
            'email' => ['required', 'email', 'max:200'],
            'phone' => ['required', 'string'],
            'message' => ['required', 'string', 'min:50', 'max:1000'],
            'caen' => ['required', 'min:2', 'max:1000'],
            'terms_and_conditions' => ['required', 'accepted'],
            'captcha_token' => ['required', 'string']
        ], [
            'required' => 'Acest câmp este obligatoriu.',
            'string' => 'Valoarea introdusă trebuie să fie un text valid.',
            'max' => 'Acest câmp nu poate depăși :max caractere.',
            'email' => 'Adresa de email introdusă nu este validă.',
            'min' => 'Mesajul trebuie să conțină cel puțin :min caractere.',
            'size' => 'Numărul de telefon trebuie să conțină exact :size caractere.',
            'accepted' => 'Trebuie să fiți de acord cu termenii și condițiile.',
            'captcha_token.required' => 'Aceasta bifa este obligatorie.'
        ]);

        $client = new Client();
        $response = $client->post('https://hcaptcha.com/siteverify', [
            'form_params' => [
                'secret' => 'ES_fd110fd803714ef7a2b00c91696d2d08',
                'response' => request('captcha_token'),
            ],
        ]);

        $body = json_decode((string) $response->getBody());

        if (!$body->success) {
            throw ValidationException::withMessages([
                'captcha_token' => 'Token-ul captcha nu este valid sau a expirat. Te rugăm să încerci din nou.',
            ]);
        }

        Tariff::create([
            'name' => request('name'),
            'company' => request('company'),
            'email' => request('email'),
            'phone' => request('phone'),
            'message' => request('message'),
            'caen' => request('caen')['name'],
            'terms_and_conditions' => request('terms_and_conditions')
        ]);

        return response()->json(['message' => 'Mesajul a fost trimis cu succes!']);
    }
}
