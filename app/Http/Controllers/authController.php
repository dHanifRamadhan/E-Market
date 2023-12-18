<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class authController extends Controller
{
    //
    public function login() {
        if  (Auth::check()) {
            return redirect()->route('dashboard');
        } else {
            return view('Auth.login');
        }       
    }

    public function authLogin(Request $request) {
        $validasi = $request->only('email', 'password');


        if (Auth::attempt($validasi)) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        }

        return redirect()->back()->withInput()->withErrors([
            'email' => 'Email atau Password salah dimasukan!?'
        ]);
    }
    
    public function register() {
        if  (Auth::check()) {
            return redirect()->route('dashboard');
        } else {
        return view('Auth.register');
        }
    }

    public function authRegister(Request $request) {
        $this->validate($request, [
            'username' => 'required',
            'email' => 'required|email:dns|unique:users,email',
            'password' => 'required|min:6',
            'address' => 'required',
            'hp' => 'required|min:12|max:13'
        ]);

        DB::table('users')->insert([
            'name' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'address' => $request->address,
            'phone' => $request->hp,
            'created_at' => now()
        ]);

        return redirect()->route('login');
    }

    public function logout(Request $request) {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('auth.login');
    }
}
