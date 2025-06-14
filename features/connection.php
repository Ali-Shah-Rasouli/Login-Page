<?php  

$mysqli = new mysqli("localhost", "root", "", "db_register");

if($mysqli ->connect_errno){
    echo " failed to connect to db_register". $mysqli->connect_errno;
}
 echo" connection successful";
 $mysqli->set_charset('utf8');








 
?>