<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
    use HasFactory;
    protected $table = '_medicos';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nombre',
        'apellido',
        'horarios',
        'telefono',
        'email',
    ];
    public $timestamps = false;
}
