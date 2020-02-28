<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
  public $table = "articles";
 public $fillable = [
      'description','excerpt','title',
    ];
    public function user()
{
    return $this->belongsTo(User::class, 'user_id');
}
public function category()
{
return $this->belongsTo(Category::class, 'category_id');
}

};
