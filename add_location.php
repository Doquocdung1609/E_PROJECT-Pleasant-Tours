<?php
include_once('index.php');

if(isset($_POST['add_location'])) {
    // Retrieve package ID from the form
    $package_id = $_POST['package_id'];

    // Sanitize and validate input
    $from_location = $_POST['from_location'];
    $to_location = $_POST['to_location'];
    $departure_date = $_POST['date_depart'];
    $location_img = $_POST['location_img'];
    $description = $_POST['description'];

    // Loop through each location data and insert into the database
    for($i = 0; $i < count($from_location); $i++) {
        // Prepare and execute the SQL statement for insertion
        $stmt = $conn->prepare("INSERT INTO location_detail (Package_ID, From_location, To_location, Date_depart, Location_Img, Description) 
                                VALUES (:package_id, :from_location, :to_location, :departure_date, :location_img, :description)");
        $stmt->bindParam(':package_id', $package_id);
        $stmt->bindParam(':from_location', $from_location[$i]);
        $stmt->bindParam(':to_location', $to_location[$i]);
        $stmt->bindParam(':departure_date', $departure_date[$i]);
        $stmt->bindParam(':location_img', $location_img[$i]);
        $stmt->bindParam(':description', $description[$i]);

        // Check if the execution was successful
        if ($stmt->execute()) {
            // Location added successfully
        } else {
            // Handle the case where the execution failed
            echo 'ERROR! Unable to add location.';
        }
    }

    // Redirect to the package view page or wherever you want after adding location
    header("Location: ViewPackageAdmin.php?");
    exit();
} else {
    // Handle the case where 'add_location' parameter is not set
    echo 'ERROR! Please try again.';
}
?>