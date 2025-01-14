<?php
$con = mysqli_connect('localhost','root','','profile');
if($_SERVER['REQUEST_METHOD']=='POST'){
    $id=$_POST['id'];
foreach($_FILES['file']['name'] as $key=>$val){
    move_uploaded_file($_FILES['file']['tmp_name'][$key],"image/$val");
}
$images =implode(',',$_FILES['file']['name']);
$sql = "update multifile set image='$images' where id=$id";
if(mysqli_query($con,$sql)){
    echo"<script>
    alert('Image uploaded succesfully')
    window.location.href='read.php';
    </script>";
}
}
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $sql="select * from multifile where id=$id";
    $record=mysqli_query($con,$sql);
    if(mysqli_num_rows($record)>0){
        $data=mysqli_fetch_assoc($record);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiple file uploaded</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?=$data['id']?>">
        file: <input type="file" name="file[]" multiple>
        <input type="hidden" value="<?= $data['image']?>" name="oldimage">
        <img src="image/<?=$data['image']?>" height="50px" width="50px" alt="">
        <button type="submit">Upload</button>
    </form>
</body>
</html>
<?php
}
else{
    header('location:read.php');
}