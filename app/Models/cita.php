<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cita extends Model
{
    use HasFactory;
    protected $table = '_citas';
    protected $primaryKey = 'id';
    protected $fillable = [
        'paciente_id',
        'médico_id',
        'fecha_cita',
        'hora_cita',
        'motivo_consulta',
    ];
    public $timestamps = false;
    // Relación con el modelo de paciente
    public function paciente()
    {
        return $this->belongsTo(Paciente::class);
    }

    // Relación con el modelo de médico
    public function medico()
    {
        return $this->belongsTo(Medico::class);
    }
}

