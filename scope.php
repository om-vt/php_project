<?php
    //-------scope//------------------------------
//local:- which variable use or access is function called local variable.

// function  demo(){
//     $x=10;
//     $y=15;
//     echo $x $y;
// }
// echo $x;
// echo  $y;



// global:- we can define global and  we can access any where in our program.
    // $a=10;
    // $b=20;
    // function globalVar(){
    //     global $a,$b;
    //     echo $a,$b;

    // }
    // globalVar();
    // echo "this is a global variable ".$a;



// static:-(like:local variable):-it can not assign same value again.it store value execute value and next time work on execute value.
    // function staticVar(){
    //     static $a=10;
    //     $a++;
    //     echo $a;
    // }
    // staticVar();
    // staticVar();
    // staticVar();



//--------------=========================================================================================
//superGlobalVariable:- it is predefined variable which accesssible of any regardless scope 
//(anywhere like: inside of function,outside of function,inside of class,outside of class, any other page).
// note: superGlobalVariable ARE case senstive.
// 1.$GLOBALS
// 2.$_SERVER
// 3.$_REQUEST
// 4.$_GET
// 5.$_POST
// 6.$_SESSION
// 7.$_COOKIE
// 8.$_FILES
// 9.$_ENV






?>


