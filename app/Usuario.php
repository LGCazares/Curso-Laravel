<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model


{
    protected $table = 'usuarios';
    protected $primaryKey = 'usuario_id';
    protected $fillable = ['nombre','ap_paterno','ap_materno','edad','correo'];
}
