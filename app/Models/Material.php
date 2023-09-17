<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    use HasFactory;
    protected $fillable = [
        'material', 
        'civil_id', 
        'catador_id', 
        'empresa_id' 
    ];
    public function agendamento(){
        return $this->hasMany('App/Models/Material_Agendamento', 'agendamento_id');
    }
    public function catador(){
        return $this->hasMany('App/Models/Catador_Material', 'catador_id');
    }
}
