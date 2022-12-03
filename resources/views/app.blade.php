<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" class="relative h-full">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="author" content="TEAM MUJIWA" />
        <meta name="keywords" content="Anime, Manga, Dorama, Fansubs, Fansub, Subtitles, MUJIWA" />
        <meta name="description" content="{{$meta['description'] ?? 'PROJECT MUJIWA - Pro ty, kteří věnují svůj čas asijské kultuře.'}}" />
        <title inertia>PROJECT MUJIWA | Nová [Anime, Dorama, Manga] databáze založena na staré akihabaře a akidb</title>
        <link rel="preconnect" href="https://fonts.bunny.net" />
        <link href="https://fonts.bunny.net/css?family=inter:100,200,300,400,500,600,700,800,900|poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <script src="https://challenges.cloudflare.com/turnstile/v0/api.js" async defer></script>
        <link rel="preconnect" href="https://r2.mujiwa.cz" />
        <meta property="og:title" content="{{$meta['openGraph']['title'] ?? 'PROJECT MUJIWA | Nová [Anime, Dorama, Manga] databáze založena na staré akihabaře a akidb'}}" />
        <meta property="og:type" content="{{$meta['openGraph']['type'] ?? 'website'}}" />
        <meta property="og:url" content="{{$meta['openGraph']['url'] ?? \Illuminate\Support\Facades\URL::current()}}" />
        <meta property="og:image" content="{{$meta['openGraph']['image'] ?? 'https://r2.mujiwa.cz/og.png'}}" />
        <meta property="og:site_name" content="{{$meta['openGraph']['site_name'] ?? 'PROJECT MUJIWA'}}" />
        <meta property="og:locale" content="{{$meta['openGraph']['locale'] ?? 'cs_CZ'}}" />
        <meta property="theme-color" content="{{$meta['theme'] ?? '#0099FF'}}" />
        <meta name="twitter:card" content="{{$meta['twitter']['card'] ?? 'summary_large_image'}}">
        <meta name="twitter:image" content="{{$meta['twitter']['image'] ?? 'https://r2.mujiwa.cz/og.png'}}" />
        @vitereactrefresh
        @vite('resources/client/main.jsx')
        @inertiaHead
    </head>
    <body class="h-full bg-blue-50 dark:bg-slate-900">
        @inertia
    </body>
    <x-translation />
</html>
