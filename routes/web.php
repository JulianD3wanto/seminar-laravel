<?php
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PesertaController;
use App\Http\Controllers\ExploreController;
use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\User;
use App\Notifications\CertificateUploaded;
use Illuminate\Support\Facades\DB;


Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index');

Auth::routes();

// Explore Resource
Route::prefix('explore')->group(function() {
	Route::get('/', 'ExploreController@index')->name('explore.index');
	Route::get('search', 'ExploreController@search')->name('explore.search');
	Route::get('week', 'ExploreController@week')->name('explore.week');
	Route::get('month', 'ExploreController@month')->name('explore.month');
	Route::get('all', 'ExploreController@all')->name('explore.all');
	Route::get('{id}', 'ExploreController@show')->name('explore.show');
});

// Dashboard
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

// Dashboard Event Resource
Route::prefix('dashboard')->group(function() {
	Route::get('event', 'EventController@index')->name('dashboard.event');
	Route::get('event/create', 'EventController@createEvent');
	Route::post('event', 'EventController@storeEvent');
	Route::get('event/{id}/edit', 'EventController@editEvent');
	Route::put('event/{id}', 'EventController@updateEvent');
	Route::get('event/{id}/detail', 'EventController@detailEvent');
	Route::get('event/{id}/delete', 'EventController@deleteEvent');
});

Route::prefix('dashboard')->group(function() {
	Route::get('event/{id}/peserta', 'PesertaController@index')->name('dashboard.peserta');
	Route::get('event/{id}/peserta/create', 'PesertaController@createPeserta');
	Route::post('event/{id}/peserta', 'PesertaController@storePeserta');
	Route::get('event/{id}/peserta/{idPeserta}/edit', 'PesertaController@editPeserta');
	Route::put('event/{id}/peserta/{idPeserta}/edit', 'PesertaController@updatePeserta');
	Route::get('event/{id}/peserta/{idPeserta}/delete', 'PesertaController@deletePeserta');
});

// Dashboard Ticket Resource
Route::prefix('dashboard')->group(function() {
	Route::get('ticket', 'TicketController@index')->name('dashboard.ticket');
	Route::get('ticket/pdf/{id}', 'TicketController@pdf')->name('dashboard.ticket.pdf');
});

// Dashboard Profile Resource
Route::prefix('dashboard')->group(function() {
	Route::get('profile', 'ProfileController@showProfile')->name('profile');
	Route::put('profile', 'ProfileController@updateProfile');
	Route::get('password', 'ProfileController@showPassword')->name('password');
	Route::put('password', 'ProfileController@updatePassword');
});

// Join Event
Route::prefix('explore/{id}')->group(function() {
	Route::get('join', 'JoinController@join');
	Route::post('join', 'JoinController@addJoin');
	Route::get('join/sertifikat/{idPeserta}', 'JoinController@sertifikat');
});

// Pembicara
Route::get('/menjadi-pembicara', 'SpeakerController@create')->name('speaker.create');
Route::post('/menjadi-pembicara', 'SpeakerController@store')->name('speaker.store');

//route pembicara data admin
Route::middleware(['auth'])->group(function () {

    // list pengajuan pembicara
    Route::get('/admin/speaker', 'Admin\\SpeakerApplicationController@index')->name('admin.speaker.index');

    // detail pengajuan
    Route::get('/admin/speaker/{id}', 'Admin\\SpeakerApplicationController@show')->name('admin.speaker.show');

    // update status (approve/reject)
    Route::post('/admin/speaker/{id}/status', 'Admin\\SpeakerApplicationController@updateStatus')->name('admin.speaker.status');
});

// Route::post('/notif/{id}/read', function ($id) {
//     $notif = auth()->user()->notifications()->findOrFail($id);
//     $notif->markAsRead();

//     $url = $notif->data['certificate_url'] ?? url('/');
//     return redirect($url);
// })->name('notif.read')->middleware('auth');

Route::get('/notif', function () {
    // halaman notifikasi (sementara)
    $notifications = auth()->user()->unreadNotifications;
    return view('notif.index', compact('notifications'));
})->name('notif.index')->middleware('auth');

Route::prefix('explore/{id}')->middleware('auth')->group(function() {
    Route::get('join', 'JoinController@join');
    Route::post('join', 'JoinController@addJoin');
    Route::get('join/sertifikat/{idPeserta}', 'JoinController@sertifikat');
});

Route::get('/test-notif', function () {
    $user = User::find(13);
    if (!$user) dd("User 13 tidak ada");

    $before = DB::table('notifications')->count();

    $user->notify(new CertificateUploaded(10, 'Test Event', 'http://test.com'));

    $after = DB::table('notifications')->count();

    dd(compact('before', 'after'));
});
