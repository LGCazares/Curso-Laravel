<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class AlumnoMateria extends Pivot
{
    protected $table = 'alumno_materias';
    protected $primaryKey = 'id';
    protected $fillable = ['alumno_id','materia_id'];

}
