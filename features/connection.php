<?php  

$conn = new mysqli("localhost", "root", "", "db_register");

if($conn ->connect_errno){
    echo " failed to connect to db_register". $conn->connect_errno;
}
 echo" connection successful";
 $conn->set_charset('utf8');
?>