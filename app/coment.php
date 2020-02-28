<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class coment extends Model
{
  protected $fillable = [
    'rating','content',
  ]
  public function user()
{
  return $this->belongsTo(User::class, 'user_id');
}

public function articles()
{
return $this->belongsTo(User::class, 'article_id');
}

}
