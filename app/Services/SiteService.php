<?php

namespace App\Services;

use App\Repositories\SiteRepository;

class SiteService {

    private $repo;

    public function __construct(SiteRepository $rp) {
        $this->repo = $rp;
    }

    public function getAllSites() {
        return $this->repo->getAllSites();
    }

}