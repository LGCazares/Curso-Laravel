<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Profe extends Model
{
    use SoftDeletes;
    
    protected $table = 'profes';
    protected $primaryKey = 'id';
    protected $fillable = ['nombre','ap_paterno','ap_materno','num_empleado'];
    protected $dates =['deleted_at'];


    public function materia()
    {
        return $this->hasMany('App\Materia');
    }

}
