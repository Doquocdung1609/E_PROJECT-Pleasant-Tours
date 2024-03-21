<?php
include_once('index.php');

if (!empty($_POST['fullname'])) {
    $fullname = $_POST['fullname'];

    // Prepare the SQL statement with a named placeholder
    $stmt = $conn->prepare("INSERT INTO users (username) VALUES (:fullname)");

    // Bind the value to the named placeholder
    $stmt->bindValue(':fullname', $fullname, PDO::PARAM_STR);

    // Execute the statement
    $stmt->execute();

    // Redirect after successful insertion
    header('Location: ViewPackageAdmin.php');
    exit(); // Always exit after redirect
} else {
    // Handle case where fullname is empty
    echo "Fullname is required!";
}
?>