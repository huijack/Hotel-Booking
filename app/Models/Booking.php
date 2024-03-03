<?php

namespace App\Models;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Booking extends Model
{
    use SoftDeletes;

    public $timestamps = true;
    protected $table = 'bookings';

    protected $dates = ['created_at', 'updated_at', 'deleted_at'];
    protected $primaryKey = 'booking_id';
    protected $fillable = ['first_name', 'last_name','company_name', 'country', 'street_address', 'street_address2', 'postcode', 'province', 'phone_number', 'email', 'date_check_in', 'date_check_out', 'room_type', 'room_quantity', 'order_notes', 'price', 'adults', 'children'];
}
