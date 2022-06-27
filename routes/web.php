<?php

use App\Http\Controllers\MenuController;
use App\Http\Controllers\SiteController;


$router->group(["prefix" => "api/v1"],function() use($router){

    $router->group(["prefix" => "menu"], function() use($router){
        $router->get("", "MenuController@getAllDishes");
        $router->get("categories", "MenuController@getAllCategories");
    });

    $router->group(["prefix" => "site"], function() use($router){
        $router->get("", "SiteController@getAllSites");
    });

});

$router->get('/', function () use ($router) {
    return $router->app->version();
});
