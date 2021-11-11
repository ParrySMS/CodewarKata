<?php

function solution ($roman) {
  $num = 0;
   
  $map = [];
  $map['I'] =1;
  $map['V'] =5;
  $map['X'] = 10;
  $map['L']=50;
  $map['C']=100;
  $map['D']=500;
  $map['M'] =1000;
  
   $len = strlen($roman);
   
  while($i<$len){

      if($i+1>=$len){
          $num =  $num+$map[$roman[$i]];
          break;
      }
        
      $value = $map[$roman[$i]];
      $next_value =  $map[$roman[$i+1]];
      
      if($value<$next_value){
               $num=$num+ ($next_value - $value);
               $i+=2;
      }else{
            $num =  $num+ $value;
            $i++;
      }
  }
  
  return $num;
}




//solution

//function solution ($roman) {
//  $arr = array('I'=>1,'V'=>5,'X'=>10,'L'=>50,'C'=>100,'D'=>500,'M'=>1000);
//  $values = array();
//    for($i = 0; $i < strlen($roman); $i++) 
//      if(isset($arr[$roman[$i]])){
//        $values[] = $arr[$roman[$i]];
//      }
//      $sum = 0;
//      while($current = current($values))
//      {
//       $next = next($values);
//       $next > $current ? $sum += $next - $current + 0 * next($values) : $sum += $current;
//      }
//      return $sum;
//}
