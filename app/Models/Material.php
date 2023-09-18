<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    use HasFactory;
    protected $fillable = [
        'nomeMaterial', 
        'civil_id', 
        'catador_id', 
        'empresa_id' 
    ];
    public function agendamento(){
<<<<<<< HEAD
        return $this->hasMany('App/Models/Material_Agendamento', 'agendamento_id');
    }
    public function catador(){
        return $this->hasMany('App/Models/Catador_Material', 'catador_id');
    }
=======
        return $this->hasMany('App/Models/Agendamento', 'material_id');
    }
    public function civil(){
        return $this->belongsTo('App/Models/Civil');
    }
    public function catador(){
        return $this->belongsTo('App/Models/Catador');
    }
    public function empresa(){
        return $this->belongsTo('App/Models/Empresa');
    }
    
>>>>>>> 0c4e1e84f962a63321d416ee05b2034698d64556
}
