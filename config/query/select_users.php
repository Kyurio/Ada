<?php

require_once("../../config/core/Conexion.php");



$sql = "SELECT * FROM user";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->get_result(); // get the mysqli result
$user = $result->fetch_assoc(); // fetch data

echo json_encode($user);
