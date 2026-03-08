<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Peserta;
use App\User;
use App\PesertaEvent;
use App\Notifications\CertificateUploaded;
use App\Event;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Auth; // tambahkan di atas
use Illuminate\Support\Facades\DB;


class PesertaController extends Controller {
	public function __construct() {
	    $this->middleware('auth');
	}

	public function index(Request $request, $id) {
        // $idUser = $request->user()->id;
		$peserta = PesertaEvent::join('peserta', 'peserta.id_peserta', '=', 'peserta_events.peserta_id')->where('event_id', $id)->get();

		return view('event.peserta', ['peserta' => $peserta]);
	}

    public function createPeserta() {
    	return view('peserta.create');
    }

    public function storePeserta(Request $request, $idEvent)
{
    $request->validate([
        'nama' => 'required',
        'no_telp' => 'required',
        'asal_instansi' => 'required',
        'sumber_informasi' => 'required',
    ]);

    $result = Peserta::create([
        'nama' => $request->nama,
        'no_telp' => $request->no_telp,
        'asal_instansi' => $request->asal_instansi,
        'sumber_informasi' => $request->sumber_informasi,
        'create_at' => date('Y-m-d H:i:s'),
        'uuid' => rand(),
    ]);

    PesertaEvent::create([
    'peserta_id' => $result->id,
    'event_id' => $idEvent,
    'user_id' => Auth::id(), // ini wajib supaya notif bisa dikirim ke user login
]);

    return redirect()->back()->with('status', 'Peserta berhasil ditambahkan');
}
    public function editPeserta($id, $idPeserta) {
        $peserta =  PesertaEvent::join('peserta', 'peserta.id_peserta', '=', 'peserta_events.peserta_id')->where('id_peserta', $idPeserta)->first();
        return view('event.sertifikat', ['peserta' => $peserta]);
    }

public function updatePeserta(Request $request, $id, $idPeserta)
{
    $request->validate([
        'file' => 'required|file',
    ]);

    $file = $request->file('file');
    $file_name = time()."_".$file->getClientOriginalName();
    $folder_name = 'file';
    $file->move($folder_name, $file_name);

    // 1) Update DB dulu
    Peserta::where('id_peserta', $idPeserta)->update([
        'sertifikat' => $file_name,
    ]);

    // 2) Setelah DB update, baru notif
$pesertaEvent = PesertaEvent::where('peserta_id', $idPeserta)
    ->where('event_id', $id)
    ->first();

//    dd($pesertaEvent->attributesToArray());
if (!$pesertaEvent) {
    return redirect()->back()->with('status', 'PesertaEvent tidak ditemukan.');
}

if (!$pesertaEvent->user_id) {
    return redirect()->back()->with('status', 'User ID kosong. Peserta ini join tanpa akun/login.');
}

$user = User::find($pesertaEvent->user_id);
$eventData = Event::find($id);

if ($user && $eventData) {
    $certificateUrl = url('file/'.$file_name);
    $user->notify(new CertificateUploaded($eventData->id, $eventData->nama, $certificateUrl));
    dd('notif terkirim', DB::table('notifications')->count(), DB::table('notifications')->latest('created_at')->first());
    }


    return redirect()->action('PesertaController@index', ['id' => $id])
        ->with('status', 'Sertifikat berhasil diupload & notifikasi dikirim.');
}

    public function deletePeserta($id, $idPeserta) {

        $pesertaevent = PesertaEvent::where('peserta_id', $idPeserta)->delete();
        $event = Peserta::where('id_peserta', $idPeserta)->delete();
        return redirect()->action('PesertaController@index', [$id])->with('status', 'Berhasil Hapus');
    }
}
