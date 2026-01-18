<?php
require 'database_conn.php';
$sql = "SELECT email FROM users";
$results = $db->query($sql);

$postEmail = trim($_POST['email']);

foreach ($results as $result) {
    if (trim($result['email']) === $postEmail) {
        header('location: ../HTML/sign_in.html');
        exit();
    }
}
header('location: ../HTML/new_acc.html');
exit();
