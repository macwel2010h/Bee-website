<?php
require 'database_conn.php';

$sql = "INSERT INTO users (first_name,last_name,username,email,password)
VALUES('{$_POST['first_name']}' ,  '{$_POST['last_name']}' ,' {$_POST['username']}' ,' {$_POST['email']}' , '{$_POST['password']}' )";

$db->exec($sql);
header("Location:../HTML/welcome.html");
exit();
