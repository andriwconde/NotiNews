<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class photo extends Model
{
 protected $fillable = [
      'file_path',
    ]
    public function user()
{
    return $this->belongsTo(User::class, 'user_id');
}

}
