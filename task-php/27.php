<?php



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="27_post.php" method="POST">
    <select name="country" id="">
   <option value="">---country name---</option>
   <option value="india">India</option>
   <option value="nepal">nepal</option>
   <option value="chaina">chaina</option>
   <option value="bhutan">bhutan</option><br>
   </select>
   <h3>select your subject </h3>
   <input type="checkbox" name="sub[]" value="hindi">hindi<br>
   <input type="checkbox" name="sub[]" value="english">english<br>
   <input type="checkbox" name="sub[]" value="math">math<br>
   <input type="checkbox" name="sub[]" value="science">science<br>
   

<button type="submit">submit</button>
   
   </form>
</body>
</html>