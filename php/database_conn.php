<?php
// Use environment variable for host (defaults to 'db' for Docker, 'localhost' for local dev)
$host = getenv('DB_HOST') ?: 'db';
$dbname = getenv('DB_NAME') ?: 'the_website_db';
$user = getenv('DB_USER') ?: 'root';
$pass = getenv('DB_PASSWORD') ?: 'Abcd@1234';
$port = "3306";

$connString = "mysql:dbname={$dbname};host={$host};port={$port}";

try {
    $db = new PDO($connString, $user, $pass);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
}
