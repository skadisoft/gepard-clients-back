<?php

namespace App\Models\Sites;

use Illuminate\Database\Eloquent\Model;

class Site extends Model {

    protected $connection = "sitedb";
    protected $table = "sitios";

    protected $fillable = [];

    protected $hidden = [ "correo", "telefono", "direccion", "cp", "referencias", "idClave" ];

    const CREATED_AT = 'creado';
    const UPDATED_AT = 'actualizado';
}
