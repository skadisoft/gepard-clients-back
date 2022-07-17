<?php

use App\Http\Controllers\MenuController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\SourcesController;
use Illuminate\Http\Request;


$router->group(["prefix" => "api/v1", "middleware", "cors"],function() use($router){

    $router->group(["prefix" => "sources"], function() use($router){
        $router->group(["prefix" => "image"], function() use($router){
            $router->get("dish", "SourcesController@getDishImage");
            $router->get("site", "SourcesController@getSiteImage");
        });
    });

    $router->group(["prefix" => "menu"], function() use($router){
        $router->get("", "MenuController@getAllDishes");
        $router->get("dish/{id}", "MenuController@getDishById");
        $router->get("categories", "MenuController@getAllCategories");
    });

    $router->group(["prefix" => "site"], function() use($router){
        $router->get("", "SiteController@getAllSites");
    });

});

$router->get('/', function () use ($router) {
    return $router->app->version();
});
