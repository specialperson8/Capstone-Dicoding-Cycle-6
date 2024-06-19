<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register');
    }

    public function store(Request $request)
    {
        // First, validate the password without checking the uniqueness of email and username
        $request->validate([
            'password' => 'required|string|min:8',
        ]);

        // Manually check if the email or username already exists
        $userExists = User::where('email', $request->email)
            ->orWhere('username', $request->username)
            ->exists();

        if ($userExists) {
            // If user exists, redirect back with an error message
            return redirect()->back()->withInput()->withErrors(['email' => 'Email atau Username telah digunakan']);
        }

        // If the user does not exist, validate the rest of the data
        $request->validate([
            'username' => 'required|string|max:255|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
        ]);

        // Create and save the new user
        $user = new User([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $user->save();

        // Redirect to the login page with a success message
        return redirect('login')->with('success', 'Selamat akun kamu berhasil didaftarkan');
    }
}
