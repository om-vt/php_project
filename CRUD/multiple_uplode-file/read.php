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
            <th>id</th>
            <th>image</th>
            <th>create_at</th>
            <th>action</th>

        </tr>
        <?php
        $con = mysqli_connect('localhost','root','','profile');
        $sql="select * from multifile";
        $result=mysqli_query($con,$sql);
        if(mysqli_num_rows($result)>0){
            while($row=mysqli_fetch_assoc($result)){
               $val= explode(',',($row['image']));
                ?>

        <tr>
            <td><?= $row['id']?></td>
            <td>
                <?php
                foreach($val as $img){
                    ?>

                <img height="50px" width="50px" src="image/<?= $img?>" alt="">
                <?php    
                }
            ?>
            </td>
            <td><?= $row['create_at']?></td>
            <td><a href="delete.php?id=<?=$row['id']?>">DEL</a></td>
            <td><a href="update.php?id=<?=$row['id']?>">EDIT</a></td>
        </tr>
        <?php
        }
    }
?>


    </table>
</body>

</html>