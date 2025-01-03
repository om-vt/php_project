<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Optional Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <a href="30.php" class="btn btn-primary">Create data</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">username</th>
                <th scope="col">options</th>
                <th scope="col">subjects</th>
                <th scope="col">comments</th>
                <th scope="col">gender</th>
            </tr>
        </thead>
        <tbody>
            <?php
    $con = mysqli_connect('localhost', 'root', '', 'profile');
    $sql= "select * from users2";
    $result = mysqli_query($con, $sql);
    if (mysqli_num_rows($result) > 0) {
        while ($record = mysqli_fetch_assoc($result)) {
            ?>
            <tr>
                <th scope="row"><?= $record['id'] ?></th>
                <td><?= $record['username'] ?></td>
                <td><?= $record['dob'] ?></td>
                <td><?= $record['options'] ?></td>
                <td><?= $record['subjects'] ?></td>
                <td><?= $record['comments'] ?></td>
                <td><?= $record['gender'] ?></td>
                <td><a href="30_del.php?id=<?= $record['id'] ?>" class="btn btn-danger">Delete</a></td>
                <td><a href="30_update.php?id=<?= $record['id'] ?>" class="btn btn-success">update</a></td>
            </tr>
            <?php
        }
    }
    ?>
    </tbody>
    </table>
</body>

</html>
