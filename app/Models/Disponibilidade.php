<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disponibilidade extends Model
{
    use HasFactory;
    protected $fillable = [
        'horarioDisponivel', 
        'diaDisponivel',
        'catador_id'
    ];
    public function catador(){
        return $this->belongsTo('App/Models/Catador');
    }

}
