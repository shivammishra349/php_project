<?php

require("function.php");

$conn= getConn('localhost', 'diituser', '%TGBbgt5','diit');

$stmt= $conn->prepare("SELECT * FROM shivam_user");
$stmt->execute();
$result= $stmt->setFetchMode(PDO::FETCH_ASSOC);
$records = $stmt->fetchAll();

//print_r($records);

?>
