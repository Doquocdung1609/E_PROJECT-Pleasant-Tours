<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DETAIL</title>
    <link rel="stylesheet" href="detail.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
    <link rel="stylesheet" href="https://unpkg.com/swiper@07/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</head>
<body>
<!-- header start -->

<?php
    require_once'header.php';

?>
<!-- header end -->

<!-- home section start -->

<section class="top">
    <?php
    require_once 'index.php';
    if(isset($_GET['id']) && !empty($_GET['id'])) {
        $package_id = $_GET['id'];
        $datalist = $conn->prepare("SELECT * FROM package_detail WHERE Package_ID = :package_id");
        $datalist->bindParam(':package_id', $package_id); // corrected parameter name
        $datalist->execute();
        $packages = $datalist->fetchAll(PDO::FETCH_ASSOC);
        
        // Check if any package is found
        if($packages) {
            foreach ($packages as $pack) {
                echo '
                <div class="image">
                    <img src="' . $pack['Package_img'] . '" alt="">
                </div>
                <div class="content">
                    <h2>' . $pack['Package_name'] . '</h2>
                    <p><b>'. $pack['Night'] . ' NIGHTS</b></p>
                    <label>DATES </label>
                    <p><b>' . $pack['Depart'] . ' -> ' . $pack['Arrive'] . '</b></p>
                    <label>FARES FROM </label>
                    <p><b>FARES FROM $' . $pack['Price'] . ' PER GUEST</b></p>
                    <label>HOTEL </label>
                    <p><b>' . $pack['Hotel'] . '</b></p>
                </div>';
                echo' </section>';

                echo'
                <section class="table">;

                    <h1>VOYAGE ITINERARY</h1>';
                echo'
                    <div class="row">
                    <div class="col-sm-3 p-5 my-5 border" >
                        <div class="container mt-3">
                            <p><b>'. $pack['Night'] . ' NIGHTS</b></p>
                            <label>DESTINATION</label>
                            <p><b>' . $pack['From_location'] . ' -> ' . $pack['To_location'] . '</b></p>
                            
                            <label>DATES</label>
                            <p><b>' . $pack['Depart'] . ' -> ' . $pack['Arrive'] . '</b></p>
                        </div>
                    </div>
                    <div class="col-sm-9 p-5 my-5 border">
                ';
            }
        } else {
            echo "No package found with the provided ID.";
        }
    } else {
        echo "Package ID is missing.";
    }
?>



<?php 
require_once 'index.php';

if(isset($_GET['id']) && !empty($_GET['id'])) {
    $package_id = $_GET['id'];
    $datalist = $conn->prepare("SELECT * FROM location_detail WHERE Package_ID = :package_id");
    $datalist->bindParam(':package_id', $package_id);
    $datalist->execute();
    $Location = $datalist->fetchAll(PDO::FETCH_ASSOC);
}

if(isset($Location) && $Location) {
    $i = 0; // Initialize counter
    foreach ($Location as $location) {
        $i++; // Increment counter
        echo '
        <table class="table detail">
            <tr>
                <td rowspan="2" style="margin:0; padding:29px">0'.$i.'</td>
                <td colspan="3">' . $location['From_location'] . '</td>
                <td rowspan="2" style="margin:0; padding:29px">' . $location['Date_depart'] . '</td>
                <td rowspan="2" style="margin:0; padding:29px">Over Night</td>
                <td rowspan="2" style="margin:0; padding:29px"></td>
                <td rowspan="2" style="margin:0; padding:29px">
                    <button onclick="toggleData('.$i.')">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-plus" viewBox="0 0 17 17">
                            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
                        </svg>
                    </button>
                </td>
            </tr>
            <tr>
                <td colspan="3">' . $location['To_location'] . '</td> 
            </tr>
            <tr>
                <td colspan="8">
                <div class="detail-content" id="data'.$i.'" style="display: none;">
                <div class="content-wrapper">
                    <img src="' . $location['Location_img'] . '" alt="">
                    <p>' . $location['Description'] . '</p>
                </div>
            </div>
                </td>
            </tr>
        </table>';
    }
}
?>


    </div>
</div>

</section>








<!-- home section end -->





<!-- service start -->















<!-- home offer section end -->














 
<!-- footer start -->

<?php
    require_once'footer.php';
?>





<!-- footer end -->















<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://unpkg.com/swiper@07/swiper-bundle.min.js"></script>
<script src="detail.js"></script>
<script>
   AOS.init({
    duration: 500,
    offset: 90,
    once: true // Set this to false to trigger animations every time the element becomes visible
});
  </script>
<script>
    function toggleData(index) {
        var dataParagraph = document.getElementById('data' + index);
        if (dataParagraph) {
            if (dataParagraph.style.display === 'none') {
                dataParagraph.style.display = 'block';
            } else {
                dataParagraph.style.display = 'none';
            }
        }
    }
</script>
</body>
</html>

