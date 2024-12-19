<?php
// $data=fopen("sample.txt","r");
// // echo fread($data,100);
// echo fread($data,filesize("sample.txt"));
// fclose($data);
//======================

$data=fopen("sample.txt","r");
// // echo fread($data,100);
// echo fread($data,filesize("sample.txt"));
// echo fgets($data);// it show first line of file .
// echo fgetc($data);  // it show first letter of file .
// note:- once read file not read again.
//====================================================
while(!feof($data)){
    // echo fgets($data);
    // echo fgetc($data);
}
fclose($data);
//============================================
?>