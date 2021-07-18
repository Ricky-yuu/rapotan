<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelass extends Model
{
    use HasFactory;
    protected $table = "Kelass";

    public function user()
    {
      return $this->hasMany('App\Models\User');
    }
}