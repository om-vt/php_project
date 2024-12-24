<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(isset($_POST['valid'])){
        if(empty($_POST['fname'])){
            header('Location:form-valid-demo.php?fnameerror=fName is required');
        }elseif(empty($_POST['lname'])){
            header('Location:form-valid-demo.php?lnameerror=lName is required');
        }elseif(empty($_POST['address'])){
            header('Location:form-valid-demo.php?addresserror=address is required');
        }elseif(empty($_POST['number'])){
            header('Location:form-valid-demo.php?phoneerror=phone no is required');
        }else{
            echo "my fname is ".$_POST['fname']." and lastname is ".$_POST['lname']." my address is ".$_POST['address']." my phone number is ".$_POST['number'];
        }

    }

}else{
    echo "Invalid Entry Request";
}
?>
