<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SpeakerApplication;

class SpeakerController extends Controller
{
    public function create()
    {
        return view('speaker.create');
    }

public function store(Request $request)
{
    $request->validate([
        'nama' => 'required|string|max:120',
        'email' => 'required|email|max:150',
        'whatsapp' => 'required|string|max:30',
        'perusahaan' => 'required|string|max:150',
        'website' => 'nullable|string|max:255',
        'sosmed' => 'required|string|max:255',
        'pengalaman' => 'required|string|max:2000',
        'pernah' => 'required|in:pernah,tidak',
        'keterangan_webinar' => 'required|string|max:2000',
        'recaptcha_token' => 'required|string',
    ]);

    $minScore = (float) config('services.recaptcha.min_score', 0.5);

    $result = $this->verifyRecaptchaV3($request->recaptcha_token, $request->ip());

    $isSuccess = $result['success'] ?? false;
    $score = (float) ($result['score'] ?? 0);
    $action = $result['action'] ?? '';
    $hostname = $result['hostname'] ?? null;

    if (!$isSuccess || $score < $minScore || $action !== 'speaker_form') {
        return back()->withErrors([
            'recaptcha' => 'Aktivitas terdeteksi tidak valid. Silakan coba lagi.',
        ])->withInput();
    }

    // ✅ SIMPAN KE DATABASE
    SpeakerApplication::create([
        'nama' => $request->nama,
        'email' => $request->email,
        'whatsapp' => $request->whatsapp,
        'perusahaan' => $request->perusahaan,
        'website' => $request->website,
        'sosmed' => $request->sosmed,
        'pengalaman' => $request->pengalaman,
        'pernah' => $request->pernah,
        'keterangan_webinar' => $request->keterangan_webinar,

        'status' => 'pending',

        // optional audit
        'recaptcha_score' => $score,
        'recaptcha_action' => $action,
        'recaptcha_hostname' => $hostname,
    ]);

    return redirect()->back()->with('success', 'Form berhasil dikirim. Tim kami akan menghubungi Anda.');
}

    private function verifyRecaptchaV3($token, $ip = null)
    {
        $secret = config('services.recaptcha.secret_key');

        $payload = [
            'secret' => $secret,
            'response' => $token,
        ];

        if (!empty($ip)) {
            $payload['remoteip'] = $ip;
        }

        $ch = curl_init('https://www.google.com/recaptcha/api/siteverify');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($payload));
        curl_setopt($ch, CURLOPT_TIMEOUT, 15);

        $response = curl_exec($ch);

        if ($response === false) {
            curl_close($ch);
            return ['success' => false];
        }

        curl_close($ch);

        $json = json_decode($response, true);
        return is_array($json) ? $json : ['success' => false];
    }
}
