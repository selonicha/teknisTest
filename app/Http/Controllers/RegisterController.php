<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function tampilanRegister()
    {
        return view('auth.register');
    }
    public function saveRegister(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
            'name' => 'required'
        ]);

        $buatAkun = [
            'email' => $request->email,
            'name' => $request->name,
            'password' => Hash::make($request->password),
        ];

        User::create($buatAkun);

        $cekAkun = [
            'email' => $request->email,
            'password' => $request->password,
            'name' => $request->name,
        ];



        if (Auth::attempt($cekAkun)) {
            return 'sukses';
        } else {
            return 'gagal';
        }
    }
}
