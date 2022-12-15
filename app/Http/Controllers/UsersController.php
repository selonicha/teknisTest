<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function tampilanUsers()
    {
        return view("users");
    }

    public function showUsersList()
    {
        $users = User::all();
        return view("users")
    }
}
