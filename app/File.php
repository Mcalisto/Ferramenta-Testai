<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
  protected $table = 'files';
  public $timestamps  = false;

protected $fillable = array('user_name', 'file', 'tested');
}
