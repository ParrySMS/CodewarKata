<?php

function dirReduc($arr) {

  $dir = [];
  if(empty($arr)){
    return $arr;
  }
  
  $index = 0;
   foreach($arr as $key => $value){
 
          $dir[$index++] = $value;        
            while($index-2>=0 && isOp($dir[$index-1],$dir[$index-2]) ){
                 array_splice($dir,$index-2,1);//delete twice
                 array_splice($dir,$index-2,1); 
                 
                 $index -=2;
                 if($index<0)  
                     $index = 0;                  
            }
                   
   }
     
   return $dir;
    
}

function isOp($str1,$str2){
  echo $str1.$str2.PHP_EOL;
   if($str1.$str2 == "NORTHSOUTH" 
   || $str1.$str2 == "SOUTHNORTH"
   || $str1.$str2 == "EASTWEST"
   || $str1.$str2 == "WESTEAST" ){
           return true;
   }
   
   return false;
}

//solution
//function dirReduc($arr) {
//    $ops = ['NORTH' => 'SOUTH', 'SOUTH' => 'NORTH', 'EAST' => 'WEST', 'WEST' => 'EAST'];
//    $stack = [];
//    foreach ($arr as $k => $v) {
//        if (end($stack) == $ops[$v]) {
//            array_pop($stack);
//        } else {
//            $stack[] = $v;
//        }
//    }
//    return $stack;
//}
