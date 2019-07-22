<?php

function snail(array $array): array {
  // Enjoy :)

$snail_arr = [];

$line_index = 0;
$col_index = 0;
$n =  sizeof($array);
$len = $n*$n;

  $line_min = 0;
  $line_max = $n-1;
  
  $col_min = 0;
  $col_max = $n-1;
  
  
  $dirc_string = 'right';
  while(sizeof($snail_arr,1)<$len){
//     print_r($snail_arr);
//     echo "line: $line_index , col: $col_index".PHP_EOL;
//     echo "dirc:$dirc_string".PHP_EOL.PHP_EOL;
    
      switch($dirc_string){
        case 'right':
            for($col_index = $col_min;$col_index<=$col_max;$col_index++){
              $snail_arr[] = $array[$line_index][$col_index];       
            }
            $line_min++;
            $col_index--;//for last loop
            $dirc_string = 'down';
            break;
            
        case 'down':
            for($line_index = $line_min;$line_index<=$line_max;$line_index++){        
              $snail_arr[] = $array[$line_index][$col_index];       
            }
            $col_max--;
            $line_index--;//for last loop
            $dirc_string = 'left';
            break;
            
        case 'left':
            for($col_index = $col_max;$col_index>=$col_min;$col_index--){
              $snail_arr[] = $array[$line_index][$col_index];       
            }
            $line_max--;
            $col_index++;//for last loop
            $dirc_string = 'up';
            break;    
            
         case 'up':
            for($line_index = $line_max;$line_index>=$line_min;$line_index--){
              $snail_arr[] = $array[$line_index][$col_index];       
            }
            $col_min++;
            $line_index++;//for last loop
            $dirc_string = 'right';
            break;
        
      }//swtich   
  }//for
  
  if(is_null($snail_arr[0])){
    return [];
  }
  
  return $snail_arr;
  
}
