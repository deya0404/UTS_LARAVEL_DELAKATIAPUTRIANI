<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    // TAMPILKAN FORM LOGIN
    public function showLoginForm()
    {
        return view('login');
    }

    // PROSES LOGIN
    public function loginUser(Request $request)
    {
        $email = $request->email;
        $password = $request->password;

        // LOGIN SEDERHANA
        if ($email && $password) {

            return redirect()->route('dashboard');

        }

        return back();
    }
}