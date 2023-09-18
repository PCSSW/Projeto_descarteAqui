<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catador extends Model
{
    use HasFactory;
    protected $fillable = [
        'nomeCatador', 
        'localAtuacao', 
        'telefoneCatador', 
        'disponibilidade_id'
    ];
    public function agendamento(){
        return $this->hasMany('App/Models/Agendamento', 'catador_id');
    }
    public function material(){
<<<<<<< HEAD
        return $this->hasMany('App/Models/Catador_Material', 'material_id');
    }
    public function disponibilidade(){
        return $this->hasMany('App/Models/Disponibilidade', 'catador_id');
=======
        return $this->hasMany('App/Models/Material', 'catador_id');
    }
    public function disponibilidade(){
        return $this->belongsTo('App/Models/Disponibilidade');
>>>>>>> 0c4e1e84f962a63321d416ee05b2034698d64556
    }
 
}
