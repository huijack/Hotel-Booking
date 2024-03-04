<?php

namespace App\Models;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Enquiry extends Model
{
    use SoftDeletes;

    public $timestamps = true;
    protected $table = 'enquiries';

    protected $dates = ['created_at', 'updated_at', 'deleted_at'];
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'nric', 'phone', 'email', 'message'];
}
