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
}
