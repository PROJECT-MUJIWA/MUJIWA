<?php

declare(strict_types=1);

use App\Http\Middleware\HandleInertiaRequests;
use App\Http\Middleware\InjectCspNonceMiddleware;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Spatie\Csp\AddCspHeaders;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/health',
    )
    ->withMiddleware(function (Middleware $middleware): void {

        /**
         * Nastavení middlewares
         */
        $middleware->web(append: [
            InjectCspNonceMiddleware::class,
            HandleInertiaRequests::class,
            AddCspHeaders::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();
