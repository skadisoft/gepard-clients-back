<?php

namespace App\Repositories;

use App\Models\Sites\Site;

class SiteRepository {
    
    public function getAllSites() {
        return Site::all();
    }

}