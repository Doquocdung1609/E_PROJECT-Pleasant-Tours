<?php
include_once('index.php');

if(!empty($_GET)) {
	$id = $_GET['id'];
	$datalist = $conn->prepare("DELETE FROM package_detail WHERE Package_ID = $id");
    $datalist->execute();
   

	header('Location: ViewPackageAdmin.php');
}
?>