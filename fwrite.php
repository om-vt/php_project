<?php
$res = fopen("demo2.txt",'w');
$data="1fwrite function used to create a file and write 
some text inside created file10";
fwrite($res,$data);
// echo fwrite($res,$data); or echo fputs($res,$data);

fclose($res);

//===============
// The feof() function checks if the "end-of-file" (EOF) has been reached.
// The feof() function is useful for looping through data of unknown length.
?>