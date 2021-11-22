<?php

require("function.php");

$conn= getConn('localhost', 'diituser', '%TGBbgt5','php');

$stmt= $conn->prepare("SELECT * FROM users");
$stmt->execute();
$result= $stmt->setFetchMode(PDO::FETCH_ASSOC);
$records = $stmt->fetchAll();

//print_r($records);

?>
