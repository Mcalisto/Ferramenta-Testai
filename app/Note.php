<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
  public function notas(){

    return $this->belongsTo(User::class);

  }
}
