<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;
use App\Models\Pekerja;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        $credentials = $request->only('username', 'password');

        $admin = Admin::where('username', $credentials['username'])->first();
        if ($admin && Hash::check($credentials['password'], $admin->password)) {
            Auth::login($admin);
            return redirect()->route('dashboard.admin');
        }

        $pekerja = Pekerja::where('username', $credentials['username'])->first();
        if ($pekerja && Hash::check($credentials['password'], $pekerja->password)) {
            Auth::login($pekerja);
            return redirect()->route('dashboard.pekerja');
        }

        return redirect()->back()->withErrors(['username' => 'Username atau password salah']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
