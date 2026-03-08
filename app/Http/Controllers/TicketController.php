<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PesertaEvent;
use App\Peserta;
use App\Event;
use PDF;
use Illuminate\Support\Facades\Auth;

class TicketController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $idUser = Auth::id();

        // Ambil semua event yang diikuti user + sertifikatnya
        $myEventJoined = PesertaEvent::query()
            ->join('events', 'events.id', '=', 'peserta_events.event_id')
            ->join('peserta', 'peserta.id_peserta', '=', 'peserta_events.peserta_id')
            ->where('peserta_events.user_id', $idUser)
            ->select([
                'peserta_events.id',
                'peserta_events.created_at',
                'peserta_events.user_id',
                'events.id as event_id',
                'events.nama',
                'events.alamat',
                'events.deskripsi',
                'events.gambar',
                'events.tanggal_mulai',
                'events.tanggal_selesai',
                'peserta.id_peserta as peserta_id',
                'peserta.sertifikat',
            ])
            ->orderBy('events.tanggal_mulai', 'desc')
            ->get();

        return view('ticket.index', ['myEventJoined' => $myEventJoined]);
    }

    public function pdf(Request $request, $id)
    {
        $user = $request->user();
        $idUser = Auth::id();
        $idEvent = $id;

        // Ambil 1 tiket event untuk user ini
        $myEventJoined = PesertaEvent::query()
            ->join('events', 'events.id', '=', 'peserta_events.event_id')
            ->join('peserta', 'peserta.id_peserta', '=', 'peserta_events.peserta_id')
            ->where('peserta_events.user_id', $idUser)
            ->where('peserta_events.event_id', $idEvent)
            ->select([
                'peserta_events.id',
                'peserta_events.created_at',
                'peserta_events.user_id',
                'events.id as event_id',
                'events.nama',
                'events.alamat',
                'events.deskripsi',
                'events.gambar',
                'events.tanggal_mulai',
                'events.tanggal_selesai',
                'peserta.id_peserta as peserta_id',
                'peserta.sertifikat',
            ])
            ->first();

        if (!$myEventJoined) {
            return abort(404);
        }

        $pdf = PDF::loadView('ticket.pdf', ['myEventJoined' => $myEventJoined, 'user' => $user]);
        return $pdf->stream();
    }
}
