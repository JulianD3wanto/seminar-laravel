<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\SpeakerApplication;
use Illuminate\Http\Request;

class SpeakerApplicationController extends Controller
{
    public function index(Request $request)
    {
        $q = $request->get('q');

        $items = SpeakerApplication::when($q, function ($query) use ($q) {
                $query->where('nama', 'like', "%{$q}%")
                      ->orWhere('email', 'like', "%{$q}%")
                      ->orWhere('perusahaan', 'like', "%{$q}%");
            })
            ->orderBy('created_at', 'asc')
            ->paginate(10);

        return view('layouts.admin.speaker.index', compact('items', 'q'));
    }

    public function show($id)
    {
        $item = SpeakerApplication::findOrFail($id);
        return view('layouts.admin.speaker.show', compact('item'));
    }

    public function updateStatus(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:pending,approved,rejected'
        ]);

        $item = SpeakerApplication::findOrFail($id);
        $item->status = $request->status;
        $item->save();

        return redirect()->back()->with('success', 'Status berhasil diubah.');
    }
}
