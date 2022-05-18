<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Technician extends Model
{
  protected $fillable = [

'name',
'email',
'password',
'service_id',
'latitude',
'longitude',
'address',
'zip_code',
'mobile_number',
'credit_card_name',
'bank_mailing_address',
'bank_routing_number',
'account_number',
'account_type',
'credit_card_no',
'credit_card_expire_date',
'charge_per_hour',
'experience',
'member_img',
'added_by',
'updated_by'

  ];



    //
}
