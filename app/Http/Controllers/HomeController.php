<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Carbon\Carbon;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return  View
     */
    public function index(): View
    {
        return view('dashboard.index', [
            'ticketsBought' => Ticket::whereDate('created_at', Carbon::today())->count()
        ]);
    }
}
