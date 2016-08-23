<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Atividades extends Model
{
  protected $table = 'activities';
  public $timestamps  = false;

protected $fillable = array('name', 'description');
}
