<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
  protected$fillable = [
    'genre'
    'title'
    'album_id'
  ];

  public function album() {
    return $this->belongsTo('App\Album');
  };
}
