<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DateTime;
use App\Event;
use App\User;
use App\PesertaEvent;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request) {
        // today
        $from = date('Y-m-d');

        // get 1 week later
        $to = new DateTime($from);
        $to = $to->modify('+1 week');
        $to = $to->format('Y-m-d');

        // get event this week
        $eventThisWeek = Event::whereBetween('tanggal_mulai', [$from, $to])->paginate(4);

        // get event this month if this week not exist
        if (count($eventThisWeek) == 0) {
            $eventThisWeek = Event::whereMonth('tanggal_mulai', date('m'))->paginate(4);
            $status = "bulan ini";
        }

        // get all event if this month not exist
        if (count($eventThisWeek) == 0) {
            $eventThisWeek = Event::paginate(4);
            $status = "semua";
        }

        // get latest or new event
        $latestEvent = Event::orderBy('created_at', 'desc')->take(4)->get();

        // get My Event
        $idUser = $request->user()->id;
        $myEvent = count(User::find($idUser)->events);

        // get Event was joined
        $myEventJoined = count(PesertaEvent::get());

        $event = array($eventThisWeek, $latestEvent, $myEvent, $myEventJoined);
        return view('dashboard', ['event' => $event]);
    }
}
