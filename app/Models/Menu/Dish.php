<?php

namespace App\Models\Menu;

use Illuminate\Database\Eloquent\Model;

class Dish extends Model {

    protected $connection = "menudb";
    protected $table = "platillos";

    protected $fillable = [];

    const CREATED_AT = 'creado';
    const UPDATED_AT = 'actualizado';
}
