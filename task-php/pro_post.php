<?php
$con = mysqli_connect('localhost','root','','profile');
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(empty($_POST['name'])){
        echo "<script>
        alert('Plese Enter Your Name');
        window.location.href='profilecreate.php';
        </script>";
    }elseif(empty($_POST['father_name'])){
        echo "<script>
        alert('Plese Enter Father's Name');
        window.location.href='profilecreate.php';
        </script>";
    }elseif(empty($_POST['mother_name'])){
        echo "<script>
        alert('Plese Enter Your Name');
        window.location.href='profilecreate.php';
        </script>";
    }elseif(empty($_POST['dob'])){
        echo "<script>
        alert('plese Enter your DOB');
        window.location.href='profilecreate.php';
        </script>";
    }elseif(empty($_POST['address'])){
        echo "<script>
        alert('plese enter your Address');
        window.location.href='profilecreate.php';
        </script>";
    }else{
        $name=$_POST['name'];
        $fname=$_POST['father_name'];
        $mname=$_POST['mother_name'];
        $dob=$_POST['dob'];
        $address=$_POST['address'];
        $sql = "insert into profile_task(name,father_name,mother_name,dob,address) values('$name','$fname','$mname','$dob','$address')";
        if(mysqli_query($con,$sql)){
            echo"<script>
            alert('data insert successfully');
           window.location.href='profilecreate.php';
            window.location.href='pro_read.php';
            </script>";
        }
    }
}

?>