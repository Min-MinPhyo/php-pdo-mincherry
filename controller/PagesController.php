<?php
use core\App;
class PagesController{

    function home(){

         $tasks=App::get('database')->selectAll("user");
          view('index',[
         'manyTasks'=>$tasks
   ]);
    }
    
    function about(){
        view('about');
    }
    function contact(){
        view('contact');
    }
    function createUser(){

     App::get('database')->insert([
    'name'=>request('name')
  ],'user');

redirect("/");



    }
}