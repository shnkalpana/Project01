<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\UserController;

class AdminController extends Controller
{
    public function user_name()
    {
        $RegisterdUser = auth()->user();
        $LoggedUserName = $RegisterdUser['name'];

        $users = User::all();

        return view('admin', compact('LoggedUserName', 'users'));
    }
}
