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
    <a href="FORM-CREATE.PHP" class="btn btn-primary">Create data</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">First NAME</th>
                <th scope="col">Last NAME</th>
                <th scope="col">PHONE NO</th>
                <th scope="col">Email</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
    $con = mysqli_connect('localhost', 'root', '', 'app25_crud');
    $sql= "select * from users";
    $result = mysqli_query($con, $sql);
    if (mysqli_num_rows($result) > 0) {
        while ($record = mysqli_fetch_assoc($result)) {
            ?>
            <tr>
                <th scope="row"><?= $record['ID'] ?></th>
                <td><?= $record['fname'] ?></td>
                <td><?= $record['lname'] ?></td>
                <td><?= $record['phone'] ?></td>
                <td><?= $record['email'] ?></td>
                <td><a href="delete.php?id=<?= $record['ID'] ?>" class="btn btn-danger">Delete</a></td>
                <td><a href="update.php?id=<?= $record['ID'] ?>" class="btn btn-success">Update</a></td>

            </tr>
            <?php
        }
    }
    ?>
    </tbody>
    </table>
</body>

</html>
