<?php
require 'database_conn.php';
$sql = "SELECT email,username,password FROM users";
$results = $db->query($sql);

$email_entered = htmlspecialchars((isset($_POST['email']) && is_string($_POST['email'])) ? $_POST['email'] : "invalid_entry");
$password_entered = htmlspecialchars((isset($_POST['password']) && is_string($_POST['password'])) ? $_POST['password'] : "invalid_entry");



foreach ($results as $result) {
    if ($result['email'] == $email_entered || $result['username'] == $email_entered) {
         echo $result['email'].'<br>';
        if($result['password'] == $password_entered){
            echo $result['email'].'<br>';
            echo $result['password'].'<br>';
        header('location: ../HTML/sign_in.html');
        exit();
        }
    }
}
header('location: ../HTML/new_acc.html');
exit(); 
?> 


