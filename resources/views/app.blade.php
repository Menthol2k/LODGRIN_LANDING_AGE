<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ 'Lodgrin - DEZVOLTARE APLICATII WEB | LANDING PAGE-URI' }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <script>
        window._locale = '{{ app()->getLocale() }}';
    </script>

    <!-- Recaptcha-->
    <script src="https://js.hcaptcha.com/1/api.js?hl=ro" async defer></script>

    <!-- Cookies -->
    <script data-cookieconsent="ignore">
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag("consent", "default", {
            ad_personalization: "denied",
            ad_storage: "denied",
            ad_user_data: "denied",
            analytics_storage: "denied",
            functionality_storage: "denied",
            personalization_storage: "denied",
            security_storage: "granted",
            wait_for_update: 500,
        });
        gtag("set", "ads_data_redaction", true);
        gtag("set", "url_passthrough", false);
    </script>
    <script id="CookieDeclaration" src="https://consent.cookiebot.com/3c2a88c0-0041-4097-b5ad-1ca0c4a1f9e5/cd.js"
        type="text/javascript" async></script>
    <script id="Cookiebot" src="https://consent.cookiebot.com/uc.js" data-cbid="3c2a88c0-0041-4097-b5ad-1ca0c4a1f9e5"
        data-blockingmode="auto" type="text/javascript"></script>

    <!-- SEO -->
    <script type="application/ld+json">
        {
        "@context": "https://schema.org",
        "@type": "WebPage",
        "name": "LODGRIN",
        "mainEntity": {
                "@type": "ItemList",
                "itemListElement": [
                {
                    "@type": "WebPageElement",
                    "name": "Serviciile Noastre",
                    "url": "https://www.lodgrin.ro/#services"
                },
                {
                    "@type": "WebPageElement",
                    "name": "Despre Noi",
                    "url": "https://www.lodgrin.ro/#about"
                },
                {
                    "@type": "WebPageElement",
                    "name": "Cere oferta",
                    "url": "https://www.lodgrin.ro/tariff"
                },
                {
                    "@type": "WebPageElement",
                    "name": "Contact",
                    "url": "https://www.lodgrin.ro/#contact"
                },
                {
                    "@type": "WebPageElement",
                    "name": "Testimoniale",
                    "url": "https://www.lodgrin.ro/#testimonials"
                },
                ]
            }
        }
    </script>

    <title>Lodgrin - DEZVOLTARE APLICATII WEB | LANDING PAGE-URI</title>
    <meta name="description"
        content="Fie că ai nevoie de o platformă customizată sau de o aplicație scalabilă, suntem aici să transformăm viziunea ta în realitate. Cu soluții eficiente și design modern, îți oferim exact ceea ce ai nevoie pentru a reuși.">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="LODGRIN SRL">
    <link rel="canonical" href="https://lodgrin.com/">
    <meta property="og:title" content="Lodgrin - DEZVOLTARE APLICATII WEB | LANDING PAGE-URI">
    <meta property="og:description"
        content="Fie că ai nevoie de o platformă customizată sau de o aplicație scalabilă, suntem aici să transformăm viziunea ta în realitate.">
    <meta property="og:url" content="https://lodgrin.com/">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Lodgrin">
    <meta property="og:locale" content="ro_RO">
    <meta property="og:image" content="https://lodgrin.com/images/lodgrin_logo_white_background.png">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="Lodgrin - DEZVOLTARE APLICATII WEB | LANDING PAGE-URI">
    <meta name="keywords"
        content="Lodgrin, Dezvoltare web, Dezvoltare software, Laravel, VueJS, PHP, MySQL, JavaScript, Creare site-uri, Creare aplicații web, Front-end, Back-end, Dezvoltare full-stack, E-commerce, Landing page, Optimizare web, Soluții software, Web design, Programare personalizată, Hosting, SEO, UI/UX, HTML, CSS, Web development România, Firma software București, Creare soft personalizat, LODGRIN SRL, Proiecte Laravel, Web application development, Servicii IT">
    <meta name="twitter:description"
        content="Fie că ai nevoie de o platformă customizată sau de o aplicație scalabilă, suntem aici să transformăm viziunea ta în realitate.">
    <meta name="twitter:image" content="https://lodgrin.com/images/lodgrin_logo_white_background.png">
    <link rel="icon" href="https://lodgrin.com/favicon.ico">

    <!-- FAVICON -->

    <link rel="icon" type="image/png" href="/favicon-48x48.png" sizes="48x48" />
    <link rel="icon" type="image/svg+xml" href="/favicon.svg" />
    <link rel="shortcut icon" href="/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png" />
    <meta name="apple-mobile-web-app-title" content="Lodgrin" />
    <link rel="manifest" href="/site.webmanifest" />

    <!-- Scripts -->
    @routes
    @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
    @inertiaHead
</head>

<body class="font-sans antialiased">
    @inertia
</body>

</html>
