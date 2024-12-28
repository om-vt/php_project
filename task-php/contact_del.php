<?php
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $con = mysqli_connect('localhost','root','','profile');
    $sql = "DELETE FROM contactus WHERE id = $id";
    if(mysqli_query($con,$sql)){
        echo "<script>
        alert('Your data deleted successfully');
        window.location.href='contact_read.php';
        </script>";
    }
}else{
    header('Location:contact_read.php');
}
?>
