<?php
echo "<pre>";
// print_r($_POST); // Prints form submission data sent via POST

echo"My Name is : ".$_POST['name']."<br>";
echo"My email is : ".$_POST['email']."<br>";
echo"My phone no  is : ".$_POST['phone']."<br>";
echo"My address is : ".$_POST['address']."<br>";






?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submission</title>
</head>
<body>
    <form action="" method="post">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" name="name">
        <br><br>
        
        <label for="email">Email</label>
        <input type="email" name="email" id="email" name="email">
        <br><br>
        
        <label for="phone">Phone</label>
        <input type="text" name="phone" id="phone" name="phone">
        <br><br>
        
        <label for="address">Address</label>
        <textarea name="address" id="address" rows="4" name="address"></textarea>
        <br><br>
        
        <input type="submit" value="Submit">
    </form>
</body>
</html>
