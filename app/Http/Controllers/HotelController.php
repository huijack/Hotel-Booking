<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\UserAccount;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class HotelController extends Controller
{
    public function index() {
        return view('home');
    }

    public function login() {
        return view('login');
    }

    public function register() {
        return view('register');
    }

    public function registerPost(Request $request) {
        $user = new UserAccount();
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);


        $user->save();

        return back()->with('success', 'You have been successfully registered');
    }

    public function loginPost(Request $request) {
        $credentials = [
            'username' => $request->username,
            'password' => $request->password
        ];

        if (Auth::attempt($credentials)) {
            return redirect('/home')->with('success', 'You have been successfully logged in');
        }

        return back()->with('error', 'Invalid login credentials');

    }

    public function logout() {
        Auth::logout();

        return redirect() ->route('login');
    }

    public function rooms() {
        return view('rooms');
    }
}
