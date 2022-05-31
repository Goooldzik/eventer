<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * @return  View
     */
    public function index(): View
    {
        return view('index', [
            'events' => Event::query()->paginate(10)
        ]);
    }
}
