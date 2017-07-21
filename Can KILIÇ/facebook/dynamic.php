<?php

$dbserver = "localhost";
$dbuser = "root";
$dbuserpass = "";
$db = "can";

$baglan = mysql_connect($dbserver,$dbuser,$dbuserpass);

  if(!$baglan){
    echo "Veritabanina baglandi";

  }
  $db_select = mysql_select_db($db,$baglan);
  if(!$db_select){
    echo "Veritabanina baglandi";
  }
?>
