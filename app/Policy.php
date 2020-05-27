<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Policy extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'customer_name', 'customer_address', 'premium', 'policy_type', 'insurer_name',
  ];
  
}
