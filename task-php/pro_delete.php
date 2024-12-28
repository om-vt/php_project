<?php
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $con = mysqli_connect('localhost','root','','profile');
    $sql = "DELETE FROM profile_task WHERE id = $id";
    if(mysqli_query($con,$sql)){
        echo "<script>
        alert('Your data deleted successfully');
        window.location.href='pro_read.php';
        </script>";
    }
}else{
    header('Location:pro_read.php');
}
?>
