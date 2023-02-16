<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class DashBoardController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}