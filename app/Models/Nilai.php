<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    use HasFactory;
    protected $table = "nilais";

    protected $fillable = [
      'id_user','id_mapel','nilai'
    ];

    public function user()
    {
      return $this->belongsTo('App\Models\User');
    }

    public function mapel()
    {
      return $this->belongsTo('App\Models\Mapels','id_mapel');
    }
}
