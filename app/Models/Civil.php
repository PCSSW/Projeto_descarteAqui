<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Civil extends Model
{
    use HasFactory;
    protected $fillable = [
        'nomeCivil', 
        'enderecoCivil', 
        'telefoneCivil'
    ];
    public function agendamento(){
        return $this->hasMany('App/Models/Agendamento', 'civil_id');
    }
<<<<<<< HEAD
=======
    public function material(){
        return $this->hasMany('App/Models/Material', 'civil_id');
    }
>>>>>>> 0c4e1e84f962a63321d416ee05b2034698d64556

}
