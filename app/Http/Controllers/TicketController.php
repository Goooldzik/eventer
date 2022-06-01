<?php

namespace App\Http\Controllers;

use App\Http\Requests\TicketRequest;
use App\Models\Event;
use App\Models\Ticket;
use App\Services\TicketService;
use Illuminate\Contracts\View\View;
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
     * Display a listing of the resource.
     *
     * @return  View
     */
    public function index(): View
    {
        return $this->ticketService->index();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param   Event $event
     * @return  View
     */
    public function create(Event $event): View
    {
        return $this->ticketService->create($event);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param   TicketRequest $request
     * @return  JsonResponse
     */
    public function store(TicketRequest $request): JsonResponse
    {
        return $this->ticketService->store($request);
    }

    /**
     * Display the specified resource.
     *
     * @param   Ticket $ticket
     * @return  View
     */
    public function show(Ticket $ticket): View
    {
        return $this->ticketService->show($ticket);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param   Ticket $ticket
     * @return  View
     */
    public function edit(Ticket $ticket): View
    {
        return $this->ticketService->edit($ticket);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param   TicketRequest $request
     * @param   Ticket $ticket
     * @return  JsonResponse
     */
    public function update(TicketRequest $request, Ticket $ticket): JsonResponse
    {
        return $this->ticketService->update($request, $ticket);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param   Ticket $ticket
     * @return  JsonResponse
     */
    public function destroy(Ticket $ticket): JsonResponse
    {
        return $this->ticketService->destroy($ticket);
    }
}
