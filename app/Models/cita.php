<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cita extends Model
{
    use HasFactory;
    protected $table = '_cita';
    protected $primaryKey = 'id';
    protected $fillable = [
        'paciente_id',
        'médico_id',
        'fecha_cita',
        'hora_cita',
        'motivo_consulta',
    ];
    public $timestamps = false;
}

