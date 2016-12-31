<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penyedia extends Model
{
  protected $table = 'penyedia';

  public $fillable = [
    'image_path',
    'fullname',
    'shortname',
    'slug',
    'desc',
    'contact',
    'tipe_id'
  ];

  // Relationship

  // Penyedia Punya Banyak Layanan
  public function layanan()
  {
    return $this->hasMany('App\Layanan');
  }

}
