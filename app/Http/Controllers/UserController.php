<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class UserController extends Controller
{
    //FUNCTION INDEX
    //DESKRIPSI:DISPLAY DASHBOARD VIEW DENGAN USER
    public function index(): view
    {
        $users = User::where('id', '!=', Auth::user()->id)->get();
        return view('dashboard', compact('users'));
    }
    //funcition userchat

    public function userChat(int $userId): view
    {
        return view('user-chat', compact('userId'));
    }
}
