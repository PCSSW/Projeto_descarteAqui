<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material_Agendamento extends Model
{
    use HasFactory;
    public function agendamento(){
        return $this->belongs('App/Models/Agendamento');
    }
    public function material(){
        return $this->belongs('App/Models/Material');
    }
}
