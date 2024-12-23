<form action="" method="post">
    name:<input type="text" name="name">
    email:<input type="text" name="email">
    <input type="submit" value="validation" name="validate">
</form>
<?php
    if($_SERVER['REQUEST_METHOD']=='POST'){
        if(isset($_POST['validate'])){
            if(empty($_POST['name'])){
                echo "name field is requird";
            }elseif(empty($_POST['email'])){
                echo "Email field is required";
            }else{
                echo $_POST['name'];
                echo $_POST['email'];
            }
        }
    }
?>