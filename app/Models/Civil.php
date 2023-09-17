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

}
