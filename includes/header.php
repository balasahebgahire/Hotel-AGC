<?php
$currentPage = basename($_SERVER['PHP_SELF']);
?>


<!--  -->
<style>
  .header-fixed {
    position: sticky;
    top: 0;
    z-index: 1030;
  }

  @media (max-width: 991.98px) {
    .header-fixed {
      position: fixed !important;
      top: 0;
      left: 0;
      right: 0;
      width: 100%;
      z-index: 1030;
    }

    #carouselExampleCaptions {
      padding-top: 120px;
    }
  }
</style>
<!--  -->


<div class="container-fluid p-0">

            <!-- Slider -->
            <div id="carouselExampleCaptions" class="carousel slide">

                  <!-- Menu -->
            <div class="container-fluid p-0 header-fixed">
              <div class="container-fluid bg-dark-top py-1">
                <div class="container py-1">
                    <div class="row">
                        <div class="col-lg-4 col-12 text-center-ctm"><span class="text-white fs-14">Welcome to <b class="font-bold">Hotel AGC</b></span></div>
                        <div class="col-lg-8 col-12">
                            <ul class="list-unstyled d-flex align-items-center justify-content-end mb-0 fs-14 fw-bold text-white gapCustom-4 align-items-center">
                                <li class="d-flex align-items-center fw-normal">
                                  <i class="material-symbols-outlined me-1 fs-6">location_on</i> 
                                  <a href="https://maps.app.goo.gl/Xp9vqLwMDWyYTYFu6" target="_blank" rel="noopener noreferrer" class="text-decoration-none text-white">Find Us</a>
                                </li>
                                <li class="d-flex align-items-center fw-normal"><i class="material-symbols-outlined me-1 fs-6">email</i>hotelagc@gmail.com</li>
                                <li class="d-flex align-items-center fw-normal"><i class="material-symbols-outlined me-1 fs-6">call</i> +917558745740</li>
                            </ul>
                        </div>
                    </div>
                </div>
              </div>

                <div class="container-fluid bg-dark py-2 px-0 m-0">
                  <div class="container">
                  <div class="row">
                    <div class="col-lg-3 col-3">
                      <a href="index.php">
                      <img src="images/logo.png" class="img-fluid" style="max-width: 170px;" alt="Logo" />
                      </a>
                    </div>
                    <div class="col-lg-9 col-9">
                      <!-- Navigation -->
                       <nav class="navbar navbar-expand-lg ">
  <div class="container-fluid p-0 m-0">
    <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">          
           <a class="nav-link <?= $currentPage == 'index.php' ? 'active' : '' ?> text-uppercase"
   href="index.php">
    Home
</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= $currentPage == 'about-us.php' ? 'active' : '' ?> text-uppercase" href="about-us.php">About us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= $currentPage == 'rooms-and-tariff.php' ? 'active' : '' ?> text-uppercase" href="rooms-and-tariff.php">Rooms & Tariff</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= $currentPage == 'food-and-dinning.php' ? 'active' : '' ?> text-uppercase" href="food-and-dinning.php">Food & Dinning</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= $currentPage == 'photos-and-videos.php' ? 'active' : '' ?> text-uppercase" href="photos-and-videos.php"> Photos & videos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= $currentPage == 'meeting-and-events.php' ? 'active' : '' ?> text-uppercase" href="meeting-and-events.php">Meeting & Events</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
                       <!-- Navigation End-->
                    </div>
                  </div>
                </div>
                </div>
            </div>
             <!-- Menu End-->

  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/slide01.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-block">
        <h5 class="fsHeading-50 font-bold fw-bold mb-2">Affordable Luxury Starts Here</h5>
        <p><a href="https://live.ipms247.com/booking/book-rooms-aurangabadgymkhanaclubpvtltd" target="_blank" rel="noopener noreferrer">
          <button type="button" class="btn btn-green">Check Availability</button>
        </a>
        </p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/slide04.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-block">
        <h5 class="fsHeading-50 font-bold fw-bold mb-2">Affordable Luxury Starts Here</h5>
        <p><a href="https://live.ipms247.com/booking/book-rooms-aurangabadgymkhanaclubpvtltd" target="_blank" rel="noopener noreferrer">
          <button type="button" class="btn btn-green">Check Availability</button>
        </a>
</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/slide02.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-block">
        <h5 class="fsHeading-50 font-bold fw-bold mb-2">Affordable Luxury Starts Here</h5>
        <p><a href="https://live.ipms247.com/booking/book-rooms-aurangabadgymkhanaclubpvtltd" target="_blank" rel="noopener noreferrer">
          <button type="button" class="btn btn-green">Check Availability</button>
        </a>
</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/slide05.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-block">
        <h5 class="fsHeading-50 font-bold fw-bold mb-2">Affordable Luxury Starts Here</h5>
        <p><a href="https://live.ipms247.com/booking/book-rooms-aurangabadgymkhanaclubpvtltd" target="_blank" rel="noopener noreferrer">
          <button type="button" class="btn btn-green">Check Availability</button>
        </a>
</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/slide03.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-block">
        <h5 class="fsHeading-50 font-bold fw-bold mb-2">Affordable Luxury Starts Here</h5>
        <p><a href="https://live.ipms247.com/booking/book-rooms-aurangabadgymkhanaclubpvtltd" target="_blank" rel="noopener noreferrer">
          <button type="button" class="btn btn-green">Check Availability</button>
        </a>
</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
            </div>
            <!-- Slider End -->
        </div>