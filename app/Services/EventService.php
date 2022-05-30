<?php


namespace App\Services;


use App\Http\Requests\EventRequest;
use App\Models\Event;
use Exception;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\URL;

class EventService
{
    /**
     * Display a listing of the resource.
     *
     * @return  View
     */
    public function index(): View
    {
        return view('index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  View
     */
    public function create(): View
    {
        return view('dashboard.events.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param   EventRequest $request
     * @return  JsonResponse
     */
    public function store(EventRequest $request): JsonResponse
    {
        try {

            Event::query()
                ->create($request->validated());

            return response()->json([
                'status' => 'success',
                'message' => 'Pomyślnie utworzone nowe wydarzenie!'
            ]);

        } catch (Exception $exception) {

            return response()->json([
                'status' => 'error',
                'message' => (App::isProduction()) ? $exception->getMessage() : 'Wystąpił nieoczekiwany błąd! Spróbuj ponownie później.'
            ]);

        }
    }

    /**
     * Display the specified resource.
     *
     * @param   Event $event
     * @return  View
     */
    public function show(Event $event): View
    {
        return view('events.show', [
            'event' => $event
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param   Event $event
     * @return  View
     */
    public function edit(Event $event): View
    {
        return view('dashboard.events.edit', [
            'event' => $event
        ]);
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
        try {

            $event->update($request->validated());

            return response()->json([
                'status' => 'success',
                'message' => 'Pomyślnie edytowano wydarzenie!'
            ]);

        } catch (Exception $exception) {

            return response()->json([
                'status' => 'error',
                'message' => (App::isProduction()) ? $exception->getMessage() : 'Wystąpił nieoczekiwany błąd! Spróbuj ponownie później.'
            ]);

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param   Event $event
     * @return  JsonResponse
     */
    public function destroy(Event $event): JsonResponse
    {
        try {

            $event->delete();

            return response()->json([
                'status' => 'success',
                'message' => 'Pomyślnie usunięto wydarzenie!'
            ]);

        } catch (Exception $exception) {

            return response()->json([
                'status' => 'error',
                'message' => (App::isProduction()) ? $exception->getMessage() : 'Wystąpił nieoczekiwany błąd! Spróbuj ponownie później.'
            ]);

        }
    }
}
