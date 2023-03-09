<?php
	require_once $_SERVER['DOCUMENT_ROOT'].'/_sample/spa/content/db_config.php';

	$id  = $_GET["id"];
	$sql = "SELECT * FROM posts WHERE id = '".$id."'"; 
	$result = $mysqli->query($sql);
	$data = $result->fetch_assoc();
	
	echo json_encode($data);
?>