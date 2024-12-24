
<?php
// anonymus function:- which function have no name only arrign in a variable it called anonymus function.call by variable name.
// $add = function(){
//     // echo 10+20;
//     return 10+20;
// };
// // $add();
// echo $add();

// closer function:- 



// $add = function($a,$b){
//     // echo $a+$b;
//     return $a+$b;
// };
// // $add(10,20);
// echo $add(10,20);


$fact = function($no){
    $result=1;
    for ($i=1;$i<=$no;$i++){
        $result =$result*$i;
    }
    return $result;
};
echo $fact(5);
?>
