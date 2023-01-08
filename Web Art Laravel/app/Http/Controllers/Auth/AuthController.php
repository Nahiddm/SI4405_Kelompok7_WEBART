<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function loginView()
    {
        return view('auth.login');
    }

    public function registerView()
    {
        return view('auth.register');
    }

    public function login(Request $request)
    {
        // validasi form
        $data = $request->validate([
            "email" => "required",
            "password" => "required",
        ]);

        // cek email dan password
        if (Auth::attempt(['email' => $data['email'], 'password' => $data['password']])) {
            return to_route('home');
        } else {
            throw ValidationException::withMessages([
                'email' => ['Wrong email or password'],
            ]);
            return to_route('login');
        }
    }

    public function register(Request $request)
    {
        $data = $request->validate([
            "email" => "required|email|unique:users,email",
            "name" => "required|string",
            "password" => "required|confirmed|min:8",
            "no_telp" => "required|numeric"
        ]);
        // hash dulu password nya
        $data['password'] = bcrypt($data['password']);
        // masukan data ke tabel user
        $data['role_id'] = 2;
        $user = User::create($data);
        Auth::login($user);
        return to_route('home');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
