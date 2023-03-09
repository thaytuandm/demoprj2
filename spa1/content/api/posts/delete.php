<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/_sample/spa/content/db_config.php';

$id  = $_GET["id"];
$sql = "DELETE FROM posts WHERE id = '".$id."'";
$result = $mysqli->query($sql);

echo json_encode([$id]);
?>