<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
  public $table = "articles";
 public $fillable = [
      'description','excerpt','title',
    ];
};
