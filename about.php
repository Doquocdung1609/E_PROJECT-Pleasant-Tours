<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABOUT</title>
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
<section class="about">
    <div class="image">
        <img src="https://crystalcruises.com/_next/image?url=https%3A%2F%2Fcdn.crystalcruises.com%2Fimages%2Fscp71evy%2Fproduction%2F9a3236f4ed68c4d565d964ade0e79187298b2d62-4000x2667.jpg%3Frect%3D1090%2C0%2C2910%2C2667%26w%3D1920%26auto%3Dformat&w=1920&q=75" alt="">
    </div>

    <div class="content">
        <h3>Welcome to Go Tour</h3>
        <p>
        Welcome to [Tour Company Name], your premier destination for unforgettable travel experiences. At [Tour Company Name], we're passionate about exploring the world and creating memories that last a lifetime.
        With years of experience in the travel industry, our team is dedicated to providing you with exceptional service and curated tours that cater to your every need. Whether you're seeking adventure in exotic landscapes, cultural immersion in vibrant cities, or relaxation on pristine beaches, we have the perfect itinerary for you.    
        </p>

        <p>
        At [Tour Company Name], we believe in sustainable tourism practices that respect local cultures and environments. We work closely with local communities to ensure that our tours benefit both travelers and the destinations they visit.
        Join us on a journey of discovery and adventure. Explore the world with confidence, knowing that you're in the hands of passionate experts who are committed to making your travel dreams a reality.
        </p>
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
<script src="script.js"></script>
<script>
  AOS.init({
        duration: 500,
        offset: 90,
    });
  </script>
</body>
</html>