<?php


namespace App\Services;


use App\Http\Requests\TicketRequest;
use App\Jobs\SendTicketDeleteMailJob;
use App\Models\Event;
use App\Models\Ticket;
use Exception;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;

class TicketService
{
    /**
     * Display a listing of the resource.
     *
     * @return  View
     */
    public function index(): View
    {
        return view('dashboard.tickets.index', [
            'events' => Event::query()->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param   Event $event
     * @return  View
     */
    public function create(Event $event): View
    {
        return view('dashboard.tickets.create', [
            'event' => $event
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param   TicketRequest $request
     * @return  JsonResponse
     */
    public function store(TicketRequest $request): JsonResponse
    {
        try {

            Ticket::query()
                ->create($request->validated());

            return response()
                ->json([
                    'status' => 'success',
                    'message' => 'Pomyślnie utworzono bilet! Na podany adres mail, zostało wysłane potwierdzenie!'
                ]);

        } catch (Exception $exception) {

            return response()->json([
                'status' => 'error',
                'message' => $exception->getMessage()
            ]);

        }
    }

    /**
     * Display the specified resource.
     *
     * @param   Ticket $ticket
     * @return  View
     */
    public function show(Ticket $ticket): View
    {
        return view('dashboard.tickets.show', [
            'ticket' => $ticket
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param   Ticket $ticket
     * @return  View
     */
    public function edit(Ticket $ticket): View
    {
        return view('dashboard.ticket.edit', [
            'ticket' => $ticket
        ]);
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
        try {

            $ticket->update($request->validated());

            return response()
                ->json([
                    'status' => 'success',
                    'message' => 'Pomyślnie edytowano bilet! Na podany adres mail, zostało wysłane potwierdzenie!'
                ]);

        } catch (Exception $exception) {

            return response()->json([
                'status' => 'error',
                'message' => $exception->getMessage()
            ]);

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param   Ticket $ticket
     * @return  JsonResponse
     */
    public function destroy(Ticket $ticket): JsonResponse
    {
        try {

            $ticket->delete();

            return response()
                ->json([
                    'status' => 'success',
                    'message' => 'Pomyślnie anulowano bilet!'
                ]);

        } catch (Exception $exception) {

            return response()->json([
                'status' => 'error',
                'message' => $exception->getMessage()
            ]);

        }
    }
}
