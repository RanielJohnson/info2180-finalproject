<?php
require_once 'default.php';

$conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
$index = htmlspecialchars(filter_input(INPUT_GET,'index',FILTER_SANITIZE_STRING)); 

$updated_date = NOW();

$stmt = $conn->prepare("UPDATE issues SET status=?, updated=? WHERE id='$index'");
$stmt->execute(["Closed",$updated_date]);  
?>