<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(isset($_POST['validatecheck'])){
        if(empty($_POST['sub'])){
            // echo "please select atleast one subject";
            echo "<script>
                alert('please select atleast one subject');
                window.location.href='checkbox-valid.php';
                </script>";
        }else{
            print_r($_POST['sub']);
        }
    }
}
?>