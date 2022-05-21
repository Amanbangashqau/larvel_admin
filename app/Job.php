<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
  protected $table = 'jobs';
  protected $fillable = [
'client_name',
'company_name',
'phone',
'email',
'address',
'city',
'state',
'zip_code',
'country',
'metro_area',
'job_type',
'job_source',
'description',
'external_company_id',
'note',
'status',
'start_date',
'start_time',
'end_date',
'end_time',
'team_member',
  ];
}
