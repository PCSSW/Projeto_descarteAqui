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

}
