<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catador_Material extends Model
{
    use HasFactory;
    public function catador(){
        return $this->belongsTo('App/Models/Catador');
    }
    public function material(){
        return $this->belongsTo('App/Models/Material');
    }
}
