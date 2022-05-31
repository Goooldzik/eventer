<?php

namespace App\Mail;

use App\Models\Ticket;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TicketBookConfirmMail extends Mailable
{
    use Queueable, SerializesModels;

    protected Ticket $ticket;

    /**
     * Create a new message instance.
     *
     * @param   Ticket $ticket
     * @return  void
     */
    public function __construct(Ticket $ticket)
    {
        $this->ticket = $ticket;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->from('admin@eventer.test')
            ->view('mails.confirm-book-ticket', [
                'ticket' => $this->ticket
            ]);
    }
}
