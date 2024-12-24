<?php
// // date("y");  //return the current year.
// echo "current year is = ".date("Y")."<br>";
// echo "current year last year number = ".date("y")."<br>";
// echo "current month is = ".date("m")."<br>";
// echo "current month name is = ".date("M")."<br>";
// echo "current day is = ".date("d")."<br>";
// echo "current day name is = ".date("D")."<br>";
// echo "current hour is = ".date("H")."<br>";
// echo "current minute is = ".date("i")."<br>";
// echo "current second is = ".date("s")."<br>";// second 
// echo "current second is = ".date("a")."<br>";// am pm 

//------------------------------------------------------------------------------
// echo date_default_timezone_get();   // to get which time zone is.

//---------------------------------------------------------------------------------
// date_default_timezone_set("Asia/Kolkata");
//----------------------------------------------------------------------------

// echo date("h");//12 hour time format
// echo date("H");// 24 hour time format.


//-------------------------set time format---------------------------------------------
// echo date("Y-M-d h:i:s A");
// echo date("Y/M/d h:i:s A");
// echo date("d-M-Y  h:i:s A");


//-----------make time-=-or-=-customized time-------------
// mktime(hour,minute,second,month,day,year);

// $a=mktime(9,10,12,01,01,2025);
// echo date("d/M/y  h:i:s  a",$a);

//------------strtotime-> string to time----------------
$c=strtotime("10:20am 20 dec 2006");
// echo date("d/m/y h:i:s a",$c);
echo date("Y-m-d",strtotime("10/20/2006 12:10:20am"));


//include:- include the file  from another source  we use include method in our main file . if file was missing it generate warining  error (massage) .
// require:- same as include but if file was not found it generate fatal error.

?>