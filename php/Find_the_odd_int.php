<?php
/**
 * Created by PhpStorm.
 * User: L
 * Date: 2019-7-16
 * Time: 17:07
 */
function findIt(array $seq) : int
{
    $len = sizeof($seq);
    $number = 0;
    for($i = 0;$i<$len;$i++){
        $number ^= $seq[$i];
    }

    echo $number.PHP_EOL;
    return $number;

}

//Best Practices
//
//function findIt(array $seq) : int
//{
//    $nums = array_count_values($seq);
//    foreach ($nums as $key => $val) {
//        if ($val % 2) {
//            return $key;
//        }
//    }
//}