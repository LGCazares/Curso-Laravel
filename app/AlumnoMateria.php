<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AlumnoMateria extends Model
{
    protected $table = 'alumno_materias';
    protected $primaryKey = 'id';
    protected $fillable = ['alumno_id','materia_id'];


    public function materia()
    {
        return $this->hasMany('App\Materia');
    }

    public function alumno()
    {
        return $this->belongsTo('App\Alumno');
    }

}
