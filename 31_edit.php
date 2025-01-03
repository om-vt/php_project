<?php
$CON = mysqli_connect('localhost', 'root', '', 'profile');
if (!$CON) {
    die("Connection failed: " . mysqli_connect_error());
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = mysqli_real_escape_string($CON, $_POST['name']);
    $id = mysqli_real_escape_string($CON, $_POST['id']);
    
    $sql = "UPDATE singlefeild SET name = '$name' WHERE id = $id";
    if (mysqli_query($CON, $sql)) {
        echo "<script>
        alert('Data updated successfully');
        window.location.href = 'read.php';
        </script>";
    } else {
        echo "Error updating record: " . mysqli_error($CON);
    }
}
if (isset($_GET['id'])) {
    $id = mysqli_real_escape_string($CON, $_GET['id']);
    $sql = "SELECT * FROM singlefeild WHERE id = $id";
    $single = mysqli_query($CON, $sql);
    if (mysqli_num_rows($single) > 0) {
        $data = mysqli_fetch_assoc($single);
    } else {
        die("Record not found.");
    }
} else {
    die("Invalid request.");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Record</title>
</head>
<body>
    <form action="" method="post">
        <input type="hidden" name="id" value="<?php echo htmlspecialchars($data['id']); ?>">
        <input type="text" name="name" placeholder="Enter your name" value="<?php echo htmlspecialchars($data['name']); ?>">
        <button type="submit">Submit</button>
    </form>
</body>
</html>
