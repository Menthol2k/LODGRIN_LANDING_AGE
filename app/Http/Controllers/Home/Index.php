<?php

namespace App\Http\Controllers\Home;

use GuzzleHttp\Client;
use App\Models\Message;
use App\Mail\ContactMail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\ValidationException;

class Index extends Controller
{
    public function contact_form()
    {
        request()->validate([
            'name' => ['required', 'string', 'max:100'],
            'company' => ['nullable', 'string', 'max:50'],
            'email' => ['required', 'email', 'max:200'],
            'phone' => ['required', 'string'],
            'message' => ['required', 'string', 'min:50', 'max:1000'],
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

        $message = Message::create(request()->all());

        Mail::to('office@lodgrin.com')->send(new ContactMail($message));

        return response()->json(['message' => 'Mesajul a fost trimis cu succes!']);
    }
}
