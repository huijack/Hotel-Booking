<?php

namespace App\Http\Controllers;

use App\Models\Rooms;
use App\Models\Booking;
use App\Models\UserAccount;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class HotelController extends Controller
{
    public function index() {
        if (Auth::check()) {
            return view('home');
        }
        else {
            return view('welcome');
        }
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

        if (!Auth::check()) {
            return redirect()->route('login');
        }
        else {
            $rooms = Rooms::all();
            return view('rooms', compact('rooms'));
        }
    }

    public function checkout(Request $request) {

        $room_type = $request->get('room_type');
        $dateCheckIn = $request->input('date_check_in');
        $dateCheckOut = $request->input('date_check_out');
        $roomQuantity = $request->input('room_quantity');
        $adults = $request->input('adults');
        $children = $request->input('children');

        $room = Rooms::where('type', $room_type)->first();

        if ($room) {
            $numberOfDays = (strtotime($dateCheckOut) - strtotime($dateCheckIn)) / (60 * 60 * 24);

            $totalPrice = $room->price * $numberOfDays * $roomQuantity;


            return view('checkout', compact('room', 'dateCheckIn', 'dateCheckOut', 'roomQuantity', 'adults', 'children', 'totalPrice', 'numberOfDays'));
        }
        else {
            return back()->with('error', 'Selected room type does not exist.');
        }

    }
}
