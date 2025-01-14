<?php
$con = mysqli_connect('localhost','root','','profile');
if($_SERVER['REQUEST_METHOD']=='POST'){
    $id=$_POST['id'];
    $name=$_POST['name'];
    if(empty($_FILES['image']['name'])){
        $filename=$_POST['oldimg'];
    }else{
        $filename = time().$_FILES['image']['name'];
        $tmpimage = $_FILES['image']['tmp_name'];
        move_uploaded_file($tmpimage,"image-file/$filename");
    }
    $sql = "update task03_1 set name='$name',image='$filename' where id=$id";
    if(mysqli_query($con,$sql)){
        echo "<script>
        alert('data update successfully');
        window.location.href='read.php';
        </script>";
    }
}
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $sql ="select * from task03_2 where id=$id";
    $result= mysqli_query($con,$sql);
    if(mysqli_num_rows($result)>0){
        $single=mysqli_fetch_assoc($result);
    }
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>03-02</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $single['id']?>">
        addname: <input type="text" name="name" value="<?= $single['name']?>">
        IMAGE: <input type="file" name="image">
        <input type="hidden" value="<?= $single['image']?>" name="oldimg">
        <img src="image-file/<?= $single['image']?>" alt="" height="50px" width="50px">
        <button type="submit">SUBMIT</button>
    </form>
</body>
</html>
<?php
}
else{
    header('Location:read.php');
}

?>