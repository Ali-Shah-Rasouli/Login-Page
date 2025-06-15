<?php
include_once "connection.php";

$createtbl ="
create table register_users(
id int auto_increment  primary key,
flullName varchar(50) not null,
emailAddress varchar(50) not null,
password varchar(255) not null,
confPassword varchar(255) not null);
";

if($conn->query($createtbl)){
    echo " table successfully created !";
}
else{
    echo " table is not created";
}
