<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visitante extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fecha_hora_entrada', 'cedula', 'n_pase', 'nombre', 'apellido', 'fecha_nacimiento', 'edad', 'zona_residencia', 'id_gerencia', 'id_tipo_visita', 'responsable', 'fecha_hora_salida', 'id_usuario', 'observacion', 'n_certificado', 'estatus',
    ];
}