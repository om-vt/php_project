<!-- <form action="radio-botton-valid.php" method="post">
    <h1>choose you gender</h1>
    male:<input type="radio" name="gender" value="male">
    Female:<input type="radio" name="gender" value="female">
    other:<input type="radio" name="gender" value="other">
    <input type="submit" name="valid" value="submit">
    
</form> -->



<!-- //-------------------------------------- -->
 <form action="radio-botton-valid.php" method="post">
Country : <select name="country" id="">
<option value="">-------select country-------</option>
    <option value="india">India</option>
    <option value="amecic">Aamerica</option>
    <option value="chaina">Chaina</option>
    <option value="russiya">russiya</option>
</select>
<small style="color:red;"><?= isset($_GET['countryerror'])? $_GET['countryerror']:''?></small>
    gender: <input type="radio" name="gender" value="male"> male
    <input type="radio" name="gender" value="female">female</br>
<small style="color:red"><?= isset($_GET['gendererror'])? $_GET['gendererror']:''?></small>
<input type="submit" name="validation" value="Validate">

 </form>