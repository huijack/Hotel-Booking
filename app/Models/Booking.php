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
    protected $primaryKey = 'id';
    protected $fillable = ['email', 'start_date', 'end_date', 'room_type', 'requirements', 'adults', 'children', 'requests'];
}
