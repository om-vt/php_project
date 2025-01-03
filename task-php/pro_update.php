<?php
$con=mysqli_connect('localhost','root','','profile');
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(empty($_POST['name'])){
        echo "<script>
        alert('name must be required');
        </script>";
    }elseif(empty($_POST['father_name'])){
        echo "<script>
        alert('Father name must be required');
        </script>";
    }elseif(empty($_POST['mother_name'])){
        echo "<script>
        alert('Mother name must be required');
        </script>";
    }elseif(empty($_POST['dob'])){
        echo "<script>
        alert('DOB must be required');
        </script>";
    }elseif(empty($_POST['address'])){
        echo "<script>
        alert('Address must be required');
        </script>";
    }else{
        $id=$_POST['uid'];
        $name=$_POST['name'];
        $fname=$_POST['father_name'];
        $mname=$_POST['mother_name'];
        $dob=$_POST['dob'];
        $address=$_POST['address'];
        $sql= "Update profile_task set name='$name',father_name='$fname',mother_name='$mname',dob='$dob',address='$address' where id=$id";
        if(mysqli_query($con,$sql)){
            echo "<script>
            alert('account update successfully');
            window.location.href='pro_read.php';
            </script>";
        }
    }
}

// echo $_GET['id'];
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $sql = "select*from profile_task where id=$id";
    $result=mysqli_query($con,$sql);
    if(mysqli_num_rows($result)>0){
        $data= mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CSS CDN -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <form  method="post">
            <h2>Profile</h2>
            <div class="mb-3">
                <input type="hidden" value="<?= $data['id']?>" name='uid'>
                <label for="name" class="form-label"> Name</label>
                <input type="text" value="<?= $data['name']?>" class="form-control" id="name" name="name">
            </div>
            <div class="mb-3">
                <label for="Father_name" class="form-label">Father's Name</label>
                <input type="text" value="<?= $data['father_name']?>" class="form-control" id="Father_name" name="father_name">
            </div>
            <div class="mb-3">
                <label for="Mother_name" class="form-label">Mother's Name</label>
                <input type="text"value="<?= $data['mother_name']?>" class="form-control" id="Mother_name" name="mother_name">
            </div>
            <div class="mb-3">
                <label for="dob" class="form-label">DOB</label>
                <input type="date" value="<?= $data['dob']?>" class="form-control" id="dob" name="dob">
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <input type="text"value="<?= $data['address']?>" class="form-control" id="address" name="address">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>
<?php

    }
}else{
    header('Location:pro_read.php');
}

?>