<?php
function sum_strings($str1, $str2) {
  // Your code here
    $len1 = strlen($str1);
    $len2 = strlen($str2);
    $min_len = ($len1>$len2) ? $len2 : $len1;

	$sum_str = '';
	$carry = 0;
    for($index1=$len1-1,$index2=$len2-1; $index1>=0 && $index2>=0; $index1--,$index2--){
	    $bit_num = $carry + intval($str1[$index1] - '0') + intval($str2[$index2] - '0');	
           
		if($bit_num>=10){
			$carry = intval($bit_num/10);
			$bit_num -= ($carry*10);
		}else{
		    $carry = 0;
		}
		
			$sum_str = $bit_num.$sum_str;

	}
		
	if($len1-$min_len == 0){
		$len_rest = $len2-$min_len;
		$str_rest = $str2;
	}else{
	    $len_rest = $len1-$min_len;
	  	 $str_rest = $str1;
	}
	

	for($i = $len_rest-1;$i>=0;$i--){
		$bit_num = $carry + intval($str_rest[$i] - '0');	
     
		if($bit_num>=10){
			$carry = $bit_num/10;
			$bit_num -= ($carry*10);
		}else{
			$carry = 0;
		}
			$sum_str = $bit_num.$sum_str;

	}
  
	if($carry != 0){
		$sum_str = $carry.$sum_str;
	}
  
  if($sum_str[0] == '0' && strlen($sum_str)>1 ){
     $sum_str = ltrim($sum_str,'0');
  }
	return $sum_str;

}











