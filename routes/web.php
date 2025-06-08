<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InvitationController;

// Rute utama, bisa diarahkan ke halaman landing jika ada
Route::get('/', function () {
    return "Selamat Datang di Undangan Online. Silakan akses undangan Anda melalui tautan yang dibagikan.";
});

// Rute untuk menampilkan undangan berdasarkan slug nama tamu
Route::get('/invite/{guest:slug}', [InvitationController::class, 'show'])->name('invitation.show');

// Rute untuk menyimpan data RSVP dari form
Route::post('/rsvp', [InvitationController::class, 'store'])->name('rsvp.store');
