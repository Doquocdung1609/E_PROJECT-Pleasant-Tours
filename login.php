<?php
include_once('index.php');
if(!empty($_POST)){
try {
    // Lấy dữ liệu từ form
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Tạo câu truy vấn sử dụng PDO
    $stmt = $conn->prepare("SELECT * FROM admin WHERE Email = :email AND Password = :password");
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $password);
    $stmt->execute();

    // Đếm số hàng trả về từ câu truy vấn
    $count = $stmt->rowCount();

    // Nếu có dữ liệu tương ứng, chuyển hướng đến trang Dashboard.php
    if ($count == 1) {
        header("Location: Dashboard.php");
        exit();
    } else {
        header("Location: Loginfail.php");
    }
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
}
// Đóng kết nối
$conn = null;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
    <link rel="stylesheet" href="https://unpkg.com/swiper@07/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">


</head>
<body>
<!-- header start -->

<?php
    require_once'header.php';

?>
<!-- header end -->

<!-- home section start -->

<section class="login">
  <div class="container" id="container"> 

    <!-- Sign Up Form -->
    <div class="form-container sign-up-container">
      <form action="register.php" method="POST">
        <h1>Create Account</h1>
        <div class="social-container">
          <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
          <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
          <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
        </div>
        <span>or Use Your Email For Registration</span>
        <input type="text" id="name" name="name" placeholder="Name" required />
        <input type="email" id="email" name="email" placeholder="Email" required />
        <input type="password" id="password" name="password" placeholder="Password" required />
        <button type="submit">Sign Up</button>
      </form>
    </div>

    <!-- Sign in Form -->
    <div class="form-container sign-in-container">
      <form action="" method="POST">
        <h1>Sign in</h1>
        <div class="social-container">
          <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
          <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
          <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
        </div>
        <span>or Use Your Account</span>
        <input type="email" id="email" name="email" placeholder="Email" required />
        <input type="password" id="password" name="password" placeholder="Password" required />
        <button type="submit">Sign In</button>
      </form>
    </div>

    <!-- Card Slider -->
    <div class="overlay-container">
      <div class="overlay">
        <div class="overlay-panel overlay-left">
          <h1>Welcome Back!</h1>
          <p>To keep connected with us please login with your personal info</p>
          <button class="ghost" id="signIn">Sign In</button>
        </div>
        <div class="overlay-panel overlay-right">
          <h1>Hello, Explorer!</h1>
          <p>Enter your personal details and start journey with us</p>
          <button class="ghost" id="signUp">Sign Up</button>
        </div>
      </div>
    </div>
  </div>

  </section>















 
<!-- footer start -->

<?php
    require_once'footer.php';
?>





<!-- footer end -->















<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://unpkg.com/swiper@07/swiper-bundle.min.js"></script>
<script src="login.js"></script>
<script>
   AOS.init({
    duration: 500,
    offset: 90,
    once: false // Set this to false to trigger animations every time the element becomes visible
});
  </script>
</body>
</html>