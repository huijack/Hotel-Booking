<?php

namespace App\Models;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserAccount extends Model
{
    use SoftDeletes;
    public $timestamps = true;
    protected $table = 'useraccounts';

    protected $dates = ['created_at', 'updated_at', 'deleted_at'];
    protected $primaryKey = 'user_id';
    protected $fillable = ['username', 'password', 'email'];
}
