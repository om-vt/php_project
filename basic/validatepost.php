<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(isset($_POST['validate'])){
        if(empty($_POST['name'])){
            header('Location:form-valid-url.php?nameerror=Name field is required');
        }elseif(empty($_POST['email'])){
            header('Location:form-valid-url.php?emailerror=email field is required');
        }else{
            echo "my name is".$_POST['name']." and email is ".$_POST['email'];
        }
    }
    
}else{
    echo "Invalid Request";
}
?>