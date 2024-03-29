<?php
session_start(); 

if(isset($_POST['send'])){

    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];
    $guests = $_POST["guests"];
    $package_name = $_POST['package_name'];

    $conn = new PDO("mysql:host=localhost;dbname=project", "root", "");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->exec("SET CHARACTER SET utf8");

    $stmt = $conn->prepare("SELECT Package_ID FROM package_detail WHERE Package_name = :package_name");
    $stmt->bindParam(':package_name', $package_name, PDO::PARAM_STR);
    $stmt->execute();
    $package_id = $stmt->fetchColumn();
    
    $stmt = $conn->prepare("INSERT INTO books (Package_ID, Package_name, FullName, Email, Phone, Address, Guests) VALUES (:package_id, :package_name, :name, :email, :phone, :address, :guests)");
    $stmt->bindParam(':package_id', $package_id, PDO::PARAM_INT);
    $stmt->bindParam(':package_name', $package_name, PDO::PARAM_STR);
    $stmt->bindParam(':name', $name, PDO::PARAM_STR);
    $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    $stmt->bindParam(':phone', $phone, PDO::PARAM_STR);
    $stmt->bindParam(':address', $address, PDO::PARAM_STR);
    $stmt->bindParam(':guests', $guests, PDO::PARAM_INT);
    $stmt->execute();


    header("Location: thank.php");
} else {
    echo 'ERROR! Please try again.';
}
?>
