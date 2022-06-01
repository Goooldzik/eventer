<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Services\API\EventService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * @var     EventService
     */
    protected EventService $eventService;

    /**
     * EventController constructor.
     * @param   EventService $eventService
     */
    public function __construct(EventService $eventService)
    {
        $this->eventService = $eventService;
    }

    public function getAllTickets(Event $event): JsonResponse
    {
        return $this->eventService->getAllTickets($event);
    }

    public function changeDate(Request $request, Event $event): JsonResponse
    {
        return $this->eventService->changeDate($request, $event);
    }
}
