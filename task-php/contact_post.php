<?php
$con= mysqli_connect('localhost','root','','profile');
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(empty($_POST['name'])){
        echo"<script>
        alert('Enter your name plz');
        window.location.href='cotactus.php';
        </script>";
    }elseif(empty($_POST['phone'])){
        echo"<script>
        alert('Enter your phone no plz');
        window.location.href='cotactus.php';
        </script>";
    }elseif(empty($_POST['email'])){
        echo"<script>
        alert('Enter your email plz');
        window.location.href='cotactus.php';
        </script>";
    }elseif(empty($_POST['address'])){
        echo"<script>
        alert('Enter your address plz');
        window.location.href='cotactus.php';
        </script>";
    }elseif(empty($_POST['text'])){
        echo"<script>
        alert('Enter your massege plz');
        window.location.href='cotactus.php';
        </script>";
    }else{
        $name=$_POST['name'];
        $phone=$_POST['phone'];
        $email=$_POST['email'];
        $address=$_POST['address'];
        $text=$_POST['text'];
        $sql = "Insert into contactus(name,phone,email,address,text) values('$name','$phone','$email','$address','$text')";
        if(mysqli_query($con,$sql)){
            echo "<script>
            alert('data send successfully');
            window.location.href='cotactus.php';
            window.location.href='contact_read.php';
            </script>";
        }else{
            echo "wrong data";
        }

    }           
}


?>