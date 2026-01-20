<?php
require 'database_conn.php';

$first_name = htmlspecialchars((isset($_POST['first_name']) && is_string($_POST['first_name']))?$_POST['first_name']:"invalid_entry");
$last_name = htmlspecialchars((isset($_POST['last_name']) && is_string($_POST['last_name']))?$_POST['last_name']:"invalid_entry");
$username = htmlspecialchars((isset($_POST['username']) && is_string($_POST['username']))?$_POST['username']:"invalid_entry");
$email = htmlspecialchars((isset($_POST['email']) && is_string($_POST['email']))?$_POST['email']:"invalid_entry");
$password = htmlspecialchars((isset($_POST['password']) && is_string($_POST['password']))?$_POST['password']:"invalid_entry");

$sql = "INSERT INTO users (first_name,last_name,username,email,password)
VALUES('$first_name' ,  '$last_name' ,'$username' ,'$email' , '$password' )";
$db->exec($sql);
header("Location:../HTML/welcome.html");
exit();
