<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\UserAccount;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function index() {
        return view('welcome');
    }
}
