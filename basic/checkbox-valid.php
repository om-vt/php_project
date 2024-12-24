<?php
// if($_SERVER['REQUEST_METHOD']=='POST'){
//     if(isset($_POST['validatecheck'])){
//         if(empty($_POST['sub'])){
//             // echo "please select atleast one subject";
//             echo"<script>
//                 alert('please select atleast one subject');
//                 window.location.href='checkbox.php'; //another page source address note:-header:location not work here
//                 </script>
//             ";
//         }else{
//             print_r($_POST['sub']);
//         }
//     }
// }
?>
<form action="checkbox-validpost.php" method="post">
    <h2>select your subject for 10th standard</h2><br>
    <input type="checkbox" name="sub[]" value="Math">Math<br>
    <input type="checkbox" name="sub[]" value="English">English<br>
    <input type="checkbox" name="sub[]" value="hindi">hindi<br>
    <input type="checkbox" name="sub[]" value="Art">Art<br>
    <input type="checkbox" name="sub[]" value="science">science<br>
    <input type="checkbox" name="sub[]" value="social-science">social science<br>
    <input type="submit" name="validatecheck" value="validation"><br>
</form>
