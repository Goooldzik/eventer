<?php

use App\Http\Controllers\API\EventController;
use App\Services\API\EventService;
use App\Services\API\TicketService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/book-off/{ticket}', [TicketService::class, 'bookOffTicket'])->name('api.book-off');
Route::post('/book/{event}', [TicketService::class, 'bookTicket'])->name('api.book-ticket');
Route::put('/change-event-date/{event}', [EventService::class, 'changeDate'])->name('api.change-event-date');

Route::get('/get-tickets/{event}', [EventController::class, 'getAllTickets'])->name('api.get-tickets');
