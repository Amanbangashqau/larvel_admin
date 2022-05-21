<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ParentStatus extends Model
{
  protected $table = 'parent_status';
  protected $fillable = [
      'parent_status'
  ];
}
