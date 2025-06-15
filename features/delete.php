
<?php
include_once "connection.php";

$user_id=1;
$del = "delete from register_users where id=? ";

$stmt = $conn->prepare($del);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$stmt->close();