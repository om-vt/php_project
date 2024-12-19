<?php
$res = fopen("sys.jpg",'r');
$photo = fread($res,filesize("sys.jpg"));
$dest = fopen("computer.jpg",'w');
fwrite($dest,$photo);
fclose($dest);
fclose($res);

?>