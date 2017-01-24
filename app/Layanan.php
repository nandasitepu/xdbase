<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Layanan extends Model
{
  protected $table = 'layanan';

  public $fillable = [
    'gambar',
    'nama',
    'slug',
    'detail',
    'syarat',
    'waktu',
    'biaya',
    'kontak',
    'info',
    'penyedia_id'
  ];

  // Relationship

  // Penyedia Punya Banyak Layanan
  public function penyedia()
  {
    return $this->belongsTo('App\Penyedia');
  }

}
