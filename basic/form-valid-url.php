<form action="validatepost.php" method="post">
    name:<input type="text" name="name">
    <small style="color:red"><?=isset($_GET['nameerror'])?$_GET['nameerror'] : " " ?></small>
    email:<input type="text" name="email">
    <small style="color:red"><?=isset($_GET['emailerror'])?$_GET['emailerror'] : " " ?></small>
    <input type="submit" value="validation" name="validate">
</form>