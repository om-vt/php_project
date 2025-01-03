<?php
// echo($_GET['id']);
    if(isset($_GET['id'])){
        $id=$_GET['id'];
        $con = mysqli_connect('localhost', 'root', '', 'profile');
        $sql = "Delete from users2 where id =$id";
        if(mysqli_query($con,$sql)){
            echo "<script>
            alert('del data successfully');
            window.location.href='30_read.php');
            </script>";
        }
    }else{
        header('Location:30_read.php');
    }


   

?>