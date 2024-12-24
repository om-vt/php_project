<?php
$data = file_get_contents("computer.jpg");
// echo $data;
file_put_contents("laptop.jpg",$data);


?>