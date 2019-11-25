<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    protected $table = 'materias';
    protected $primaryKey = 'id';
    protected $fillable = ['materia','creditos','clave','profe_id'];


    public function profe()
    {
        return $this->belongsTo('App\Profe');
    }

    public function alumno()
    {
        return $this->belongsTo('App\Alumno');
    }
}


