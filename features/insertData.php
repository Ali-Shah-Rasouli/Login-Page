<?php
include_once "connection.php";

$userdata = array(
    'fullName'=>" Ahmad ",
    'emailAddress'=>"ali@gmail.com",
    'password'=>"123",
    'confPassword'=>"123"
);

// $add_data =" insert into register_users (fullName, emailAddress, password, confPassword) values ('{$userdata['fullName']}', '{$userdata['emailAddress']}', '{$userdata['password']}', '{$userdata['confPassword']}')";
// if($conn->query($add_data)){
//     echo " data added successfully ".PHP_EOL;
// }
// else{
// echo " data not added ($mysqli->error) ";
// }

function addUser($userdata){
  global $conn;
   $add_data ="insert into register_users (fullName, emailAddress, password, confPassword) values (?, ?, ?, ? )";
 $stmt = $conn->prepare($add_data);
 $stmt->bind_param('ssss', $userdata['fullName'], $userdata['emailAddress'], $userdata['password'], $userdata['confPassword']);
 $stmt->execute();
 return $stmt->insert_id;
}
$user_id = addUser(['fullName'=> 'Ahmad', 'emailAddress'=>'Ahmad@yahoo.com', 'password'=> '123', 'confPassword'=>'123']);
echo " added user id is: $user_id";