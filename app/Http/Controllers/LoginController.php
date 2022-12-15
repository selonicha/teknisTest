<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function tampilanLogin()
    {
        return view("auth.login");
    }
    public function tampilanWelcome()
    {
        return view("welcome");
    }

    public function processLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',

        ]);

        $cekAkun = [
            'email' => $request->email,
            'password' => $request->password,

        ];



        if (Auth::attempt($cekAkun)) {
            return view('template.master');
        } else {
            return 'gagal';
        }
    }
}
