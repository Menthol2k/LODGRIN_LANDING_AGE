@php
    use Carbon\Carbon;
@endphp

    <!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oferta Nouă</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            color: #333;
        }

        .email-container {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .email-header {
            background-color: #4CAF50;
            color: white;
            padding: 15px;
            border-radius: 8px;
            text-align: center;
        }

        .email-body {
            padding: 20px;
            font-size: 16px;
        }

        .email-body h2 {
            color: #333;
            font-size: 20px;
        }

        .email-body p {
            margin: 10px 0;
            line-height: 1.6;
        }

        .email-body a {
            color: #1a73e8;
            text-decoration: none;
        }

        .email-body a:hover {
            text-decoration: underline;
        }

        .email-footer {
            margin-top: 20px;
            font-size: 14px;
            text-align: center;
            color: #666;
        }

        .email-button {
            display: inline-block;
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 5px;
            text-decoration: none;
            text-align: center;
            margin-top: 20px;
        }

        .email-button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
<div class="email-container">
    <div class="email-header">
        <h1>Oferta noua de la {{ $offer->company }}</h1>
    </div>

    <div class="email-body">
        <p>Salut,</p>
        <p>Ai primit un mesaj nou de la <strong>{{ $offer->name }}</strong>.</p>

        @if ($offer->company)
            <p><strong>Firma</strong>: {{ $offer->company }}</p>
        @endif

        <h2>Detalii mesaj:</h2>
        <ul>
            <li><strong>Email</strong>: <a href="mailto:{{ $offer->email }}">{{ $offer->email }}</a></li>
{{--            <li><strong>CAEN</strong>: <a href="mailto:{{ $offer->caen }}">{{ $offer->caen }}</a></li>--}}
            <li><strong>Telefon</strong>: <a href="tel:{{ $offer->phone }}">{{ $offer->phone }}</a></li>
            <li><strong>Mesaj</strong>: "{{ $offer->message }}"</li>
        </ul>

        @if ($offer->terms_and_conditions)
            <p><strong>Termeni și condiții</strong>: Acceptat</p>
        @else
            <p><strong>Termeni și condiții</strong>: Neacceptat</p>
        @endif

        <p>Mesaj trimis la: {{ Carbon::parse($offer->created_at)->format('d.m.Y') }}.</p>

        <a href="{{ url('/admin/tariffs/' . $offer->id . '/edit') }}" class="email-button">Vezi oferta</a>
    </div>

    <div class="email-footer">
        <p>Mulțumim,<br>{{ config('app.name') }}</p>
    </div>
</div>
</body>
</html>
