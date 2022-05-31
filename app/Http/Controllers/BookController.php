<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Ticket;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function bookOffTicketForm(Event $event, Ticket $ticket): View
    {
        return view('book.book-off', [
            'event' => $event,
            'ticket' => $ticket
        ]);
    }
}
