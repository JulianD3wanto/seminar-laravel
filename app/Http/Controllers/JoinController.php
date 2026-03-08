<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\PesertaEvent;
use App\Peserta;
use App\Event;


class JoinController extends Controller {
    public function join(Request $request, $id){
        // get all event
        $event = Event::find($id);
        $status = "semua";

        return view('explore.create', ['event' => $event]);
    }
    public function addJoin(Request $request, $id) {
    	// $peserta = Auth::user();
    	$idEvent = $id;

        $peserta = Peserta::create([
            'no_identitas' => $request->no_identitas,
            'nama' => $request->nama,
            'no_telp' => $request->no_telp,
            'asal_instansi' => $request->instansi,
            'sumber_informasi' => $request->sumber_informasi,
            'uuid' => rand(),
        ]);

        $file = $request->file('bukti_transfer');

        if($request->hasFile('bukti_transfer')) {
            $file_name = time()."_".$file->getClientOriginalName();
            $folder_name = 'bukti-tf';
            $file->move($folder_name, $file_name);
        }
        else {
            $file_name = '';
        }
        PesertaEvent::create([
            'peserta_id' => $peserta->id,
            'event_id' => $idEvent,
            'bukti_transfer' => $file_name,
            'user_id' => Auth::id(), // tambahkan
        ]);

    	return redirect()->action('JoinController@sertifikat', ['id'=> $id, 'idPeserta' => $peserta->id, ]);
    }

    public function sertifikat($id, $idPeserta){
        $event =  PesertaEvent::join('peserta', 'peserta.id_peserta', '=', 'peserta_events.peserta_id')->join('events', 'events.id', '=', 'peserta_events.event_id')->where('id_peserta', $idPeserta)->first();

        return view('explore.sertifikat', ['event' => $event]);
    }
}
