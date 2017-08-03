<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admdiaria extends Model
{
  protected $connection = 'pgsql';
  protected $table = 'admdiarias';
  protected $fillable = ['pescodigo', 'pnome'];
}
