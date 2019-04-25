<?php
$conf["Username"]= 'root';
$conf["Password"]= '';
$conf["Host"]= 'localhost';
$conf["Database"]= 'classicmodels';

$con = mysqli_connect($conf["Host"], $conf["Username"], $conf["Password"], $conf["Database"]);

if($con == false){
    echo "Kan geen verbinding maken met de database";
}
?>