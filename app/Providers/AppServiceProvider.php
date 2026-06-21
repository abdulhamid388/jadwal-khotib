<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Artisan;

class AppServiceProvider extends ServiceProvider
{

    public function register(): void
    {

    }


    public function boot(): void
    {

        if (app()->environment('production')) {

            if (!file_exists(public_path('storage'))) {

                Artisan::call('storage:link');

            }

        }

    }

}