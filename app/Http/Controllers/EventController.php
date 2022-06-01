<?php

namespace App\Http\Controllers;

use App\Http\Requests\EventRequest;
use App\Models\Event;
use App\Services\EventService;
use Illuminate\Contracts\View\View;
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

    /**
     * Display a listing of the resource.
     *
     * @return  View
     */
    public function index(): View
    {
        return $this->eventService->index();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  View
     */
    public function create(): View
    {
        return $this->eventService->create();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param   EventRequest $request
     * @return  JsonResponse
     */
    public function store(EventRequest $request): JsonResponse
    {
        return $this->eventService->store($request);
    }

    /**
     * Display the specified resource.
     *
     * @param   Event $event
     * @return  View
     */
    public function show(Event $event): View
    {
        return $this->eventService->show($event);
    }

    public function adminShow(Event $event): View
    {
        return $this->eventService->adminShow($event);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param   Event $event
     * @return  View
     */
    public function edit(Event $event): View
    {
        return $this->eventService->edit($event);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param   EventRequest $request
     * @param   Event $event
     * @return  JsonResponse
     */
    public function update(EventRequest $request, Event $event): JsonResponse
    {
        return $this->eventService->update($request, $event);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param   Event $event
     * @return  JsonResponse
     */
    public function destroy(Event $event): JsonResponse
    {
        return $this->eventService->destroy($event);
    }
}
