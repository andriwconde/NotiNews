<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\user;
use App\Article;

class Coment extends Model
{
    
  protected $fillable = [
    'rating','content','user_id','article_id'
  ];
  public function user()
{
  return $this->belongsTo(User::class, 'user_id');
}

public function articles()
{
return $this->belongsTo(User::class, 'article_id');
}

}
