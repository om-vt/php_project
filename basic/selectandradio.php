<form action="" method="post">
    <div>
    <select name="contry" id="">
        <option value="">------Select Contry-------</option>
        <option value="India">India</option>
        <option value="Chiana">Chian</option>
        <option value="Buthan">Butan</option>
        <option value="Nepal">Nepal</option>
        <option value="Pak">Pak</option>
    </select>
    </div>
    <div>
        <label for="">Gender:</label>
        <input type="radio" name="gender" value="male">male
        <input type="radio" name="gender" value="female">femele
    </div>
    <input type="date" name="date">
    <input type="range" name="range" value=0>
    <textarea name="text" id=""></textarea>
    <input type="search">
    <input type="color" name="color">
    <input type="submit">
</form>
<div style="height:100px;width:300px;background:<?=$_POST['color']; ?>"></div>
<?php
print_r($_POST);
?>