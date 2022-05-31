<?php

namespace App\Observers;

use App\Helpers\Randomizer;
use App\Jobs\SendConfirmBookMail;
use App\Mail\TicketBookConfirmMail;
use App\Models\Ticket;

class TicketObserver
{
    /**
     * @param   Ticket $ticket
     * @return  void
     */
    public function creating(Ticket $ticket)
    {
        $ticket->ticket_number = Randomizer::generateString(12);
    }

    /**
     * Handle the Ticket "created" event.
     *
     * @param   Ticket $ticket
     * @return  void
     */
    public function created(Ticket $ticket)
    {
        // Send PDF in mail to user
        dispatch(new SendConfirmBookMail($ticket));
    }

    /**
     * Handle the Ticket "updated" event.
     *
     * @param   Ticket $ticket
     * @return  void
     */
    public function updated(Ticket $ticket)
    {
        //
    }

    /**
     * Handle the Ticket "deleted" event.
     *
     * @param   Ticket $ticket
     * @return  void
     */
    public function deleted(Ticket $ticket)
    {
        //
    }

    /**
     * Handle the Ticket "restored" event.
     *
     * @param   Ticket $ticket
     * @return  void
     */
    public function restored(Ticket $ticket)
    {
        //
    }

    /**
     * Handle the Ticket "force deleted" event.
     *
     * @param   Ticket $ticket
     * @return  void
     */
    public function forceDeleted(Ticket $ticket)
    {
        //
    }
}
