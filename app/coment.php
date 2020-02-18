<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class coment extends Model
{
  protected $fillable = [
    'rating','content',
  ]
}
