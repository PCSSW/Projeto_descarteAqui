<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agendamento extends Model
{
    use HasFactory;
    protected $fillable = [
        'horario', 
        'dia', 
        'avaliacao',
        'civil_id',
        'catador_id',
        'material_id'
    ];
    public function civil(){
        return $this->belongsTo('App/Models/Civil');
    }
    public function catador(){
        return $this->belongsTO('App/Models/Catador');
    }
    public function material(){
        return $this->hasMany('App/Models/Material_Agendamento', 'material_id');
    }

}
