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

    public function getById( $id ) {
        $site = $this->repo->getById( $id );
        if( isset($site) && $site->disponible && !$site->eliminado ) {
            return $site;
        }
        return null;
    }

}