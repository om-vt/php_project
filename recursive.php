<!-- recursive:- which function call itself in function body called recursive function and calling called recursren function. -->
 <?php
// function number($num){
//     if($num>5){
//         return $num;
//     }
//     return number($num +1);
// }
// echo number(1);

//========================================================

// function number($num){
//     if($num<=10){
//         echo $num."<br>";
//         return number($num +1);
//     }
   
// }
// number(1);


// ---------factorial program using recursive function------//
function fact($no){
    if($no<0){
        return 0;
    }
    if($no==0){
        return 1;
    }
    return $no*fact($no-1);
}
echo fact(5);



?>