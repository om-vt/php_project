<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
    <tr>
        <th>Id</th>
        <th>name</th>
        <th>image</th>
        <th>delete</th>
        <th>update</th>
    </tr>
    <?php
    $con = mysqli_connect('localhost','root','','profile');
    $sql = "Select * from fileuplode";
    $result = mysqli_query($con,$sql);
    if(mysqli_num_rows($result)>0){
        while($row =mysqli_fetch_assoc($result)){
        ?>
   
    <tr>
    <td><?= $row['id']?></td>
    <td><?= $row['name']?></td>
    <td><img height="50px" width="50px" src="uplode-img/<?= $row['image']?>" alt=""></td>
    <td><a href="del.php?id=<?=$row['id']?>">delete</a></td>
    <td><a href="edit.php?id=<?=$row['id']?>">update</a></td>
    </tr>
    <?php
    }
        }
        ?>
        
    </table>

</body>
</html>