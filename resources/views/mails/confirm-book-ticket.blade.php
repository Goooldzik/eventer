Hi {{ $ticket->name }}
<br /><br />
You ticket to {{ $ticket->event->title }} event are booked! Event starts at {{ $ticket->event->start_at }}
<br /><br /><br />
If you want book off ticket, please go to {{ route('bookOffTicketForm', $ticket) }}
<br /><br /><br />
<hr />
Lots of love!
