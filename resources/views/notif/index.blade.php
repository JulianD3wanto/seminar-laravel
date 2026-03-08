@extends('layouts.default.app')

@section('content')
<div class="container py-4">
    <h4>Notifikasi</h4>

    @if($notifications->count() == 0)
        <div class="alert alert-info mt-3">Belum ada notifikasi.</div>
    @else
        <div class="list-group mt-3">
            @foreach($notifications as $n)
                <form action="{{ route('notif.read', $n->id) }}" method="POST" class="list-group-item d-flex justify-content-between align-items-center">
                    @csrf
                    <div>
                        <div class="font-weight-bold">{{ $n->data['event_name'] ?? 'Sertifikat tersedia' }}</div>
                        <small class="text-muted">{{ $n->created_at->diffForHumans() }}</small>
                    </div>
                    <button class="btn btn-primary btn-sm">Buka</button>
                </form>
            @endforeach
        </div>
    @endif
</div>
@endsection
