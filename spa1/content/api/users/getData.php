<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/_sample/spa/content/db_config.php';

$sql = "SELECT * FROM users"; 
$result = $mysqli->query($sql);

while($row = $result->fetch_assoc()){
     $json[] = $row;
}

$data['data'] = $json;
$result =  mysqli_query($mysqli,$sql);
echo json_encode($data);
?>