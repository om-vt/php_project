<?php
//-------------$_REQUEST-----------
// IT is contain information of submitted
// form data all cokies.
// print($_SERVER['REQUEST_METHOD']);

print_r($_REQUEST);

?>
<form action="<?=$_SERVER['PHP_SELF']?>">
    <label for="first">name</label>
    <input type="text" id="first" name="name">
    <input type="submit">
</form>

<!-- //------------------------ -->
<form action="secondpagerequest.php" method="post">
    <label for="first">name</label>
    <input type="text" id="first" name="name">
    <input type="submit">
</form>