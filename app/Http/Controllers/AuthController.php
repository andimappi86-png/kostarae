<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // 1. Menampilkan Form PENCARI KOST
    public function showRegisterUser()
    {
        // Mengambil file dari folder views/auth/register-user.blade.php
        return view('auth.register-user'); 
    }

    // 2. Menampilkan Form PEMILIK KOST
    public function showRegisterOwner()
    {
        // Mengambil file dari folder views/auth/register-owner.blade.php
        return view('auth.register-owner');
    }

    // 3. PROSES MENYIMPAN DATA (Digunakan oleh keduanya)
    public function register(Request $request)
    {
        // Validasi
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'role' => 'required', // Ini yang membedakan nanti
            'phone' => 'nullable|string',
            'gender' => 'nullable|string',
        ]);

        // Simpan ke Database
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role, // Nilai role diambil dari form
            'phone' => $request->phone,
            'gender' => $request->gender,
        ]);

        return redirect('/')->with('success', 'Registrasi berhasil! Selamat datang.');
    }
    public function showLoginForm()
    {
        return view('auth.login'); // Pastikan Anda punya file login.blade.php di folder views/auth
    }
}

