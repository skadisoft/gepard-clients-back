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

}