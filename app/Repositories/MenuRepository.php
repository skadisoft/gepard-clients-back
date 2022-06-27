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

}