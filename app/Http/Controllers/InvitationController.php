<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use App\Models\Rsvp;
use Illuminate\Http\Request;

class InvitationController extends Controller
{
    public function show(Guest $guest)
    {
        $hasRsvpd = $guest->rsvp()->exists();

        // Ambil semua data rsvp untuk ditampilkan
        $rsvps = Rsvp::with('guest')->latest()->get();

        return view('invitation', [
            'guest' => $guest,
            'hasRsvpd' => $hasRsvpd,
            'rsvps' => $rsvps,
        ]);
    }

    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'guest_id' => 'required|exists:guests,id|unique:rsvps,guest_id',
            'relation' => 'nullable|string|max:100',
            'attendance' => 'required|in:Hadir,Tidak Hadir',
            'guest_count' => 'required_if:attendance,Hadir|integer|min:1|max:10',
            'message' => 'required|string|max:500',
        ], [
            'guest_id.unique' => 'Anda sudah pernah mengirimkan konfirmasi kehadiran.',
            'message.required' => 'Mohon isi ucapan & doa Anda.',
        ]);

        // Simpan data ke database
        Rsvp::create($validated);

        // Kembalikan ke halaman sebelumnya dengan pesan sukses
        return back()->with('success', 'Terima kasih! Konfirmasi kehadiran Anda telah kami terima.');
    }
}
