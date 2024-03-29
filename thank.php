<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BOOK</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="popup.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
    <link rel="stylesheet" href="https://unpkg.com/swiper@07/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css"/>

<body>
<!-- header start -->
<?php
    require_once'header.php';   
?>
<!-- header end -->
<section class="thank">
            <div class="popup" id="thank">
                <h2>Thank You!</h2>
                <p>Your tour has been successfully submitted.</p><br>
                <p>Contact us via our hotline if you have any questions !</p>
                <button type="button" id="ok-btn">OK</button>
            </div>
    </div>
</section>

<script>
        setTimeout(function() {
            window.location.href = 'home.php';
        }, 5000);

  document.getElementById('ok-btn').addEventListener('click', function() {
    window.location.href = 'home.php';
  });
  
</script>

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
</head>
</html>