<?php
	require_once $_SERVER['DOCUMENT_ROOT'].'/_sample/spa/content/db_config.php';

	$post = file_get_contents('php://input');
	$post = json_decode($post);

	
	$sql = "INSERT INTO posts (title,description) VALUES ('".$post->title."','".$post->description."')";
	$result = $mysqli->query($sql);

	$sql = "SELECT * FROM posts Order by id desc LIMIT 1"; 
	$result = $mysqli->query($sql);
	$data = $result->fetch_assoc();
	
	echo json_encode($data);
?>