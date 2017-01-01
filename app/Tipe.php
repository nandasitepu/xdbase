<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipe extends Model
{
      protected $table = 'tipe';
      public $fillable = [
        'fullname'
      ];

      // Penyedia Punya Banyak Layanan
      public function penyedia()
      {
        return $this->hasMany('App\Penyedia');
      }
}
