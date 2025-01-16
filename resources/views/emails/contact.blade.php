@php
    use Carbon\Carbon;
@endphp
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f7fc;
        color: #333;
        margin: 0;
        padding: 0;
    }

    .email-container {
        width: 100%;
        max-width: 600px;
        margin: 0 auto;
        padding: 20px;
        background-color: #ffffff;
        border-radius: 8px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    h1, h2 {
        font-size: 20px;
        color: #4A90E2;
    }

    h3 {
        font-size: 18px;
        color: #2c3e50;
        margin-top: 20px;
    }

    p {
        font-size: 14px;
        line-height: 1.6;
        color: #555;
    }

    .email-details {
        margin-top: 15px;
        padding: 15px;
        background-color: #f9f9f9;
        border-radius: 5px;
        box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .email-details ul {
        list-style-type: none;
        padding-left: 0;
    }

    .email-details li {
        margin: 10px 0;
    }

    .email-details strong {
        font-weight: bold;
        color: #333;
    }

    .email-button {
        display: inline-block;
        padding: 10px 20px;
        background-color: #4A90E2;
        color: #fff;
        font-size: 14px;
        font-weight: bold;
        text-decoration: none;
        border-radius: 5px;
        margin-top: 20px;
        text-align: center;
    }

    .email-footer {
        font-size: 12px;
        color: #777;
        text-align: center;
        margin-top: 30px;
    }
</style>

<div class="email-container">
    <h1>Mesaj Nou de la {{ $contact->name }}</h1>

    <p>Salut,</p>

    <p>Ai primit un mesaj nou de la {{ $contact->name }}.</p>

    @if ($contact->company)
        <p><strong>Firma:</strong> {{ $contact->company }}</p>
    @endif

    <div class="email-details">
        <h3>Detalii mesaj:</h3>
        <ul>
            <li><strong>Email:</strong> <a href="mailto:{{ $contact->email }}">{{ $contact->email }}</a></li>
            <li><strong>Telefon:</strong> <a href="tel:{{ $contact->phone }}">{{ $contact->phone }}</a></li>
            <li><strong>Mesaj:</strong> "{{ $contact->message }}"</li>
            @if ($contact->terms_and_conditions)
                <li><strong>Termeni și condiții:</strong> Acceptat</li>
            @else
                <li><strong>Termeni și condiții:</strong> Neacceptat</li>
            @endif
        </ul>
    </div>

    <p><strong>Mesaj trimis la:</strong> {{ Carbon::parse($contact->created_at)->format('d.m.Y') }}.</p>
</div>
