<!DOCTYPE html>
<html lang="en">
<head><!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!--====== Title ======-->
    <title>Edubin - LMS Education HTML Template</title>
    
    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="images/favicon.png" type="image/png">

    <!--====== Slick css ======-->
    <link rel="stylesheet" href="css/slick.css">

    <!--====== Animate css ======-->
    <link rel="stylesheet" href="css/animate.css">
    
    <!--====== Nice Select css ======-->
    <link rel="stylesheet" href="css/nice-select.css">
    
    <!--====== Nice Number css ======-->
    <link rel="stylesheet" href="css/jquery.nice-number.min.css">

    <!--====== Magnific Popup css ======-->
    <link rel="stylesheet" href="css/magnific-popup.css">

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!--====== Fontawesome css ======-->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    
    <!--====== Default css ======-->
    <link rel="stylesheet" href="css/default.css">
    
    <!--====== Style css ======-->
    <link rel="stylesheet" href="css/style.css">
    
    <!--====== Responsive css ======-->
    <link rel="stylesheet" href="css/responsive.css">
  

  <style>
    
    /* * {
      box-sizing: border-box;
    }

    body {
      font-family: 'Nunito', sans-serif;
      margin: 0;
      background-color: #f0f0f0;
    } */

    .containerG {
      width: 100%;
      max-width: 1200px;
      margin: 80px auto;
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
      justify-content: center;
    }

    .project {
      width: 215px;
      height: 215px;
      border-radius: 6px;
      overflow: hidden;
      cursor: pointer;
    }

    .project img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: transform 0.3s ease;
    }

    .project:hover img {
      transform: scale(1.05);
    }

    .overlay {
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: #fff;
      display: none;
      justify-content: center;
      align-items: center;
      z-index: 1000;
    }

    .overlay-inner {
      position: relative;
      max-width: 100%;
      max-height: 100%;
    }

    .overlay-inner img {
      max-width: 100%;
      max-height: 100%;
      display: block;
      border-radius: 10px;
    }

    .close {
      position: absolute;
      top: -10px;
      right: -10px;
      background: #fff;
      border: none;
      font-size: 22px;
      border-radius: 50%;
      width: 32px;
      height: 32px;
      cursor: pointer;
      line-height: 28px;
      /* background-color: #fff; */
    }

    @media(max-width: 600px) {
      .project {
        width: 140px;
        height: 140px;
      }
    }
  </style>
</head>
<body>

    <!--====== HEADER PART START ======-->
    
   <?php include_once 'header.php'; ?>
    
    <!--====== HEADER PART ENDS ======-->

  <div class="containerG">
    <div class="project" onclick="openOverlay(this)">
      <img src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/d11.png" alt="Project 1">
    </div>

    <div class="project" onclick="openOverlay(this)">
      <img src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/d11.png" alt="Project 2">
    </div>

    <div class="project" onclick="openOverlay(this)">
      <img src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/d11.png" alt="Project 3">
    </div>

    <div class="project" onclick="openOverlay(this)">
      <img src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/d11.png" alt="Project 4">
    </div>

    <div class="project" onclick="openOverlay(this)">
      <img src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/d11.png" alt="Project 4">
    </div>


    <div class="project" onclick="openOverlay(this)">
      <img src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/d11.png" alt="Project 4">
    </div>


    <div class="project" onclick="openOverlay(this)">
      <img src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/d11.png" alt="Project 4">
    </div>

    <div class="project" onclick="openOverlay(this)">
      <img src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/d11.png" alt="Project 4">
    </div>

    <div class="project" onclick="openOverlay(this)">
      <img src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/d11.png" alt="Project 4">
    </div>

    <div class="project" onclick="openOverlay(this)">
      <img src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/d11.png" alt="Project 4">
    </div>

    <!-- <div class="project" onclick="openOverlay(this)">
      <img src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/d25.png" alt="Project 4">
    </div>

    <div class="project" onclick="openOverlay(this)">
      <img src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/d25.png" alt="Project 4">
    </div> -->



  </div>

  <!-- Overlay -->
  <div class="overlay" id="overlay" onclick="closeOverlay(event)">
    <div class="overlay-inner">
      <button class="close" onclick="closeOverlay(event)">✕</button>
      <img src="" alt="Large View" id="overlayImg">
    </div>
  </div>

  <script>
    function openOverlay(element) {
      const imgSrc = element.querySelector('img').src;
      const overlay = document.getElementById('overlay');
      const overlayImg = document.getElementById('overlayImg');

      overlayImg.src = imgSrc;
      overlay.style.display = 'flex';
    }

    function closeOverlay(event) {
      const overlay = document.getElementById('overlay');
      const overlayInner = document.querySelector('.overlay-inner');

      // Close only if clicked outside the image or on close button
      if (event.target === overlay || event.target.classList.contains('close')) {
        overlay.style.display = 'none';
      }
    }
  </script>
<!--====== FOOTER PART START ======-->
    
    <?php include_once 'footer.php'; ?>
    
    <!--====== FOOTER PART ENDS ======-->
</body>
</html>

