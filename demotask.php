<?php

if(isset($_POST['number'])){
    $number = $_POST['number'];
    if ($number > 1) {
        $Prime = true;
        for ($i = 2; $i * $i <= $number; $i++) {
            if ($number % $i == 0) {
                $Prime = false;
                break;
            }
        }
        if ($Prime) {
            echo "$number is a prime number.";
        } else {
            echo "$number is not a prime number.";
        }
    } else {
        echo "$number is not a prime number.";
}
}
?>


<form action="" method="post">
  enter number:  <input type="number" name='number'>
  <button type="submit">submit</button>
</form>