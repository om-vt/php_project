<?php
$con =mysqli_connect('localhost','root','','app25_crud');
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(empty($_POST['fname'])){
        echo "<script>
        alert('Please Enter Your first Name ');
        window.location.href='FORM-CREATE.PHP';
        </script>";
    }elseif(empty($_POST['lname'])){
        echo "<script>
        alert('Please Enter Your Last Name ');
        window.location.href='FORM-CREATE.PHP';
        </script>";
    }elseif(empty($_POST['phone'])){
        echo "<script>
        alert('Please Enter Your Phone Number ');
        window.location.href='FORM-CREATE.PHP';
        </script>";
    }elseif(empty($_POST['email'])){
        echo "<script>
        alert('Please Enter Your Email ');
        window.location.href='FORM-CREATE.PHP';
        </script>";
    }else{
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $sql = "Insert into users (fname,lname,phone,email)values('$fname','$lname','$phone','$email')";
        if(mysqli_query($con,$sql)){
            echo "<script>
            alert('data insert successfully');
          
            window.location.href='form-read.php';
            </script>";
        }
       
    }
    
}
// window.location.href='FORM-CREATE.PHP';
?>