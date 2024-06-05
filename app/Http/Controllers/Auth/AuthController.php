<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;


class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login(LoginRequest $r)
    {
        if ($r->validated()) {
            if (Auth::guard('web')->attempt(
                [
                    'email' => $r->email,
                    'password' => $r->password
                ]
            )) {
                return redirect('home')->with('pesan', 'Login berhasil');
            } else {
                return back()->with('pesan', 'Login gagal');
            }
        }
    }

    public function daftar()
    {
        return view('auth.register');
    }

    public function register(RegisterRequest $r)
    {
        if ($r->validated()) {
            User::create([
                'name' => $r->name,
                'email' => $r->email,
                'password' => Hash::make($r->password)
            ]);

            return redirect('/')->with('pesan', 'Registrasi berhasil');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
