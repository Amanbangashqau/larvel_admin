<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Models extends Model
{
    protected $fillable = [
  'company_id',
  'buid',
  'model_id',
  'product_id',
  'brand_id',
  'cat_id',
  'cat_type',
  'status',
  'reorder_level',
  'bp',
  'msp',
  'rp',
  'commission_type',
  'fixed_percent',
  'gloabel_model_id',
  'added_by'
];
}
