<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provinsi extends Model
{
  protected $table = 'provinsi';
  public $fillable = [
    'nama', 'ibukota'
  ];

  // Provinsi Relationship

}
