<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('event/{event}', [EventController::class, 'show'])->name('events.show');

Route::get('/book-off/{ticket}', [BookController::class, 'bookOffTicketForm'])->name('bookOffTicketForm');

Route::get('/page/{page}', [PageController::class, 'show'])->name('pages.show');

Auth::routes();

Route::prefix('dashboard')
    ->name('dashboard.')
    //->middleware(['auth', 'role:Administrator'])
    ->group(function () {

        Route::get('/', [HomeController::class, 'index'])->name('index');

        Route::get('/event/{event}', [EventController::class, 'adminShow'])->name('events.adminShow');

        Route::resource('events', EventController::class)->except(['show']);
        Route::resource('users', UserController::class);
        Route::resource('pages', PageController::class)->except(['show']);
        Route::resource('tickets', TicketController::class)->only(['index', 'show']);

        Route::get('/tickets/create/{event}', [TicketController::class, 'create'])->name('tickets.create');
        Route::post('/tickets/create/{event}', [TicketController::class, 'store'])->name('tickets.store');

    });
