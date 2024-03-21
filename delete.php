<?php
include_once('index.php');

if(!empty($_GET)) {
	$id = $_GET['id'];
	$datalist = $conn->prepare("DELETE FROM users WHERE id = $id");
    $datalist->execute();
   

	header('Location: ViewPackageAdmin.php');
}
?>