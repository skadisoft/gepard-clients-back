<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\MenuService;

class MenuController extends Controller
{
    public function __construct()
    {
        
    }

    public function getAllDishes(Request $request, MenuService $service) {
        return response()->json( $service->getAllDishes() );
    }

    public function getAllCategories( Request $request, MenuService $service ) {
        return response()->json( $service->getAllCategories() );
    }

    public function getDishById( $id, MenuService $service ) {
        return response()->json( $service->getDishById( $id ) );
    }

    public function getDishByIdSite($idSite, MenuService $service) {
        return response()->json( $service->getDishByIdSite($idSite) );
    }

}
