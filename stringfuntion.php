<?php
//..================string function=================---------
// $str="hii this is ram   "; // strlen(varibale); use for geting string lenght.
// echo strlen($str);
// echo $a= trim($str);       
//any method have old version but we use the method in new version its show waring decrepeted error.
//ltrim->use to trim left side whitespace and return modify string.
//rtrim->use to trim right side whitespace and return modify string.
//str_repeat(string,time)-> it repeat string for given time and return repeted string.
//-------------------------------------------
// echo str_repeat('ram ram',10);
// or
// for($i=0;$i<=10;$i++){
//     echo"radhe radhe<br>";
// }

//------------------------------------------------
// str_replace(replaced string,replace by string,string);- it replace string by given string.
//  $string="hello world";
//  echo str_replace("world","Ram",$string);    //or
//  echo str_replace("world","Ram","hello world");
//---------------------------------------------------
// explode(delimiter(sepeator),string);- it convert string into array format by  delimiter & its return array.
// $str="Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum numquam doloremque consequuntur ex magnam? Cupiditate";
// $a=explode(" ",$str);
// print_r($a);

// echo $a[3]; // find index value  
//-----------------------------------------------------------
// implode(string delimiter ,array);-it convert array into string formet delimiter and it return a string.
// $countries = ["India", "United States", "Canada", "Australia", "United Kingdom", "Germany", "France", "Japan", "China", "Brazil","Russia"];
// echo implode(" ",$countries);
//===============-----------------------==========================
// str_split(string):- it convert string into array format.
// $var="Om Prakash";
// echo $var[1]
// print_r(str_split($var));
// for($i=0;$i<strlen($var);$i++){
//     $arr[]=$var[$i];
// }
// print_r($arr);
//----------------------------------------=============================
// str_word_count(string);- it return word count of given string.
// echo str_word_count("this is count alphabet no matter which speteor is in middle of it ");
//================-------------------------------------------------------
// $string="hello world";
// $str1="";
// // for($i=strlen($string)-1;$i>=0)
// for($i=strlen($string)-1;$i>=0;$i--){
//     $str1.=$string[$i];
    
// }
// echo $str1;
//-------------------------------------------------------------------
// strrev(string):- it return reverse string.
// echo strrev("ram ram");
//-------------------------------------------------------------------
$name=" This is String Fuction. here WE see letter case converntion";
//lcfirst(string):-it convert first letter of string in lowercase.
//it is return lower case string.
//echo lcfirst($name);

//--------------------------------------------------------------------
//ucfirst(string):-it convert first letter of string in uppercase.
//it is return uppercase string.
//echo ucfirst($name);

//ucwords(string):-it convert uppercase each & every word first letter which exit in our string.
//it is return uppercase string.
// echo ucwords($name);

// strtoupper(string):- its convert string lower to uppercase.
//it is return uppercase string.
// echo strtoupper($name);


// strtolower(string):- its convert string  uppercase to lowercase.
//it is return lowercase string.
// echo strtolower($name);



// chop(string):- this is use to cut or remove word or letter form  rightside  letter or word form string.
// echo chop($name,"converntion");

// substr():- 
$str="hello world";
$str1="hello world";
//echo substr($str,2,4);

// strpos():- find the postion of string or  word.
// echo strpos($str,"rl");

// strcmp():-
echo strcmp($str,$str1);


//=========++++++++++array function++++++++++++=====================
// $arr=[1,2,3,4,56,5,9,8,9,4];
// echo count($arr);                //count() use to find array lenght.
?>