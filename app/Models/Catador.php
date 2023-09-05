<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catador extends Model
{
    use HasFactory;
    protected $fillable = ['nomeCatador', 'local', 'telefoneCatador', 'disponibilidade_id'];
    public function disponibilidade() {
        return $this->belongsTo('App/Models/Disponibilidade');
    }
}
