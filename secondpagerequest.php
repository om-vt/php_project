<?php
echo "<pre>";
print_r($_REQUEST);
echo $_SERVER['REQUEST_METHOD']."<br>";
echo $_REQUEST['name']."<br>";
echo $_REQUEST['email'];

?>