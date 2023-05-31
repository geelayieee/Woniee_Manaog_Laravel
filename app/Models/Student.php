<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['last_name', 'first_name', 'age', 'address', 'phone_number'];
}
