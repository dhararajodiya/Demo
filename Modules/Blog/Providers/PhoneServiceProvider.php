<?php

namespace Modules\Blog\Providers;

use App\Events\phoneprocess;
use Modules\Blog\Listeners\Phone;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
class PhoneServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    protected $listen = [
        phoneprocess::class => [
            phone::class,
        ],

    ];

}
