<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class url extends Model
{
    /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'long_url', 'new_url', 
  ];
  
  /**
   * The attributes that should be hidden for arrays.
   *
   * @var array
   */
  protected $hidden = [
      'remember_token',
  ];
  }
  