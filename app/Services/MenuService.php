<?php

namespace App\Services;

use App\Repositories\MenuRepository;

class MenuService {

    private $repo;

    public function __construct(MenuRepository $rp) {
        $this->repo = $rp;
    }

    public function getAllCategories() {
        return $this->repo->getAllCategories();
    }

    public function getAllDishes() {
        return $this->repo->getAllDishes();
    }

    public function getDishById( $id ) {
        $dish = $this->repo->getDishById($id);
        $dish->complementos = $this->repo->getDishComplementsByIdDish($id);
        $dish->extras = $this->repo->getDishExtrasByIdDish($id);

        return $dish;
    }

    public function getDishByIdSite( $idSite ) {
        return $this->repo->getDishByIdSite( $idSite );
    }

}