<?php
// //if(),else .else if--- language construct hote h
// $var=100;
// if($var!='100' && $var===100){
//     echo "Equal";
// //-------------------------
// }elseif(!$var){
//     echo " Again Equal";

// }elseif($var>10||$var<10){
//     echo "hello";
// } 
// //--------------------------
// else{
//     echo "else part";
// } 



//=----------------------------
// $a=10;
// if($a++==10 && ++$a !=12){
//     echo   "hii";
// }
// elseif($a-- + ++$a>20){
//     echo "sab bhul gye";

// }
//------------template formate-----------------------
// $a=10;
// if($a++==10 && ++$a !=12):
//     echo   "hii";

// elseif($a-- + ++$a>20):
//     echo "sab bhul gye <br>";
//     echo  $a;
// else:
//     echo "template formate";
// endif;  // last me endif must h




//---------------------

// $a=10;
// if($a++==10 && ++$a !=12){
//     echo   "hii";
// }
// elseif(--$a + $a++==24){
//     echo "sab bhul gye";

// }
// elseif($a -$a++ + --$a==25){
//     echo "kuchh nahi aa rha h";

// }
// else{
//     echo $a;
// }
   
//------------------
$a=10;
if($a++==10 && ++$a !=12):
    echo   "hii";

elseif(--$a + $a++==24):
    echo "sab bhul gye";


elseif($a -$a++ + --$a==25):
    echo "kuchh nahi aa rha h";

else:
    echo $a;
endif;


?>
