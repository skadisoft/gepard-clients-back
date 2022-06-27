<?php

namespace App\Models\Menu;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model {

    protected $connection = "menudb";
    protected $table = "categorias";

    protected $fillable = [];

    const CREATED_AT = 'creado';
    const UPDATED_AT = 'actualizado';
}
