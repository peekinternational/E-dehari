<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
  protected $primaryKey = 'srv_id';
  public $fillable = ['f_userId', 'service_category', 'currency_type', 'amount', 'wages'];
}
