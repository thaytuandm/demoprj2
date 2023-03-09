<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/_sample/spa/content/db_config.php';

$id  = $_GET["id"];

$post = file_get_contents('php://input');
$post = json_decode($post);
$sql = "UPDATE posts SET title = '".$post->title."', description = '".$post->description."' WHERE id = '".$id."'";
$result = $mysqli->query($sql);

$sql = "SELECT * FROM posts WHERE id = '".$id."'"; 
$result = $mysqli->query($sql);
$data = $result->fetch_assoc();

echo json_encode($data);
?>