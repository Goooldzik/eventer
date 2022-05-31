<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\TicketRequest;
use App\Models\Event;
use App\Models\Ticket;
use App\Services\API\TicketService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    /**
     * @var     TicketService
     */
    protected TicketService $ticketService;

    /**
     * TicketController constructor.
     * @param   TicketService $ticketService
     */
    public function __construct(TicketService $ticketService)
    {
        $this->ticketService = $ticketService;
    }

    /**
     * @param   TicketRequest $request
     * @param   Event $event
     * @return  JsonResponse
     */
    public function bookTicket(TicketRequest $request, Event $event): JsonResponse
    {
        return $this->ticketService->bookTicket($request, $event);
    }

    /**
     * @param   Event $event
     * @param   Ticket $ticket
     * @return  JsonResponse
     */
    public function bookOffTicket(Event $event, Ticket $ticket): JsonResponse
    {
        return $this->ticketService->bookOffTicket($event, $ticket);
    }
}
