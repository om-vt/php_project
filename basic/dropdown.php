<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <select name="" id="">
    <option value="">---select contry</option>
    <?php
    $country=["Afghanistan","Albania","Algeria","Andorra","Angola","Anguilla","Antigua &amp; Barbuda","Argentina","Armenia","Aruba","Australia","Austria","Azerbaijan","Bahamas","Bahrain","Bangladesh","Barba","Faso"];
    // for($i=0;$i<=5;$i++){
    //     echo "<option value=''>$country[$i]</option>";
    // }
    foreach($country as $val){
        echo "<option value=''>$val</option>";
    }
    ?>

    </select>
</body>
</html>