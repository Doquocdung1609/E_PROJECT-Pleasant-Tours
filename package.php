<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PACKAGES</title>
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

<div class="heading" style="background:url(https://crystalcruises.com/_next/image?url=https%3A%2F%2Fcdn.crystalcruises.com%2Fimages%2Fscp71evy%2Fproduction%2F82f7c08f19defb6183602c340bf60d4dc69138a5-3032x3032.jpg%3Frect%3D0%2C314%2C3032%2C2404%26w%3D1000%26h%3D793%26auto%3Dformat&w=1440&q=75) no-repeat">
    <h1>PACKAGE</h1>
</div>

<!-- package section start -->

<section class="packages">

    <h1 class="heading-title">our packages</h1>
    <div class="box-container">
    <?php 
        require_once 'index.php';
        if(isset($_GET['id'])) {
            $type = $_GET['id'];
            $datalist = $conn->prepare("SELECT Package_name,From_location,To_location, Package_img, Depart, Arrive, Night, Price, Hotel, package_id FROM package_detail WHERE Type = :type");
            $datalist->bindParam(':type', $type); 
        } else {
            $datalist = $conn->prepare("SELECT Package_name,From_location,To_location, Package_img, Depart, Arrive, Night, Price, Hotel, package_id FROM package_detail");
        }

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
    <div class="load-more"><span class="btn">load more</span></div>
    

</section>








<!-- package section end -->






















 
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