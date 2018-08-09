<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{
    protected $primaryKey = 'info_id';
    public $fillable = ['w_name', 'w_phone', 'nationality', 'gender', 'dob', 'skill', 'education', 'experience', 'availability', 'currency_type', 'amount', 'wages', 'location', 'image', 'service_category', 'userId'];
}
