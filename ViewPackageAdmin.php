
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
        <button  class="btn btn-dark bg-dark " type="button"  data-toggle="dropdown" >
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
  
</div>
</nav>

<div class="container-fluid px-4">
    <h4 class="mt-4">Package</h4>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
        <li class="breadcrumb-item">Package</li>
    </ol>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>View Package</h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Img</th>
                                <th>Night</th>
                                <th>From_location</th>
                                <th>To_location</th>
                                <th>Depart</th>
                                <th>Arrive</th>
                                <th>Price</th>
                                <th>Type</th>
                                <th>Hotel</th>
                                <th>Package Detail</th>
                                <th>edit</th>
                                <th>delete</th>
                            </tr>
                        </thead>
                        
                        <?php 
                            include_once('index.php');
                            $datalist = $conn->prepare("SELECT Package_ID,Package_name,Package_img,Night,From_location,To_location,Depart,Arrive,Price,Type,Hotel FROM package_detail");
                            $datalist->execute();
                            $users = $datalist->fetchAll(PDO::FETCH_ASSOC);
                            foreach ($users as $user) {
                                echo "
                                <tr>
                                    <td>" . $user['Package_ID'] . "</td>
                                    <td>" . $user['Package_name']."</td>
                                    <td>  <img style='width: 300px; height: 200px; ' src='" . $user['Package_img'] . "' alt=''> </td>                                    <td>" . $user['Night'] . "</td>
                                    <td>" . $user['From_location'] . "</td>
                                    <td>" . $user['To_location'] . "</td>
                                    <td>" . $user['Depart'] . "</td>
                                    <td>" . $user['Arrive'] . "</td>
                                    <td>" . $user['Price'] . "</td>
                                    <td>" . $user['Type'] . "</td>
                                    <td>" . $user['Hotel'] . "</td>
                                    <td><a href='Viewpackage_detail.php?id=".$user['Package_ID']."'><button class='btn btn-success'>DETAIL</button></a></td>
                                    <td><a href='edit.php?id=".$user['Package_ID']."'><button class='btn btn-warning'>EDIT</button></a></td>
                                    <td><a href='delete.php?id=".$user['Package_ID']."'><button class='btn btn-danger'>DELETE</button></a></td>     
                                </tr>";
                            };
                        ?>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>