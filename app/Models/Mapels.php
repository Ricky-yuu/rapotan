<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mapels extends Model
{
    use HasFactory;
    protected $table = "mapels";

    public function nilai()
    {
      return $this->hasMany('App\Models\Nilai', 'id');
    }
}