<?php

//array_push(array,newelement):-it used for add new element in last index in exiting array.
$arr=[1,2,3,4,5,6,7];
// array_push($arr,9);/
// array_push($arr,"stinj");
// array_push($arr,[11,12,13,14,15]);
echo "<pre>";
// print_r($arr);
//--------------------------------------------------------------
// array_pop(array):- it remove last element of array.
array_pop($arr);
print_r($arr);
//--------------------------------------------------------------
// array_unshift(array,element):- it insert element begaining of array.
 array_unshift($arr,20);
 print_r($arr);


//  array_shift(array):-it remove first element of array.
array_shift($arr);
 print_r($arr);
?>