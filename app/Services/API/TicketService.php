<?php


namespace App\Services\API;


use App\Http\Requests\TicketRequest;
use App\Models\Event;
use App\Models\Ticket;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class TicketService
{
    /**
     * @param   TicketRequest $request
     * @param   Event $event
     * @return  JsonResponse
     */
    public function bookTicket(TicketRequest $request, Event $event): JsonResponse
    {
        try {

            $event->tickets()
                ->create($request->validated());

            return response()->json([
                'status' => 'success',
                'message' => 'Udało nam się zapisać Cię na to wydarzenie. Sprawdź maila, którego do Ciebie wysłaliśmy!'
            ]);

        } catch (Exception $exception) {

            return response()->json([
                'status' => 'error',
                'message' => (App::isProduction()) ? $exception->getMessage() : 'Podczas bookowania eventu, coś poszło nie tak! Spróbuj ponownie później!'
            ]);

        }
    }

    /**
     * @param   Ticket $ticket
     * @return  JsonResponse
     */
    public function bookOffTicket(Ticket $ticket): JsonResponse
    {
        try {

            if(Carbon::now()->timestamp > $ticket->expire_at->timestamp)
                return throw new Exception('Niestety, ale minął czas możliwy na anulowanie biletu.');

            $ticket->delete();

            return response()
                ->json([
                    'status' => 'success',
                    'message' => 'Usunięto rezerwacje na to wydarzenie!'
                ]);

        } catch (Exception $exception) {

            return response()
                ->json([
                    'status' => 'error',
                    'message' => $exception->getMessage()
                ]);

        }
    }
}
