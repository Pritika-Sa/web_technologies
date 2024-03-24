<?php
$HOSTNAME='localhost';
$USERNAME='dsc14';
$PASSWORD='dsc14';
$DATABASE='dsc14';
$con=mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DATABASE);
if($con)
{
    echo " Connection Sucessfull";
}
else
{
    die(mysqli_error($con));
}
?>