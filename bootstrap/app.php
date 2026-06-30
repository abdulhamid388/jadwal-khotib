<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Support\Facades\URL;


return Application::configure(basePath: dirname(__DIR__))

    ->withRouting(

        web: __DIR__.'/../routes/web.php',

        commands: __DIR__.'/../routes/console.php',

        health: '/up',

    )


    ->withMiddleware(function (Middleware $middleware): void {


        // Jika membuka halaman admin tanpa login
        // otomatis diarahkan ke halaman login

        $middleware->redirectGuestsTo('/login');



    })


    ->withExceptions(function (Exceptions $exceptions): void {


        //

    })


    ->booted(function () {


        // FORCE HTTPS GLOBAL

        URL::forceScheme('https');


    })


    ->create();