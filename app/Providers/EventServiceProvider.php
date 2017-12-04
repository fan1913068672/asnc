<?php

namespace App\Providers;

use Illuminate\Support\Facades\Event;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
     //事件对应的监听器
    protected $listen = [
        'App\Events\Event' => [
            'App\Listeners\EventListener',
        ],
        //注册事件
        'Illuminate\Auth\Events\Registered'  => [
            'App\Listeners\LogRegisteredUser',
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
