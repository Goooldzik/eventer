<?php

namespace App\Observers;

use App\Helpers\Sluggable;
use App\Models\Event;

class EventObserver
{
    /**
     * @param   Event $event
     * @return  void
     */
    public function creating(Event $event)
    {
        $event->slug = Sluggable::generateSlug($event->title);
    }

    /**
     * Handle the Event "created" event.
     *
     * @param   Event $event
     * @return  void
     */
    public function created(Event $event)
    {
        //
    }

    /**
     * Handle the Event "updated" event.
     *
     * @param   Event $event
     * @return  void
     */
    public function updated(Event $event)
    {
        //
    }

    /**
     * Handle the Event "deleted" event.
     *
     * @param   Event $event
     * @return  void
     */
    public function deleted(Event $event)
    {
        //
    }

    /**
     * Handle the Event "restored" event.
     *
     * @param   Event $event
     * @return  void
     */
    public function restored(Event $event)
    {
        //
    }

    /**
     * Handle the Event "force deleted" event.
     *
     * @param   Event $event
     * @return  void
     */
    public function forceDeleted(Event $event)
    {
        //
    }
}
