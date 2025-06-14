<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Registration;
use App\Mail\RegistrationSuccess;

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
        Mail::to($registration->email)->send(new RegistrationSuccess($registration));

        return redirect()->route('register.create')->with('success', 'Pendaftaran berhasil!');
    }

    public function index()
    {
        $registrations = \App\Models\Registration::orderByDesc('created_at')->get();
        return view('registrations', compact('registrations'));
    }
}
