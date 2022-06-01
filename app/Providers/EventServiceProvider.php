<?php

namespace App\Providers;

use App\Models\Event;
use App\Models\Page;
use App\Models\Ticket;
use App\Observers\EventObserver;
use App\Observers\PageObserver;
use App\Observers\TicketObserver;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var     array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return  void
     */
    public function boot()
    {
        Event::observe(EventObserver::class);
        Ticket::observe(TicketObserver::class);
        Page::observe(PageObserver::class);
    }
}
