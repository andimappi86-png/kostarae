<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function showUserForm()
    {
        return view('auth.register-user');
    }

    public function showOwnerForm()
    {
        return view('auth.register-owner');
    }
}
