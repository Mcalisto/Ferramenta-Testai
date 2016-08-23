<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notes extends Model
{
  public function notas(){

    return $this->belongsTo(User::class);

  }
}
