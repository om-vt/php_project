<form action="form-valid-demo-post.php" method="post">
    first_name:<input type="text" name="fname">
    <small style="color:red"><?=isset($_GET['fnameerror'])?$_GET['fnameerror'] : " " ?></small>
    last_name:<input type="text" name="lname">
    <small style="color:red"><?=isset($_GET['lnameerror'])?$_GET['lnameerror'] : " " ?></small>

    address:<input type="text" name="address">
    <small style="color:red"><?=isset($_GET['addresserror'])?$_GET['addresserror'] : " " ?></small>

    phone-number:<input type="number" name="number">
    <small style="color:red"><?=isset($_GET['phoneerror'])?$_GET['phoneerror'] : " " ?></small>

    <input type="submit" value='submit' name='valid'>
</form>