<?php

namespace App\Http\Controllers;

use App\Mail\ConfirmOrder;
use App\Models\Rooms;
use App\Models\Booking;
use App\Models\Enquiry;
use App\Models\UserAccount;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
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

        if (UserAccount::where('username', $user->username)->exists()) {
            return back()->with('error', 'Username already exists');
        }

        if (strlen($request->password) < 8) {
            return back()->with('error', 'Password must be at least 8 characters long');
        }

        if (UserAccount::where('email', $user->email)->exists()) {
            return back()->with('error', 'Email already exists');
        }
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

        return redirect('/')->with('success', 'You have been successfully logged out');
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

        $room_type = $request->input('room_type');
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
            return back()->with('success', 'Your booking has been successfully completed.');
        }

    }

    public function checkoutPost (Request $request) {

        $booking = new Booking();

        $booking->first_name = $request->input('first-name');
        $booking->last_name = $request->input('last-name');
        $booking->company_name = $request->input('company-name');
        $booking->country = $request->input('countries');
        $booking->street_address = $request->input('address');
        $booking->street_address2 = $request->input('address2');
        $booking->postcode = $request->input('postcode');
        $booking->province = $request->input('province');
        $booking->phone_number = $request->input('phone');
        $booking->email = $request->input('email');
        $booking->room_type = $request->input('room_type');
        $booking->date_check_in = $request->input('date_check_in');
        $booking->date_check_out = $request->input('date_check_out');
        $booking->room_quantity = $request->input('room_quantity');
        $booking->order_notes = $request->input('additional-info');
        $booking->adults = $request->input('adults');
        $booking->children = $request->input('children');
        $booking->price = $request->input('total_price');

        $booking->save();

        Mail::to($booking->email)->send(new ConfirmOrder($booking));

        return redirect()->route('checkout')->with('success', 'Your booking has been successfully completed');
    }

    public function contact () {
        if (Auth::check()) {
            return view('contact');
        }
        else {
            return redirect()->route('login');
        }
    }

    public function contactPost(Request $request) {
        try {
            $enquiry = new Enquiry();

            $enquiry->name = $request->input('name');
            $enquiry->nric = $request->input('nric');
            $enquiry->phone = $request->input('phone');
            $enquiry->email = $request->input('email');
            $enquiry->message = $request->input('message');

            $enquiry->save();

            return back()->with('success', 'Your enquiry has been successfully submitted');
        }
        catch (Exception $e) {
            return back()->with('error', 'An error occurred while submitting your enquiry');
        }
    }

    public function aboutUs() {
        return view('aboutus');
    }
}
