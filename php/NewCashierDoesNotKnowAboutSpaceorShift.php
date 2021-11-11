<?
function getOrder($input) {

if(empty($input)){
 return '';
}

$times = [
 'Burger'=>0,
 'Fries'=>0,
 'Chicken'=>0,
 'Pizza'=>0,
 'Sandwich'=>0,
 'Onionrings'=>0,
 'Milkshake'=>0,
 'Coke'=>0,
];

$meau = ['Burger','Fries','Chicken', 'Pizza','Sandwich','Onionrings','Milkshake','Coke'];

$len = strlen($input);
for($index =0;$index<$len; ){
   $ch = $input[$index];
   switch($ch){
       case 'b':
            $times['Burger'] ++;
           // $index += strlen('Burger');
		   $index += 6;
            break;
       case 'f':
            $times['Fries'] ++;
            //$index += strlen('Fries');
			$index += 5;
            break;
       case 'c':
	        if( $input[$index+1] == 'h'){
				$times['Chicken'] ++;
				$index += 7;
			}elseif($input[$index+1] == 'o'){
				$times['Coke'] ++;
				$index += 4;
			}
            break;
      case 'p':
	        $times['Pizza'] ++;
			$index += 5;
            break;
      case 's':
	        $times['Sandwich'] ++;
			$index += 8;
            break;
      case 'o':
            $times['Onionrings'] ++;
            $index += 10;
            break; 
       case 'm':
            $times['Milkshake'] ++;
            $index += 9;
            break;      
   }
}


$output = '';

foreach($times as $key=>$value){
    if($value>0){      
        if(empty($output)){
			$output .= $key;
            $value--; 
	    }     
		while($value--) $output .= ' '.$key;
        
    }
}

  return $output;
}
