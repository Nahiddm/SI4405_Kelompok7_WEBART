<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class ProfileController extends Controller
{
    public function show(Request $request)
    {
        $user = $request->user();
        return view('profile.show', compact('user'));
    }

    public function view_updateProfile(Request $request)
    {
        $user = $request->user();
        return view('profile.edit', compact('user'));
    }

    public function updateProfile(Request $request)
    {
        $data = $request->validate([
            "name" => "required",
            "email" => "required|email|unique:users,email," . $request->user()->id,
            "no_telp" => "required"
        ]);

        $request->user()->update($data);
        return to_route('profile.show', $request->user())->with('message', 'Profile Successfully Updated');
    }

    public function view_updatePassword(Request $request)
    {
        $user = $request->user();
        return view('profile.password', compact('user'));
    }

    public function updatePassword(Request $request)
    {
        $data = $request->validate([
            "old_password" => "required|string",
            "password" => "required|min:8|confirmed|string",
        ]);

        if (Hash::check($data['old_password'], $request->user()->password)) {
            $request->user()->update([
                "password" => bcrypt($data['password'])
            ]);
            return to_route('profile.show')->with('message', 'Password Successfully Updated');
        }
        throw ValidationException::withMessages([
            'old_password' => ['Wrong password'],
        ]);
        return to_route('profile.edit.password', $request->user());
    }
}
