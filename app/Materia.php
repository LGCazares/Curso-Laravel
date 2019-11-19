<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    protected $table = 'materias';
    protected $primaryKey = 'id';
    protected $fillable = ['materia','creditos','clave','profe_id'];


    public function profesor()
    {
        return $this->hasOne('App\Profe');
    }
}
