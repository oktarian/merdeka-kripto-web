<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log; // Untuk mencatat pesan
use Illuminate\Support\Facades\Mail; // Jika ingin mengirim email

class PageController extends Controller
{
    /**
     * Menampilkan halaman utama.
     */
    public function index()
    {
        return view('welcome');
    }

    /**
     * Menangani data dari form kontak.
     */
    public function handleContact(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|max:100',
            'message' => 'required|string|max:2000',
        ]);

        // Untuk saat ini, kita hanya catat (log) pesannya.
        // Di masa depan, Anda bisa mengirim email notifikasi dari sini.
        Log::info('Pesan Kontak Baru dari: ' . $validated['email'], $validated);

        // Redirect kembali ke halaman utama dengan pesan sukses
        return redirect('/#kontak')
               ->with('success', 'Terima kasih! Pesan Anda telah kami terima.');
    }
}