<?php
// setcookie('user','ram',time()+3600);
// setcookie('user','',time()+3600); //for delete

// print_r($_COOKIE['user']);
// 

setcookie('user',$_SERVER['REMOTE_ADDR'],time()+3600);
print_r($_COOKIE);
?>