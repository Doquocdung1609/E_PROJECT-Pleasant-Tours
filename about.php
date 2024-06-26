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
        Welcome to Go Tour, your premier destination for unforgettable travel experiences. At Go Tour, we're passionate about exploring the world and creating memories that last a lifetime.
        With years of experience in the travel industry, our team is dedicated to providing you with exceptional service and curated tours that cater to your every need. Whether you're seeking adventure in exotic landscapes, cultural immersion in vibrant cities, or relaxation on pristine beaches, we have the perfect itinerary for you.    
        </p>

        <p>
        At Go Tour, we believe in sustainable tourism practices that respect local cultures and environments. We work closely with local communities to ensure that our tours benefit both travelers and the destinations they visit.
        Join us on a journey of discovery and adventure. Explore the world with confidence, knowing that you're in the hands of passionate experts who are committed to making your travel dreams a reality.
        </p>
</div>
</section>


<section class="contact">
    <div class="address" id="address">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.7404208300463!2d105.84755407510447!3d21.00303998063989!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac748cd9d447%3A0xaf1371c17f07550c!2zMTkgUC4gTMOqIFRoYW5oIE5naOG7iywgQuG6oWNoIE1haSwgSGFpIELDoCBUcsawbmcsIEjDoCBO4buZaSwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1711357962527!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>        
            <div class="contact-detail">
                <h1>CONTACT WITH US</h1>
                <a href="#"><i class="fas fa-map"></i>Address company: 19 P. Lê Thanh Nghị, Bạch Mai, Hai Bà Trưng, Hà Nội, Việt Nam</a>
                <div class="email"><a href="#" id="email"> <i class="fas fa-envelope"></i>Contact us via email</a></div>
                <a href="#"> <i class="fas fa-phone "></i>+123-456-789</a>
                <a href="#"> <i class="fas fa-phone"></i>+110-062-005</a>
                <a href="#"> <i class="fab fa-facebook-f"></i> FACEBOOK </a>
                <a href="#"> <i class="fab fa-twitter"></i> TWITTER </a>
                <a href="#"> <i class="fab fa-instagram"></i> INSTAGRAM </a>
                <a href="#"> <i class="fab fa-linkedin"></i> LINKEDIN </a>

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
<script src="script.js"></script>
<script>
  AOS.init({
        duration: 500,
        offset: 90,
    });

// Call the function to fetch user's location when the page loads
window.onload = function() {
    fetchUserLocation();
};

document.getElementById("email").addEventListener("click", function(event) {
    event.preventDefault(); // Prevent default action of link click

    // Replace the following line with the company's email address
    let companyEmail = "doquocdung1609@gmail.com";

    // Invoke local mail client with pre-filled email address
    window.location.href = "mailto:" + companyEmail;
});
  </script>
</body>
</html>