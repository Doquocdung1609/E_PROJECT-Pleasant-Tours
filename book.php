<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BOOK</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
    <link rel="stylesheet" href="https://unpkg.com/swiper@07/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css"/>


</head>
<body>
<!-- header start -->

<?php
    require_once'header.php';

?>



<!-- header end -->

<section class="booking" style="background:url(https://crystalcruises.com/_next/image?url=https%3A%2F%2Fcdn.crystalcruises.com%2Fimages%2Fscp71evy%2Fproduction%2F12d8266c26f2c2179d8222f3b42d870d33bd7b75-3725x3725.jpg%3Frect%3D0%2C386%2C3725%2C2954%26w%3D1000%26h%3D793%26auto%3Dformat&w=1440&q=75) no-repeat">
<div class="heading-title">
    <h1>Book your trip!</h1>
</div>

    <form action="book_form.php" method="POST" class="book-form">

        <div class="flex">
            <div class="inputBox">
                <span>Name:</span>
                <input required type="text" placeholder="Enter your name..." name="name">
            </div>
            <div class="inputBox">
                <span>Email:</span>
                <input required type="email" placeholder="Enter your email..." name="email">
            </div>
            <div class="inputBox">
                <span>Phone:</span>
                <input required type="number" placeholder="Enter your phone number..." name="phone">
            </div>
            <div class="inputBox">
                <span>Address:</span>
                <input required type="text" placeholder="Enter your address..." name="address">
            </div>
            <div class="inputBox">
                <span>Where to:</span>
                <input required type="text" placeholder="Where you want to visit..." name="location">
            </div>
            <div class="inputBox">
                <span>How many people:</span>
                <input required type="number" placeholder="Number of guests..." name="guests">
            </div>
            <div class="inputBox">
                <span>Arrival:</span>
                <input required type="date" name="arrivals"  max="2025-12-31">
            </div>
            <div class="inputBox">
                <span>Leaving:</span>
                <input required type="date" name="leaving"  max="2025-12-31">
            </div>
        </div>
        <input type="submit" value="submit" class="btn" name="send">
    </form>
</section>

<!-- footer start -->


<?php
    require_once'footer.php';
?>

<!-- footer end -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://unpkg.com/swiper@07/swiper-bundle.min.js"></script>
<script src="script.js"></script>
<script>
    AOS.init({
        duration: 800,
        offset: 150,
    });
  </script>
</body>
</html>