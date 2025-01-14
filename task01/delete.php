<?php
$con = mysqli_connect('localhost','root','','profile');
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $sql ="delete from task03_1 where id=$id";
    if(mysqli_query($con,$sql)){
        echo "<script>
        alert('data deleted..');
        window.location.href='read.php';
        </script>";
    }
}
?>