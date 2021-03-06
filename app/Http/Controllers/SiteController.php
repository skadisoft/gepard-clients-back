<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\SiteService;


class SiteController extends Controller
{

    public function __construct()
    {
        
    }

    public function getAllSites(Request $request, SiteService $service) {
        return response()->json( $service->getAllSites() );
    }

    public function GetSiteById($id, SiteService $service) {
        $site = $service->getById($id);
        return response()->json( $site, (isset($site) ? 200 : 404) );
    }

}
