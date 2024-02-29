<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserAccount extends Authenticatable
{
    use HasFactory;
    use SoftDeletes;
    public $timestamps = true;
    protected $table = 'useraccounts';

    protected $dates = ['created_at', 'updated_at', 'deleted_at'];
    protected $primaryKey = 'user_id';
    protected $fillable = ['username', 'password', 'email'];
}
