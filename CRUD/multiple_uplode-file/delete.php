<?php
$con = mysqli_connect('localhost','root','','profile');
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $sql = "delete from multifile where id=$id";
    if(mysqli_query($con,$sql)){
        echo "<script>
        alert('data deleted..');
        window.location.href='read.php';
        </script>";
    }
}
?>