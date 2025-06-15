<?php 
include_once "connection.php";


$read ="select fullName, email from register_users";
$stmt =$conn->prepare($read);
$stmt->execute();
$stmt->vind_result($fullName, $age);
while($stmt->fetch()){
    echo " <div> $fullName     : $age</div>";
}

// read all columns

// $read ="select  from register_users";
// $stmt =$conn->prepare($read);
// $stmt->execute();
// $stmt->vind_result($id,$fullName, $email, $password, $confPassword);
// while($stmt->fetch()){
//     echo " <div> $fullName     : $email </div>";
// }
