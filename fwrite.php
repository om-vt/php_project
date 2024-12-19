<?php
$res = fopen("demo2.txt",'w');
$data="1fwrite function used to create a file and write 
some text inside created file10";
fwrite($res,$data);
echo fwrite($res,$data);
fclose($res);


?>