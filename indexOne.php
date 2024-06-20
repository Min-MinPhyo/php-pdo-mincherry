<?php


class Post{
  public $title;
 public  $isPublish;
   public function __construct($t,$p) {
    $this->title=$t;
    $this->isPublish=$p;
   }
 
   
}
   $posts=[

     new Post("first post",true),
     new Post("second post",true),
     new Post("third post",false),
     new Post("fourth post",true)
   ];


$a=array_map(function($post){
    return $post->title;
},$posts);

var_dump($a);


//   $unPublish=array_filter($posts,function($post){
//     return !$post->isPublish;
//   });

//   $publish=array_filter($posts,function($post){
//     return $post->isPublish;
//   }
// );

//   var_dump($unPublish);
//   echo "<hr>";

//   var_dump($publish);