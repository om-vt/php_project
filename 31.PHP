<?php
$CON = mysqli_connect('localhost', 'root', '', 'profile');

if (!$CON) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty($_POST['name'])) {
        echo "<script>
        alert('Enter name first');
        </script>";
    } else {

        $name = mysqli_real_escape_string($CON, $_POST['name']); 
        

        $sql = "INSERT INTO singlefeild (name) VALUES ('$name')";
        
  
        if (mysqli_query($CON, $sql)) {
            echo "<script>
            alert('Data inserted successfully');
            window.location.href='31.read.php';
            </script>";
        } else {
            echo "<script>
            alert('Error inserting data: " . mysqli_error($CON) . "');
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
    <form action="" method="post">
        <input type="text" name="name" placeholder="Enter your name">
        <button type="submit">Submit</button>
    </form>
</body>
</html>
