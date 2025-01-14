<?php
session_start();
if(!isset($_SESSION['logindata'])){
    header('Location:login.php');
}
?>
welcome to dashboard <?= $_SESSION['logindata']?>
<a href="logout.php">Logout</a>