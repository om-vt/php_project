<?php
$res=fopen("techsima.txt",'w+');
fwrite($res,"this is test text.");
// fseek($res,0);
// rewind($res);
echo fread($res,filesize("techsima.txt"));
fclose($res);
?>