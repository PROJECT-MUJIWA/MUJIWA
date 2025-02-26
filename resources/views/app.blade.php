<!--

 __       __  __       __        __    __  ______        __     __  __    __
/  \     /  |/  |  _  /  |      /  |  /  |/      |      /  |   /  |/  |  /  |
$$  \   /$$ |$$ | / \ $$ |      $$ |  $$ |$$$$$$/       $$ |   $$ |$$ |  $$ |
$$$  \ /$$$ |$$ |/$  \$$ |      $$ |  $$ |  $$ |        $$ |   $$ |$$ |__$$ |
$$$$  /$$$$ |$$ /$$$  $$ |      $$ |  $$ |  $$ |        $$  \ /$$/ $$    $$ |
$$ $$ $$/$$ |$$ $$/$$ $$ |      $$ |  $$ |  $$ |         $$  /$$/  $$$$$$$$ |
$$ |$$$/ $$ |$$$$/  $$$$ |      $$ \__$$ | _$$ |_         $$ $$/         $$ |
$$ | $/  $$ |$$$/    $$$ |      $$    $$/ / $$   |         $$$/          $$ |
$$/      $$/ $$/      $$/        $$$$$$/  $$$$$$/           $/           $$/



PROJECT MUJIWA - MW UI V4 BETA
-->
<!DOCTYPE html>
<html>

<head>
    <!-- Základní meta tagy -->
    <meta charset="utf-8" />
    <title inertia>MUJIWA</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0 viewport-fit=cover" />
    <!-- Icons -->
    <link rel="icon" type="image/png" href="/favicons/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="/favicons/favicon.svg" />
    <link rel="shortcut icon" href="/favicons/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="/favicons/apple-touch-icon.png" />
    <meta name="apple-mobile-web-app-title" content="MUJIWA" />
    <link rel="manifest" href="/favicons/site.webmanifest" />
    <!-- Laravel Vite -->
    @vite(entrypoints: ['resources/application/app.ts'])
    <!-- InertiaJS Hlavičky | Modifikátor-->
    @inertiaHead('MW-UI')
</head>

<body>
    @inertia('MW-UI')
</body>

</html>
