<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categories_types extends Model
{
    protected $fillable = [
        'cat_type',
        'cat_id'
    ];
}
