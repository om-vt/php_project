<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>image</th>
            <th>update</th>
            <th>delete</th>

        </tr>
        <?php
            $con = mysqli_connect('localhost','root','','profile');
            $sql= "select * from task03_2";
            $res = mysqli_query($con,$sql);
            if(mysqli_num_rows($res)>0){
                while($row=mysqli_fetch_assoc($res)){
        ?>
        <tr>
            <td><?= $row['id']?></td>
            <td><?= $row['name']?></td>
            <td><img src="image-file/<?= $row['image']?>" alt="" height="50px" width="50px"></td>
            <td><a href="update.php?id=<?= $row['id']?>">update</a></td>
            <td><a href="delete.php?id=<?= $row['id']?>">delete</a></td>

        </tr>
        <?php
            }
        }
        ?>
    </table>
</body>
</html>