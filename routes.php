<?php

$router->get("","PagesController@home");
$router->get("about","PagesController@about");
$router->get("contact","PagesController@contact");
$router->get("users","UserController@index");
$router->get("names","PagesController@createUser");
$router->post("names","PagesController@createUser");


// $router->get("","controller/IndexController.php");
// $router->get("contact","controller/ContactController.php");
// $router->get("customer","controller/CustomerController.php");
// $router->get("index","controller/InfoController.php");
// $router->get("info","controller/InfoController.php");
// $router->post("names","controller/add-name.php");