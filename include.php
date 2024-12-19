<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .con{
        height:300px;
        width: 100%;
        border: 1px solid red;
        background:yellow;


    }
    </style>
</head>
<body>
    <div class="con"> name
    <div class="box">
    </div>
    </div>
</body>
</html>
<?php
include('date.php');    // USE FOR CODE REUSEABLITY AND CODE THE CODE FILE AND TIME EFFICIENT
include_once('date.php');   // only use one time 
require('date.php');
require_once('date.php');//  only add one time same file 
?>