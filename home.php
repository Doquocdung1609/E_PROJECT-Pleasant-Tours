<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <link rel="stylesheet" href="style.css">
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

<section class="home">
    <div class="swiper home-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide slide" style="background:url(https://c4.wallpaperflare.com/wallpaper/136/875/670/5bd32ca961722-wallpaper-preview.jpg) no-repeat">
                <div class="content">
                    <span>explore, discover, travel</span>
                    <h3>travel around the world</h3>
                    <a href="package.php" class="btn">discover more</a>
                </div>
            </div>

            <div class="swiper-slide slide" style="background:url(https://crystalcruises.com/_next/image?url=https%3A%2F%2Fcdn.crystalcruises.com%2Fimages%2Fscp71evy%2Fproduction%2F2c7be8785c7078bdac297b12b0d431e86b72312a-2000x2000.png%3Frect%3D0%2C207%2C2000%2C1586%26w%3D1000%26h%3D793%26auto%3Dformat&w=1440&q=75) no-repeat">
                <div class="content">
                    <span>explore, discover, travel</span>
                    <h3>discover the new place</h3>
                    <a href="package.php" class="btn">discover more</a>
                </div>
            </div>

            <div class="swiper-slide slide" style="background:url(https://crystalcruises.com/_next/image?url=https%3A%2F%2Fcdn.crystalcruises.com%2Fimages%2Fscp71evy%2Fproduction%2F4c93461e073ccd7bf18b0919f1c8cb37f0e64cb6-2992x2992.jpg%3Frect%3D0%2C310%2C2992%2C2373%26w%3D1000%26h%3D793%26auto%3Dformat&w=1440&q=75) no-repeat">
                <div class="content">
                    <span>explore, discover, travel</span>
                    <h3>make your tour worthwhile</h3>
                    <a href="package.php" class="btn">discover more</a>
                </div>
            </div>
        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

    </div>

</section>








<!-- home section end -->





<!-- service start -->
<section class="services">

<h1 class="heading-title"> Our services </h1>

<div class="box-container">
    <div class="box">
        <img width="64" height="64" src="https://img.icons8.com/wired/64/FFFFFF/mountain.png" alt="mountain"/>
        <a href="package.php?id=Mountain"><h3>MOUNTAIN</h3></a>
    </div>
    <div class="box">
        <img width="64" height="50" src="https://img.icons8.com/ios/50/FFFFFF/beach.png" alt="beach"/>
        <a href="package.php?id=Beach"><h3>BEACH</h3></a>
    </div>
    <div class="box">
        <img src="https://img.icons8.com/glyph-neue/64/FFFFFF/adventure.png" alt="adventure"/>
        <a href="package.php?id=Adventure"><h3>ADVENTURE</h3></a>
    </div>
    <div class="box">
        <img src="https://img.icons8.com/ios/50/FFFFFF/campfire.png" alt="campfire"/>
        <a href="package.php?id=Campfire"><h3>CAMPFIRE</h3></a>
    </div>
    <div class="box">
        <img src="https://img.icons8.com/ios-filled/50/FFFFFF/trekking.png" alt="trekking"/>        
        <a href="package.php?id=Trekking"><h3>TREKKING</h3></a>
    </div>
    <div class="box">
        <img src="https://img.icons8.com/dotty/80/FFFFFF/church.png" alt="church"/>
        <a href="package.php?id=Religious"><h3>RELIGIOUS</h3></a>
    </div>
</div>

</section>




<!-- service end -->


<!-- home about section start -->
<section class="home-about">
    <div class="image">
        <img src="https://crystalcruises.com/_next/image?url=https%3A%2F%2Fcdn.crystalcruises.com%2Fimages%2Fscp71evy%2Fproduction%2F9a3236f4ed68c4d565d964ade0e79187298b2d62-4000x2667.jpg%3Frect%3D1090%2C0%2C2910%2C2667%26w%3D1920%26auto%3Dformat&w=1920&q=75" alt="">
    </div>

    <div class="content">
        <h3>Welcome to Go Tour</h3>
        <p>Your premier destination for unforgettable travel experiences. At Go Tour, we're passionate about exploring the world and creating memories that last a lifetime.
At Go Tour, we believe in sustainable tourism practices that respect local cultures and environments. We work closely with local communities to ensure that our tours benefit both travelers and the destinations they visit.
        <br>
        <a href="about.php" class="btn">read more</a>
    </div>
</section>
<!-- home about section end -->



<!-- home package section start -->

<section class="home-packages">

    <h1 class="heading-title">our packages</h1>
    <div class="box-container">
    <?php 
        require_once'index.php';
        $datalist = $conn->prepare("SELECT Package_name, From_location, To_location, Package_img, Depart, Arrive, Night, Price, Hotel, package_id FROM package_detail GROUP BY Package_ID HAVING COUNT(Package_ID) < 3 LIMIT 3");
        $datalist->execute();
        $packages = $datalist->fetchAll(PDO::FETCH_ASSOC);
        foreach ($packages as $pack) {
            echo '
                <div class="box">
                    <div class="image">
                        <img src="' . $pack['Package_img'] . '" alt="">
                    </div>
                    <div class="content">
                        <h2>' . $pack['Package_name'] . '</h2>
                        <h3>' . $pack['From_location'] . ' -> ' . $pack['To_location'] . '</h3>
                        <p>' . $pack['Night'] . ' NIGHTS</p>
                        <div class="time">
                            <div class="time-detail">
                                <label><b>DEPART</b></label>
                                <p>' . $pack['Depart'] . '</p>
                            </div>
                            <div class="time-detail">
                                <label><b>ARRIVE</b></label>
                                <p>' . $pack['Arrive'] . '</p>
                            </div>
                        </div>
                        <p><b> FARES FROM $' . $pack['Price'] . ' PER GUEST </b></p>
                        <label>HOTEL</label>
                        <p class="bottom-content"><b>' . $pack['Hotel'] . '</b></p>
                    </div>
                    <a href="detail.php?id=' . $pack['package_id'] . '" class="btn">Detail</a>
                </div>
            ';
        }
    ?>


       

        

    </div>

    <div class="load-more"><a href="package.php" class="btn">load more</a></div>

</section>


<!-- home package section end -->


<!-- home offer section start -->

<section class="home-offer">
    <div class="content">
        <h3>up to 50% off</h3>
        <p>DEAL HOT FOR EARLY BIRD</p>
        <a href="book.php" class="btn">Book now</a>
    </div>
</section>

















<!-- home offer section end -->














 
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
    duration: 1000,
    offset: 90,
});
  </script>
</body>
</html>