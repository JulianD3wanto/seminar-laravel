<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DateTime;
use App\Event;
use App\User;
use App\PesertaEvent;
use Carbon\Carbon;

class ExploreController extends Controller {

    public function index() {
        // Default halaman explore = Event Terbaru (tahun ini + tahun lalu)
        return $this->week();
    }

    public function week() {
    $statusDropdown = 'Event Terbaru';

    $yearNow  = Carbon::now()->year;
    $yearLast = $yearNow - 1;

    $event = Event::where(function ($q) use ($yearNow, $yearLast) {
            $q->whereYear('tanggal_mulai', $yearNow)
              ->orWhereYear('tanggal_mulai', $yearLast);
        })
        ->orderBy('tanggal_mulai', 'desc')
        ->paginate(6);

    return view('explore.index', compact('event', 'statusDropdown'));
}

public function month() {
    $statusDropdown = 'Bulan Ini';
    $now = Carbon::now();

    $event = Event::whereYear('tanggal_mulai', $now->year)
        ->whereMonth('tanggal_mulai', $now->month)
        ->orderBy('tanggal_mulai', 'desc')
        ->paginate(6);

    return view('explore.index', compact('event', 'statusDropdown'));
}

public function all() {
    $statusDropdown = 'Semua Event';

    $event = Event::orderBy('tanggal_mulai', 'desc')
        ->paginate(6);

    return view('explore.index', compact('event', 'statusDropdown'));
}

public function search(Request $request) {
    $request->validate(['search' => 'required']);

    $searchEvent = $request->input('search');

    $event = Event::where('nama', 'like', '%'.$searchEvent.'%')
        ->orderBy('tanggal_mulai', 'desc')
        ->paginate(6);

    // biar pagination tetap membawa query search
    $event->appends($request->only('search'));

    $statusDropdown = 'Hasil Pencarian';

    return view('explore.index', compact('event', 'statusDropdown'));
}

public function show($id)
{
    $event = Event::findOrFail($id);

    $statusJoin = PesertaEvent::where('event_id', $id)->first();
    $user = User::find($event->user_id);

    return view('explore.show', compact('event', 'user', 'statusJoin'));
}

}
