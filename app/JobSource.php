<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobSource extends Model
{
  protected $table = 'jobsources';
  protected $fillable = [
      'name',
      'description'
  ];
}
