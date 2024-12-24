<?php
// r+ use to read and append
$res = fopen("demo2.txt","r+");
echo fread($res,filesize("demo2.txt"));
fwrite($res,"this is read append and write mode.");
echo fread ($res,filesize("demo2.txt"));

?>