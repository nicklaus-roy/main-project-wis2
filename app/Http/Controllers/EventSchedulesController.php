<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventSchedulesController extends Controller
{
    public function index()
    {
        return view('event_schedules.index');
    }
}
