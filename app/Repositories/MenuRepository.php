<?php

namespace App\Repositories;

use App\Models\Menu\Categories;
use App\Models\Menu\Dish;

class MenuRepository {
    
    public function getAllCategories() {
        return Categories::all();
    }

    public function getAllDishes() {
        return Dish::all();
    }

    public function getDishById($id) {
        return Dish::find($id);
    }

    public function getDishComplementsByIdDish( $idDish ) {
        return app("db")->connection("menudb")->select(
            "SELECT c.* FROM platillos_complementos pc INNER JOIN complementos c ON pc.idComplemento = c.id WHERE pc.idPlatillo = {$idDish}"
        );
    }

    public function getDishExtrasByIdDish( $idDish ) {
        return app("db")->connection("menudb")->select(
            "SELECT c.* FROM platillos_extras pe INNER JOIN extras c ON pe.idExtra = c.id WHERE pe.idPlatillo = {$idDish}"
        );
    }

    public function getDishByIdSite($idSite) {
        return Dish::where("idSitio", $idSite)
        ->where("eliminado", 0)
        ->where("disponible", 1)
        ->get();
    }

}