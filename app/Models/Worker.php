<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Worker extends Model
{
    protected $primaryKey = 'w_id';
    public $fillable = ['w_name', 'w_designation', 'w_mobile', 'w_gender', 'w_image', 'userId'];
}
