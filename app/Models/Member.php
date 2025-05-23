<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{

    protected $table = "table_member_detail";
    protected $fillable = [
        'member_name',
        'nic',
        'address',
        'contact_number',
        'email',
        'dob',
        'is_active'
    ];


    
}
