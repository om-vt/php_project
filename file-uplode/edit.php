<?php
    $con = mysqli_connect('localhost','root','','profile');
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $id=$_POST['id'];
        $name= $_POST['name'];
        if(empty($_FILES['image']['name'])){
            $filename=$_POST['oldimage'];
        }else{
            $filename=time().$_FILES['image']['name'];
            $tmpname=$_FILES['image']['tmp_name'];
            move_uploaded_file($tmpname,"uplode-img/$filename");
        }
        $sql = "update fileuplode set name='$name',image='$filename' where id=$id";
        if(mysqli_query($con,$sql)){
            echo "<script>
            alert('data update successfully');
            window.location.href='read.php';
            </script>";
        }
    }
    if(isset($_GET['id'])){
        $id=$_GET['id'];
        $sql = "select * from fileuplode where id=$id";
        $result = mysqli_query($con,$sql);
        if(mysqli_num_rows($result)>0){
            $single= mysqli_fetch_assoc($result);
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
       <input type="hidden" name="id" value="<?=$single['id']?>">
        name: <input type="text" value="<?=$single['name']?>" name="name">
        file: <input type="file" name="image">
        <input type="hidden" value="<?=$single['image']?>" name="oldimage"/>
        <img src="file-uplode/<?=$single['image']?>" alt="" height="50px" width="50px">
        <br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
<?php
}else{
    header('Location:read.php');
}
?>