<?php
session_start();
$_SESSION['user'] = ['name'=>'ram','pass'=>'12345'];
$_SESSION['hello'] = ['name'=>'ram','pass'=>'12345'];

print_r($_SESSION);

?>