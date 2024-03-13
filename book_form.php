<!-- <?php
if(isset($_POST['send'])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];
    $location = $_POST["location"];
    $guests = $_POST["guests"];
    $arrivals = $_POST["arrivals"];
    $leaving = $_POST["leaving"];


$conn=mysqli_connect("localhost:3306","root","","project");
mysqli_set_charset($conn,"utf8");

$sql="insert into book (Name,Email,Phone,Address,Where_to,People,Arrival,Leaving) values ('$name','$email','$phone','$address','$location','$guests','$arrivals','$leaving')";

mysqli_query($conn, $sql);

header("location:book.php");
}
else {
    echo 'ERROR! Please try again.';
}

?> -->
<?php
session_start(); 

if(isset($_POST['send'])){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];
    $location = $_POST["location"];
    $guests = $_POST["guests"];
    $arrivals = $_POST["arrivals"];
    $leaving = $_POST["leaving"];

    $conn = new PDO("mysql:host=localhost3306;dbname=project", "root", "");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->exec("SET CHARACTER SET utf8");

    $stmt = $conn->prepare("INSERT INTO book (Name, Email, Phone, Address, Where_to, People, Arrival, Leaving) VALUES ('$name','$email','$phone','$address','$location','$guests','$arrivals','$leaving')");
    $stmt->execute([$name, $email, $phone, $address, $location, $guests, $arrivals, $leaving]);

    header("Location: thank.php");
    exit();
} else {
    echo 'ERROR! Please try again.';
}
?>
