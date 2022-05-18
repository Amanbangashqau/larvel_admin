<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SystemLogs extends Model
{
    //
      protected $fillable = [
        'company_id',
        'module',
        'action',
        'query',
        'added_by'
      ];
}
