<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    protected $table = 'alumnos';
    protected $primaryKey = 'id';
    protected $fillable = ['nombre','ap_paterno','ap_materno','matricula'];
}
