<?php
//echo $_SERVER['DOCUMENT_ROOT'];die();
require_once $_SERVER['DOCUMENT_ROOT'].'/_sample/spa/content/db_config.php';
//require_once $_SERVER['DOCUMENT_ROOT'].'/db_config.php';

$sql = "SELECT * FROM posts"; 
$result = $mysqli->query($sql);

while($row = $result->fetch_assoc()){
     $json[] = $row;
}

$data['data'] = $json;
$result =  mysqli_query($mysqli,$sql);

//$data = '{"data":[{"id":"7","title":"Ti\u00eau \u0111\u1ec1 sample","description":"M\u00f4 t\u1ea3 sample","created_at":null,"updated_at":null}]}';
echo json_encode($data);
//echo $data;
?>