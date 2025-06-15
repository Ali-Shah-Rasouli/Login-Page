
<?php
include_once "connection.php";

$user_id=1;
$update = "update register_users set fullName='Jan ali' where id=3 ";

if($conn->query($update)){
    echo " $conn->affected_rows row successfully updated";
}
else{
    echo " failed to update";
}
// using prepare 
$addage=2;
$update = "update register_users set set age=age + ? ";
$stmt = $conn->prepare($del);
$stmt->bind_param("i", $addage);
$stmt->execute();
