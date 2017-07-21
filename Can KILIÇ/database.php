<?php 

$host="localhost";
$username="root";
$sifre="";
$veritabani="can";

try {
     $db = new PDO("mysql:host=$host;dbname=$veritabani;charset=utf8",$username,$sifre );
} catch ( PDOException $e ){
     print $e->getMessage();
}





?>