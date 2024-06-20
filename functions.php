<?php

function dd($data){
    echo "<pre>";
    // die(print_r($data));
    die(var_dump($data));
}
 function view($name,$data=[]){
    //   global $tasks;
    extract($data);
      return require "views/$name.view.php";
      

   }
   function redirect($uri){
      header("Location:$uri");
   }
   function request($name){
        if($_SERVER["REQUEST_METHOD"]==="POST"){
          return ($_POST['name']);
    }
    if($_SERVER["REQUEST_METHOD"]==="GET"){
        return ($_GET['name']);
    }
   }









?>