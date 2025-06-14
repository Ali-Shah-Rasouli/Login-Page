<?php
include_once "connection.php";

$userdata = array(
    'flullName'=>" Ali shah",
    'emailAddress'=>"ali@gmail.com",
    'password'=>"123",
    'confPassword'=>"123"
);

$adddata =" insert into register_users (flullName, emailAddress, passowrd, confPassword) values ('{$userdata['fullName']}', '{$userdata['emailAddress']}', '{$userdata['password']}', '{$userdata['confPassword']}')";
if($conn->query($adddata)){
    echo " data added ".PHP_EOL;
  echo $adddata;  
}
else{
echo " data not added ($mysqli->error) ";
}
 