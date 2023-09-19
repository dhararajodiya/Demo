<?php

namespace Modules\Xender\Providers;
use App\Events\genderprocess;
use Modules\Xender\Listeners\Gender;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

// use Illuminate\Support\ServiceProvider;

class GenderServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    protected $listen = [
        genderprocess::class => [
            gender::class,
        ],

    ];
}
