<?php
// print_r($_POST);
// print_r($_FILES);
$con = mysqli_connect('localhost','root','','profile');
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(empty($_POST['name'])){
        echo "<script>
            alert('name field required');
        </script>";
    }elseif(empty($_FILES['image']['name'])){
        echo "<script>
            alert('image field required');
        </script>";
    }else{
        $name=$_POST['name'];
        $filename=time().$_FILES['image']['name'];
        $tmpname=$_FILES['image']['tmp_name'];
        move_uploaded_file($tmpname,"uplode-img/$filename");
        $sql = "insert into fileuplode(name,image)values('$name','$filename')";
        if(mysqli_query($con,$sql)){
            echo "<script>
            alert('image uplode successfully');
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
    <title>Document</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data"><br>
        name: <input type="text" value="" name="name">
        file: <input type="file" name="image"><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>