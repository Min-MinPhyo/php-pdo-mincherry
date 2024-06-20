<?php
use core\App;
require "vendor/autoload.php";
// require "core/Router.php";
require "functions.php";
// require "core/database/Connection.php";
// require "core/database/QueryBuilder.php";
// require "core/Request.php";


// $configs=require "config.php";

App::bind("config",require "config.php"); 
App::bind("database",new QueryBuilder(Connection::make(App::get("config")['database'])));

//  App::bind("name","Min Min Phyo");
//  dd(App::get("name"));