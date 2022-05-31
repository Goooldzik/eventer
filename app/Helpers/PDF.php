<?php


namespace App\Helpers;


use App\Models\Ticket;

class PDF
{
    public static function generateBookTicketPDF(Ticket $ticket)
    {
        $data = [
            'event_title' => $ticket->event->title,
            'event_starts_at' => $ticket->event->start_at,
            'event_description' => $ticket->event->description,
            'ticket_number' => $ticket->ticket_number
        ];
        $pdf = \Barryvdh\DomPDF\Facade\Pdf::loadView('pdf.confirm-book-ticket', $data);
        $pdf->setOptions([

        ]);

        return $pdf->output();
    }
}
