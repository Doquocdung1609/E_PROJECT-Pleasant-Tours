<?php
include_once('index.php');

// Check if an ID is provided in the URL
if(isset($_GET['id']) && !empty($_GET['id'])) {
    $id = $_GET['id'];

    // Fetch the data from the database based on the provided ID
    $stmt = $conn->prepare("SELECT * FROM package_detail WHERE Package_ID = :id");
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if(!$user) {
        // Handle the case where the package with the provided ID doesn't exist
        echo "Package not found!";
        exit();
    }
} else {
    // Handle the case where no ID is provided in the URL
    echo "ID not provided!";
    exit();
}

// Check if the form is submitted
if(isset($_POST['update'])) {
    // Sanitize and validate input
    $id = $_GET['id'];
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

    // Update the package's data in the database
    $stmt = $conn->prepare("UPDATE package_detail SET Package_name = :packageName, Package_img = :package_img, Night = :Night, From_location = :From_location, To_location = :To_location, Depart = :Depart, Arrive = :Arrive,Type = :Type, Price = :Price, Hotel = :Hotel WHERE Package_ID = :id");
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
    $stmt->bindParam(':id', $id);
    $stmt->execute();

    // Redirect to the package view page after updating
    header('Location: ViewPackageAdmin.php');
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Site</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</head>
<body>

</body >
</html>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<div class="container-fluid">
    <div class="dropdown">
        <button  class="btn btn-dark bg-dark" type="button"  data-toggle="dropdown" >
            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="25" fill="currentColor" class="bi bi-list" viewBox="0 2 15 15">
                <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>
            </svg>  
        </button>
        <ul class="dropdown-menu ">
            <li><a class="dropdown-item" href="Dashboard.php">Dasboard</a></li>
            <li class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="ViewPackageAdmin.php">View Package</a></li>
            <li><a class="dropdown-item" href="Addpackage.php">Add Package</a></li>
            <li><a class="dropdown-item" href="customer.php">Add Customer</a></li>
        </ul>
    </div>  
    </div>
    <form class="d-flex" >
      <input class="form-control me-2" type="search" placeholder="Search for" aria-label="Search" style="margin-right:15px">
      <button class="btn btn-outline-success" type="submit" style="margin-right:15px">Search</button> 
    </form>
</div>
</nav>

<div class="container">
    <div class="row">
        <div class="col-md 12 mt-4">
            <div class="card">
                <div class="card">
                    <div class="card-header">
                        <h3>Edit User
                            <a href="Dashboard.php" class="btn btn-danger float-end">Back</a>
                        </h3>
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="mb-3">
                                <label>Name</label>
                                <input type="text" name="package_name" value="<?php echo $user['Package_name']; ?>"><br>
                            </div>
                            <div class="mb-3">
                                <label>Img</label>
                                <input type="text" name="package_img" value="<?php echo $user['Package_img']; ?>"><br>
                            </div>
                            <div class="mb-3">
                                <label>Night</label>
                                <input type="number" name="Night" value="<?php echo $user['Night']; ?>"><br>
                            </div>
                            <div class="mb-3">
                                <label>From_location</label>
                                <input type="text" name="From_location" value="<?php echo $user['From_location']; ?>"><br>
                            </div>
                            <div class="mb-3">
                                <label>To_Location</label>
                                <input type="text" name="To_location" value="<?php echo $user['To_location']; ?>"><br>
                            </div>
                            <div class="mb-3">
                                <label>Depart</label>
                                <input type="date" name="Depart" value="<?php echo $user['Depart']; ?>"><br>
                            </div>
                            <div class="mb-3">
                                <label>Arrive</label>
                                <input type="date" name="Arrive" value="<?php echo $user['Arrive']; ?>"><br>
                            </div>
                            <div class="mb-3">
                                <label>Price</label>
                                <input type="number" name="Price" value="<?php echo $user['Price']; ?>"><br>
                            </div>
                            <div class="mb-3">
                                <label>Type</label>
                                <input type="text" name="Type" value="<?php echo $user['Type']; ?>"><br>
                            </div>
                            <div class="mb-3">
                                <label>Hotel</label>
                                <input type="text" name="Hotel" value="<?php echo $user['Hotel']; ?>"><br>
                            </div>
                            <input type="submit" name="update" value="Update" class="btn btn-success">
                            <a href="ViewPackageAdmin.php" class="btn btn-secondary">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>