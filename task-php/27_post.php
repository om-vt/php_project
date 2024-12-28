<?php
$con = mysqli_connect('localhost','root','','profile');
if($_SERVER['REQUEST_METHOD']=='POST'){
    if((empty($_POST['country']))){
        echo"<script>
        alert('select country plz');
        window.location.href='27.php';
        </script>";
    }elseif((empty($_POST['sub']))){
        echo"<script>
        alert('select country plz');
        window.location.href='27.php';
        </script>";
    }else{
        $country=$_POST['country'];
        $data=$_POST['sub'];
        $sub = implode(",",$data);
        $sql ="insert into subject (country, sub) value('$country','$sub')";
        if(mysqli_query($con,$sql)){
            echo"<script>
            alert('selected');
            </script>";
    }
    
}


}

?>