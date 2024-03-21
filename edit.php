<?php
// Include your database connection or any necessary files
include_once('index.php');

// Check if an ID is provided in the URL
if(isset($_GET['id']) && !empty($_GET['id'])) {
    $id = $_GET['id'];

    // Fetch the data from the database based on the provided ID
    $stmt = $conn->prepare("SELECT * FROM users WHERE id = ?");
    $stmt->execute([$id]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if(!$user) {
        // Handle the case where the user with the provided ID doesn't exist
        echo "User not found!";
        exit();
    }
} else {
    // Handle the case where no ID is provided in the URL
    echo "ID not provided!";
    exit();
}

// Check if the form is submitted
if(isset($_POST['update'])) {
    $fullname = $_POST['fullname'];

    // Update the user's data in the database
    $stmt = $conn->prepare("UPDATE users SET username = ? WHERE id = ?");
    $stmt->execute([$fullname, $id]);

    // Redirect to the view page after successful update
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
                                <label>Full Name</label>
                                <input required type="text" name="fullname" value="<?php echo $user['username']; ?>">
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