<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tbl_company extends Model
{
  protected $fillable = [
    'name',
    'address',
    'phone_number',
    'email',
    'work_sync_email',
    'note',
    'commission',
    'updated_by',
    'added_by'

  ];
    //
}
