<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function admin()
    {
        $data = [
            'title' => 'Halaman Dashboard',
            'breadcrumb' => 'dashboard'
        ];
        return view('layout.template', $data);
    }

    public function login()
    {
        $data = [
            'title' => 'Halaman Login'
        ];
        return view('pages.login', $data);
    }

    public function loginproses(Request $request)
    {
        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect('admin');
        }
        return redirect('login');
    }

    public function register()
    {
        $data = [
            'title' => 'Halaman Register'
        ];
        return view('pages.register', $data);
    }

    public function registeruser(Request $request)
    {
        // dd($request->all());\

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60),
        ]);

        return redirect('login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('login');
    }
}
