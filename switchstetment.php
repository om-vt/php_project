<?php

$age=20;
switch($age)
{
    case 0:
        echo "invalid number";
    case $age >=18:
        echo "eligible for vote";
        break;
    case $age <=18:
        echo "not eligible for vote";
        break;

    default:
        echo "data not match";

}
?>