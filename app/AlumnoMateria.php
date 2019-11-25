<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AlumnoMateria extends Model
{
    protected $table = 'alumno_materias';
    protected $primaryKey = 'id';
    protected $fillable = ['alumno_id','materia_id'];

}
