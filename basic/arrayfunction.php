<?php

//array_push(array,newelement):-it used for add new element in last index in exiting array.
// $arr=[1,2,3,4,5,6,7];
// array_push($arr,9);/
// array_push($arr,"stinj");
// array_push($arr,[11,12,13,14,15]);
echo "<pre>";
// print_r($arr);
//--------------------------------------------------------------
// array_pop(array):- it remove last element of array.
// array_pop($arr);
// print_r($arr);
//--------------------------------------------------------------
// array_unshift(array,element):- it insert element begaining of array.
//  array_unshift($arr,20);
//  print_r($arr);


//  array_shift(array):-it remove first element of array.
// array_shift($arr);
//  print_r($arr);

 //---------------------------===============================
//  array_merge(array,array1):-it merge two or more array and array and create a new array .ir return new array.
//  $a=[1.2,3];
//  $b=[4,5,6];
//  $c=array_merge($a,$b);
//  print_r($c);
//  compact(''):- it convert variable name into key name. & variable into array also.
//  $a=1;
//  $b=2;
//  $c="vishal";
//  print_r(compact('a','b','c'));         // here we pass variable name without $ symbol & in 'varibale name '.
//==================------------------------------------------*********************************
// sort():- it sort the array ascending order and return new array.
// $arr=[10,3,9,5,8,2,7,4];        //ascending order sort 
// sort($arr);
// print_r($arr);
// // rsort():- it convert array into descending order.
// rsort($arr);
// print_r($arr);


// range():- it start sequencial number array.
// print_r(range(1,6));
// print_r(range('a','z'));    // range always perority number value .


// array_combine(array(key),array(value));
// $key=range('a','f');        // range are same in key and value both(lenght)
// $value=range(0,5);
// $arr=array_combine($key,$value);
// print_r($arr);

// sizeof():-
// count():-

// array_search():- it search value and return index value or key .return.
// $animal=["dog","cat","elephant","zebra","cow"];
// print_r(array_search("cow",$animal));
// echo $animal[4];





?>