<?php
$con = mysqli_connect('localhost','root','','profile');
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(empty($_POST['name'])){
        echo "<script>
                alert('please enter your name');
            </script>";
    }elseif(empty($_FILES['image']['name'])){
        echo "<script>
            alert('image field required');
        </script>";
    }else{
        $name = $_POST['name'];
        $filename = time().$_FILES['image']['name'];
        $tmpfile = $_FILES['image']['tmp_name'];
        move_uploaded_file($tmpfile,"image-file/$filename");
        $sql= "insert into task03_1(name,image) values('$name','$filename')";
        if(mysqli_query($con,$sql)){
            echo "<script>
                alert('data send successfully');
                window.location.href='read.php';
            </script>";
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>03-01</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        name: <input type="text" name="name" value="">
        IMAGE: <input type="file" name="image">
        <button type="submit">SUBMIT</button>
    </form>
</body>
</html>