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
    <div class="image">
        <img src="https://crystalcruises.com/_next/image?url=https%3A%2F%2Fcdn.crystalcruises.com%2Fimages%2Fscp71evy%2Fproduction%2F9a3236f4ed68c4d565d964ade0e79187298b2d62-4000x2667.jpg%3Frect%3D1090%2C0%2C2910%2C2667%26w%3D1920%26auto%3Dformat&w=1920&q=75" alt="">
    </div>

    <div class="content">
        <h2>AUSTRALIA & NEW ZEALAND</h2>
        <h3>Auckland Fremantle (Perth)</h3>
        <p><b>18 NIGHTS</b></p>
        <label>DATES </label>
        <p><b>MAR 09, 2024  MAR 27, 2024</b></p>
        <label>FARES FROM </label>
        <p><b>$11,700  PER GUEST *</b></p>
        <label>SHIP </label>
        <p><b>CRYSTAL SERENITY</b></p>
        

    </div>

</section>


<section class="table">

    <h1>VOYAGE ITINERARY</h1>


<div class="row">
    <div class="col-sm-3 p-5 my-5 border" >
        <div class="container mt-3">
            <p><b>15 Night</b></p>
            <label>DESTINATION</label>
            <p><b>SINGAPORE -> MUMBAI</b></p>
            
            <label>DATES</label>
            <p><b>MAR 12,2024-> MAR27,2024</b></p>
        </div>
    </div>
    <div class="col-sm-9 p-5 my-5 border">
        <table class="table detail">
            <tbody>
            <tr>
                <td rowspan="2" style="margin:0; padding:29px">01</td>
                <td colspan="3">Singapore</td>
                <td rowspan="2" style="margin:0; padding:29px">MAR 12,2024</td>
                <td rowspan="2" style="margin:0; padding:29px">Over Night</td>
                <td rowspan="2" style="margin:0; padding:29px"></td>
                <td rowspan="2" style="margin:0; padding:29px">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-plus" viewBox="0 0 17 17">
                    <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
                    </svg>
                </td>
            </tr>
            <tr>
                <td colspan="3">Singapore</td> 
            </tr>
            </tbody>
        </table>
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
    once: false // Set this to false to trigger animations every time the element becomes visible
});
  </script>
</body>
</html>