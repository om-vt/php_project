<?php
session_start();
if(isset($_SESSION['logindata'])){
    header('Location:dashboard.php');
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty($_POST['username'])) {
        echo "<script>
                alert('Username is required');
                window.location.href='login.php';
              </script>";
    } elseif (empty($_POST['password'])) {
        echo "<script>
                alert('Password is required');
                window.location.href='login.php';
              </script>";
    } elseif ($_POST['username'] == 'ram@gmail.com' && $_POST['password'] == '12345') {
        
        $_SESSION['logindata'] = $_POST['username'];
        header('Location:dashboard.php');
    
    } else {
        echo "<script>
                alert('Username or password is incorrect');
              </script>";
    }
} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="" method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" >
        <br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password">
        <br>
        <button type="submit">login</button>
    </form>
</body>
</html>
