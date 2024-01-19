<?php 

// $router->get("", "PagesController@home");
// $router->get("about", "PagesController@about");
// $router->post("names", 'PagesController@createUser');

use controllers\PagesController;

$router->get('',[PagesController::class,"home"]);
$router->get('about',[PagesController::class,"about"]);
$router->post('names',[PagesController::class,"createUser"]);


