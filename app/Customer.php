<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
  protected $fillable = [

'name',
'email',
'password',
'address',
'zip_code',
'mobile_number',
'profile_img',
'added_by',
'updated_by'

  ];



    //
}
