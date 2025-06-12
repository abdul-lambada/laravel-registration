<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('register');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:registrations,email',
            'address' => 'required|string|max:255',
        ]);

        $registration = \App\Models\Registration::create($validated);

        // Kirim email notifikasi ke email yang didaftarkan
        Mail::raw('Terima kasih telah melakukan registrasi!', function ($message) use ($registration) {
            $message->to($registration->email)
                    ->subject('Registrasi Berhasil');
        });

        return redirect()->route('register.create')->with('success', 'Pendaftaran berhasil!');
    }
}
