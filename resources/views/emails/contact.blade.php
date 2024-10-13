@php
    use Carbon\Carbon;
@endphp

<x-mail::message>
    # Mesaj Nou de la {{ $contact->name }}

    Salut,

    Ai primit un mesaj nou de la {{ $contact->name }}.

    @if ($contact->company)
        - **Firma**: {{ $contact->company }}
    @endif

    ## Detalii mesaj:
    - **Email**: [{{ $contact->email }}](mailto:{{ $contact->email }})
    - **Telefon**: [{{ $contact->phone }}](tel:{{ $contact->phone }})
    - **Mesaj**: "{{ $contact->message }}"

    @if ($contact->terms_and_conditions)
        - **Termeni și condiții**: Acceptat
    @else
        - **Termeni și condiții**: Neacceptat
    @endif

    Mesaj trimis la: {{ Carbon::parse($contact->created_at)->format('d.m.Y') }}.

    <x-mail::button :url="url('/admin/messages/' . $contact->id . '/edit')">
        Vezi mesajul
    </x-mail::button>

    Mulțumim,<br>
    {{ config('app.name') }}
</x-mail::message>
