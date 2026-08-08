
<?php

$host = "sql312.infinityfree.com";
$user = "if0_42608914";
$pass = "YOUR_PASSWORD";
$db   = "if0_42608914_webtask";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}

$conn->set_charset("utf8mb4");
?>
