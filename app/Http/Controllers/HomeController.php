<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use DateTime;
use DB;

class HomeController extends Controller {
public function index()
{
    $today = date('Y-m-d');
    $oneYearAgo = date('Y-m-d', strtotime('-1 year'));

    // ambil event dalam 1 tahun terakhir, urut terbaru
    $event = Event::whereBetween('tanggal_mulai', [$oneYearAgo, $today])
        ->orderBy('tanggal_mulai', 'desc')
        ->take(9)
        ->get();

    // kalau tidak ada event dalam 1 tahun terakhir, fallback: tampilkan 9 terbaru dari semua data
    if ($event->count() == 0) {
        $event = Event::orderBy('tanggal_mulai', 'desc')
            ->take(9)
            ->get();
    }

    return view('home', ['event' => $event]);
}
}
