<?php
// --------------$GLOBALS-----------------
// $x=10;
// function demo(){
//     echo $GLOBALS['x'];
//     $GLOBALS['y']=20;
// }
// demo();
// echo $y;

//----------------------$_SERVER---------------
// it is a super global variable .it contain information of headers path and script location it contaion all(server) information is associative formate.

echo "<pre>";
echo $_SERVER['REQUEST_METHOD'];



//-------------$_REQUEST-----------
// IT is contain information of submitted
// form data all cokies.
print_r($_REQUEST);
?>