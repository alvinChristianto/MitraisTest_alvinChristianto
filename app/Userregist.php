<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Userregist extends Model
{
    protected $table = 'user_registration';

    protected $fillable = ['firstname', 'lastname', 'dateofbirth', 'gender', 'email'];
}