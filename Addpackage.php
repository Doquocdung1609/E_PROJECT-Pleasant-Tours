
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
    
</div>
</nav>
<div class="container">
    <div class="row">
        <div class="col-md 12 mt-4">
            <div class="card">
                <div class="card-header">
                    <h3>Insert data into database
                        <a href="Dashboard.php" class="btn btn-danger float-end">Back</a>
                    </h3>
                </div>
                <div class="card-body">
                    <form action="add.php" method="POST">
                        <div class="row">
                        <div class="col-sm-2">Name</div>
                        <div class="col-sm-4"><input type="text" name="package_name" value=""></div>
                        
                        <div class="col-sm-2">Img</div>
                        <div class="col-sm-4"><input type="text" name="package_img" value=""></div> 
                        
                        <div class="col-sm-2">From_location</div>
                        <div class="col-sm-4"><input type="text" name="From_location" value=""></div>
                        
                        <div class="col-sm-2">To_Location</div>
                        <div class="col-sm-4"><input type="text" name="To_location" value=""></div>
                            
                        <div class="col-sm-2">Depart</div>
                        <div class="col-sm-4"><input type="date" name="Depart" value=""></div> 

                        <div class="col-sm-2">Arrive</div>
                        <div class="col-sm-4"><input type="date" name="Arrive" value=""></div> 

                        <div class="col-sm-2">Price</div>
                        <div class="col-sm-4"><input type="text" name="Price" value=""></div>
                        
                        <div class="col-sm-2">Type</div>
                        <div class="col-sm-4"><input type="text" name="Type" value=""></div> 

                        <div class="col-sm-2">Night</div>
                        <div class="col-sm-4"><input type="number" name="Night" value="" ></div> 

                        <div class="col-sm-2">Hotel</div>
                        <div class="col-sm-4"><input type="text" name="Hotel" value=""></div> 
                        <div class="form-group">
                            <button type="submit" value="submit" name="add" class="btn btn-success">Add</button>
                            <button type="reset" class="btn btn-warning">Reset</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

