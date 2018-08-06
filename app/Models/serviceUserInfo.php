<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class serviceUserInfo extends Model
{
  protected $primaryKey = 'suser_info_id';
  public $fillable = ['f_userId', 'gender', 'dob', 'currency_type', 'amount', 'service_category', 'time', 'people', 'start_date', 'end_date', 'image', 'total'];

}
