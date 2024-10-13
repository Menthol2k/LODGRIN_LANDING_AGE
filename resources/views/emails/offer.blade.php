@php
    use Carbon\Carbon;
@endphp

<x-mail::message>
    # Oferta noua de la {{ $offer->company }}

    Salut,

    Ai primit un mesaj nou de la {{ $offer->name }}.

    @if ($offer->company)
        - **Firma**: {{ $offer->company }}
    @endif

    ## Detalii mesaj:
    - **Email**: [{{ $offer->email }}](mailto:{{ $offer->email }})
    - **CAEN**: [{{ $offer->caen }}](mailto:{{ $offer->caen }})
    - **Telefon**: [{{ $offer->phone }}](tel:{{ $offer->phone }})
    - **Mesaj**: "{{ $offer->message }}"

    @if ($offer->terms_and_conditions)
        - **Termeni și condiții**: Acceptat
    @else
        - **Termeni și condiții**: Neacceptat
    @endif

    Mesaj trimis la: {{ Carbon::parse($offer->created_at)->format('d.m.Y') }}.

    <x-mail::button :url="url('/admin/tariffs/' . $offer->id . '/edit')">
        Vezi oferta
    </x-mail::button>

    Mulțumim,<br>
    {{ config('app.name') }}
</x-mail::message>
