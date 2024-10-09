<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ 'Lodgrin - Dezvoltare software' }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <script>
        window._locale = '{{ app()->getLocale() }}';
    </script>

    <!-- Recaptcha-->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script>
        function onSubmit(token) {
            document.getElementById("demo-form").submit();
        }
    </script>

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

    <!-- Scripts -->
    @routes
    @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
    @inertiaHead
</head>

<body class="font-sans antialiased">
    @inertia
</body>

</html>
