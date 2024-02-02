<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Paradise - ABOUT</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <?php require('include//links.php'); ?>
  <style>
    .box {
      border-top-color: var(--teal) !important;
    }
  </style>
</head>

<body class="bg-light">

  <?php require('include/header.php'); ?>

  <div class="my-5 px-4">
    <h2 class="fw-bold text-center">ABOUT US</h2>
    <div class="h-line bg-dark"></div>
    <p class="text-center mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit.
      Exercitationem laudantium <br> consequuntur culpa nobis id dolor,
      eius iure impedit consequatur aut.</p>
  </div>

  <div class="container">
    <div class="row justify-content-between align-items-center">
      <div class="col-lg-6 col-md-5 mb-4 order-lg-1 order-md-1 order-2">
        <h3 class="mb-3">Lorem ipsum dolor sit.</h3>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit.
          Rem aliquam ipsa aspernatur eligendi expedita vel quos
          iste id repellendus neque. Lorem ipsum dolor sit amet
          consectetur adipisicing elit. Harum vitae quod animi
          vel aliquam labore quibusdam iure! Tenetur, perspiciatis amet!
        </p>
      </div>
      <div class="col-lg-5 col-md-5 mb-4 order-lg-2 order-md-2 order-1">
        <img src="images/about/about.jpg" class="w-100 rounded">
      </div>
    </div>
  </div>

  <div class="container mt-5">
    <div class="row">
      <div class="col-lg-3 col-md-6 mb-4 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
          <img src="images/about/hotel.svg" width="70px">
          <h4 class="mt-3">100+ ROOMS</h4>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-4 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
          <img src="images/about/customers.svg" width="70px">
          <h4 class="mt-3">200+ CUSTOMER</h4>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-4 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
          <img src="images/about/rating.svg" width="70px">
          <h4 class="mt-3">5000+ REVIEWS</h4>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-4 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
          <img src="images/about/staff.svg" width="70px">
          <h4 class="mt-3">200+ ROOMS</h4>
        </div>
      </div>
    </div>
  </div>

  <h3 class="my-5 fw-bold text-center">MANAGEMENT TEAM</h3>
  <div class="container px-4">
    <div class="swiper mySwiper">
      <div class="swiper-wrapper mb-5">
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="images/about/team.jpg" class="w-100">
          <h5 class="mt-2">Random Name</h5>
        </div>
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="images/about/team.jpg" class="w-100">
          <h5 class="mt-2">Random Name</h5>
        </div>
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="images/about/team.jpg" class="w-100">
          <h5 class="mt-2">Random Name</h5>
        </div>
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="images/about/team.jpg" class="w-100">
          <h5 class="mt-2">Random Name</h5>
        </div>
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="images/about/team.jpg" class="w-100">
          <h5 class="mt-2">Random Name</h5>
        </div>
      </div>
      <div class="swiper-pagination"></div>
    </div>
  </div>

  <?php require('include/footer.php'); ?>

  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <script>
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 4,
      spaceBetween: 40,
      pagination: {
        el: ".swiper-pagination",
      },
      breakpoints: {
        320: {
          slidesPerView: 1,
        },
        640: {
          slidesPerView: 2,
        },
        768: {
          slidesPerView: 3,
        },
        1024: {
          slidesPerView: 4,
        }
      }
    });
  </script>
</body>

</html>