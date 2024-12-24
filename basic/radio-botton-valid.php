<?php
// echo $_REQUEST['gender'];
// if(isset($_REQUEST['gender'])){
//     echo $_REQUEST['gender'];
// }else{
//     echo "select your gender";
// }

?>

<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(empty($_POST['vlidation'])){
        if(empty($_POST['country'])){
            header("Location:radio-validation.php?countryerror=please select your origin country");
        }elseif(empty($_POST['gender'])){
            header("Location:radio-validation.php?gendererror=please select your gender");
        }else{
            echo $_POST['country'];
            echo $_POST['gender'];

        }
    }
}


?>