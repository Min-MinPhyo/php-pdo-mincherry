<?php
  class QueryBuilder{

    protected $pdo;

   public function __construct($pdo){
    $this->pdo=$pdo;

   }
   function selectAll($table){
        $statement=$this->pdo->prepare("select * from $table");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_OBJ);
        
   }
   function insert($dataArr,$table){
    $colsArray=array_keys($dataArr);
    $cols=implode(",",$colsArray);
    $placeHolder="";

    foreach($colsArray as $col){
      $placeHolder.="?,";
    }

    $trimPlaceholder=rtrim($placeHolder,",");
  
 
  
  
    $sql="insert into $table($cols) values($trimPlaceholder)";

    $statement = $this->pdo->prepare($sql);
    $values=array_values($dataArr);
    $statement->execute($values);
    
 
  
   }




  }