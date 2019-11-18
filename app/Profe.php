<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profe extends Model
{
    protected $table = 'profes';
    protected $primaryKey = 'profe_id';
    protected $fillable = ['nombre','ap_paterno','ap_materno','num_empleado'];
}
