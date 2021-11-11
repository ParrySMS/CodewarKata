<?php
/* function fizzbuzz(array $numbers): array {
  
  foreach($numbers as $key => & $value){
	  $str = '';
	  if(($key+1)%3==0){
		  $str = 'fizz';
	  }
	  
	  if(($key+1)%5==0){
		  $str .= 'buzz';
	  }
      
      if(!empty($str)){
	    $value = $str;
	  }		     
  
  }
    
  return $numbers;
} */

function fizzbuzz(array $numbers): array {
  
 
  $len = sizeof($numbers);
  
  if($len == 0){
	  return $numbers;
  }
  
  $window_left = 0;
  $window_right = 14;
  while($window_right<=$len){
	  $numbers[ $window_left + 2] = "fizz";
	  $numbers[ $window_left + 4] = "buzz";
	  $numbers[ $window_left + 5] = "fizz";
	  $numbers[ $window_left + 8] = "fizz";
	  $numbers[ $window_left + 9] = "buzz";
	  $numbers[ $window_left + 11] = "fizz";
	  $numbers[ $window_left + 14] = "fizzbuzz";
	  
	  $window_left +=15;
	  $window_right +=15;
  }
  
  if($window_left<$len){
	    for($key = $window_left;$key<$len;$key++){
			$str = '';
			if(($key+1)%3==0){
				$str = 'fizz';
			}
	  
			if(($key+1)%5==0){
				$str .= 'buzz';
			}
      
			if(!empty($str)){
				 $numbers[ $key ] = $str;
			}		 
		}
  }
  
  return $numbers;
}
