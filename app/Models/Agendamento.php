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
<<<<<<< HEAD
        return $this->belongsTO('App/Models/Catador');
    }
    public function material(){
        return $this->hasMany('App/Models/Material_Agendamento', 'material_id');
=======
        return $this->belongsTo('App/Models/Catador');
    }
    public function material(){
        return $this->belongsTo('App/Models/Material');
>>>>>>> 0c4e1e84f962a63321d416ee05b2034698d64556
    }

}
