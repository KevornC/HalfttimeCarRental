<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(){
        return view('livewireBlade.LiveLogin');
    }
    public function loginAdmin(){
        return view('livewireAdminBlade.LiveAdminLogin');
    }
    public function logoutAdmin(){
        session()->forget('admin');
        session()->flush();
        session()->regenerate();

        return redirect()->route('homepage');
    }
    public function logoutUser(){
        session()->forget('member');
        session()->flush();
        session()->regenerate();

        return redirect()->route('homepage');
    }
}
