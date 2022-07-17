<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Storage;

use Laravel\Lumen\Routing\Controller as BaseController;

class SourcesController extends BaseController
{
    
    public function getDishImage(Request $request) {
        $extension = explode(".", $request->name)[1];
        return response(
            Storage::disk("local")->get("imagenes/dishes/{$request->name}")
        )->header("Content-Type", "image/{$extension}");
    }

    public function getSiteImage(Request $request) {
        $extension = explode(".", $request->name)[1];
        return response(
            Storage::disk("local")->get("imagenes/{$request->name}")
        )->header("Content-Type", "image/{$extension}");
    }

}
