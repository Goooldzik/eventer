<?php


namespace App\Services\API;


use App\Models\Event;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class EventService
{
    public function getAllTickets(Event $event): JsonResponse
    {
        $places = $event->places;
        $tickets = $event->tickets()->count();
        $freeTickets = $places - $tickets;

        return response()->json([
            'labels' => [
                'Wszystkie miejsca', 'Zarezerwowane bilety', 'Wolne miejsca'
            ],
            'data' => [
                'quantity' => [$places, $tickets, $freeTickets]
            ]
        ]);
    }

    /**
     * @param   Request $request
     * @param   Event $event
     * @return  JsonResponse
     */
    public function changeDate(Request $request, Event $event): JsonResponse
    {
        try {

            $event->update([
                'start_at' => $request->get('start_at')
            ]);

            return response()
                ->json([
                    'status' => 'success',
                    'message' => 'Pomyślne edytowano date tego wydarzenia!'
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
