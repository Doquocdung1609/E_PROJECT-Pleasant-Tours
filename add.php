

<?php
include_once('index.php');

if(isset($_POST['add'])) {
    // Sanitize and validate input
    $packageName = $_POST['package_name'];
    $package_img = $_POST['package_img'];
    $Night = $_POST['Night'];
    $From_location = $_POST['From_location'];
    $To_location = $_POST['To_location'];
    $Depart = $_POST['Depart'];
    $Arrive = $_POST['Arrive'];
    $Price = $_POST['Price'];
    $Type = $_POST['Type'];
    $Hotel = $_POST['Hotel'];

    // Insert the new package's data into the database
    $stmt = $conn->prepare("INSERT INTO package_detail (Package_name, Package_img, Night, From_location, To_location, Depart, Arrive, Price,Type, Hotel) 
                            VALUES (:packageName, :package_img, :Night, :From_location, :To_location, :Depart, :Arrive, :Price, :Type, :Hotel)");
    $stmt->bindParam(':packageName', $packageName);
    $stmt->bindParam(':package_img', $package_img);
    $stmt->bindParam(':Night', $Night);
    $stmt->bindParam(':From_location', $From_location);
    $stmt->bindParam(':To_location', $To_location);
    $stmt->bindParam(':Depart', $Depart);
    $stmt->bindParam(':Arrive', $Arrive);
    $stmt->bindParam(':Price', $Price);
    $stmt->bindParam(':Type', $Type);
    $stmt->bindParam(':Hotel', $Hotel);
    
    // Check if the execution was successful
    if ($stmt->execute()) {
        $package_id = $conn->lastInsertId();
        // Redirect to the package view page after updating
       
    } else {
        // Handle the case where the execution failed
        echo 'ERROR! Unable to add package.';
    }
} else {
    // Handle the case where 'add' parameter is not set
    echo 'ERROR! Please try again.';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Locations to Package</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-4">
            <div class="card">
                <div class="card-header">
                    <h3>Add Locations to Package
                        <a href="Dashboard.php" class="btn btn-danger float-end">Back</a>
                    </h3>
                </div>
                <div class="card-body">
                    <form action="add_location.php" method="POST">
                    <input type="hidden" name="package_id" value="<?php echo $package_id; ?>">
                        <div class="row">
                        <?php 
                                // Generate form fields based on the value of $Night
                                for($i = 0; $i < $Night; $i++) {
                            ?>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <h2>Location <?php echo $i + 1; ?></h2>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="from_location">From Location:</label>
                                    <input type="text" class="form-control" id="from_location" name="from_location[]" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="to_location">To Location:</label>
                                    <input type="text" class="form-control" id="to_location" name="to_location[]" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="date_depart">Departure Date:</label>
                                    <input type="date" class="form-control" id="date_depart" name="date_depart[]" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="location_img">Location Image URL:</label>
                                    <input type="text" class="form-control" id="location_img" name="location_img[]" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="description">Description:</label>
                                    <textarea class="form-control" id="description" name="description[]" rows="3" required></textarea>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success" name="add_location">Add Location</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>




