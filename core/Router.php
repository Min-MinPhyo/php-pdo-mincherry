<?php


   class Router{
    public $routes=[
      "GET"=>[],
      "POST"=>[]
    
    ];

      public static function load($filename){
          $router=new Router;
          require $filename;
          return $router;
    }

    public  function register($router){
        $this->routes=$router;

    }
    public function get($uri,$controller){
      $this->routes["GET"][$uri]=$controller;
    }
    public function post($uri,$controller){
      $this->routes["POST"][$uri]=$controller;
    }

  
  
    public function direct($uri,$method){
       if(!array_key_exists($uri,$this->routes[$method])){
       
       die("404 Page Not Found");
       }
        $exposition=explode("@",$this->routes[$method][$uri]);
        $this->callMethod($exposition[0],$exposition[1]);
      

    }
    function callMethod($class,$method){
      $myClass=new $class;
      $myClass->$method();
    



    }
    

    }
   