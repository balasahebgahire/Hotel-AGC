<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel AGC</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="images/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
</head>
<body>
    <div id="wrapper">

        <!-- Header -->
        <?php include 'includes/header.php'; ?>
        <!-- Header End -->


        <!-- Breadcrumb -->
         <div class="container-fluid px-0 py-3 bg-light">
          <div class="container">
            <nav aria-label="breadcrumb" class="ms-auto d-flex justify-content-end">
              <ul class="breadcrumb mb-0 fs-14 fw-medium">
                <li class="breadcrumb-item"><a href="index.php" class="text-decoration-none">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page"><a href="rooms-and-tariff.php" class="text-decoration-none">Rooms & Tariff</a></li>
              </ul>
            </nav>
          </div>
         </div>
         <!-- End Breadcrumb -->


         <!-- Room & Tariff -->
           <div class="container-fluid px-0 py-5">
            <div class="container">


              <div class="row">
                 <div class="col-lg-12 text-center">
                <h1 class="fs-34 fw-bold font-bold text-uppercase">Room & Tariff</h1>
                <h2 class="fw-bold text-uppercase fs-22 textGreen">Rooms, Suites, Group rooms</h2>
                <p class="fs-16 text-center">Choose from premium stays with pricing that suits your budget.</p>
              </div>
              </div>

              <div class="row g-0">
                <div class="col-lg-6 col-sm-6">
                  <div class="lightGreen h-100 p-4 d-flex flex-column justify-content-center">
                    <h2 class="fw-bold font-bold fs-26">Deluxe Room</h2>
                    <p class="fs-16 m-0 p-0">Deluxe Room is our base category room for express check in and check out guest, spacious room with modern amenities like flat led TV with multi channels, Air conditioning and free wifi. With attached bath with running hot & cold water.</p>
                    <ul class="list-unstyled fs-16 fw-normal p-0 m-0 mt-2">
                      <li><img src="images/check-icon.png" /> Air conditioning</li>
                      <li><img src="images/check-icon.png" /> High speed WiFI internet in room</li>
                      <li><img src="images/check-icon.png" /> Two single bed</li>
                      <li><img src="images/check-icon.png" /> Towel, Soap, Shampoo, Shower gel.</li>
                    </ul>
                    <div class="mt-2"><button type="button" class="btn btn-green-small">Know More</button></div>
                  </div>
                </div>
                <div class="col-lg-6 col-sm-6 rat1">
                  <!-- <img src="images/1.jpeg" class="img-fluid" /> -->
                </div>
              </div>


              <div class="row g-0">
                <div class="col-lg-6 col-sm-6 rat2">
                  <!-- <img src="images/25.jpeg" class="img-fluid" /> -->
                </div>
                <div class="col-lg-6 col-sm-6">
                  <div class="lightGreen h-100 p-4 d-flex flex-column justify-content-center">
                    <h2 class="fw-bold font-bold fs-26">Superior Room</h2>
                    <p class="fs-16 m-0 p-0">Superior Room is a base category spacious room with all modern amenities like flat led TV with multi channels, Air conditioning and free wifi. With attached bath with running hot & cold water, Mineral water on arrival, Tea & Coffee maker, Iron on request.</p>

                    <ul class="list-unstyled fs-16 fw-normal p-0 m-0 mt-2">
                      <li><img src="images/check-icon.png" /> Air conditioning</li>
                      <li><img src="images/check-icon.png" /> High speed WiFI internet in room</li>
                      <li><img src="images/check-icon.png" /> Two single OR One double bed</li>
                      <li><img src="images/check-icon.png" /> Welcome drink ( Non-Alcoholic )</li>
                      <li><img src="images/check-icon.png" /> Pick-Up from AWB ( Airport, Railways, Cidco Bus stop ) *On Chargeable Basis</li>
                      <li><img src="images/check-icon.png" /> Free use Swimming pool, Gym, Steam bath, Jaccuzi.</li>
                    </ul>

                    <div class="mt-2"><button type="button" class="btn btn-green-small">Know More</button></div>
                  </div>
                </div>
              </div>

              <div class="row g-0">
                <div class="col-lg-6 col-sm-6">
                  <div class="lightGreen h-100 p-4 d-flex flex-column justify-content-center">
                    <h2 class="fw-bold font-bold fs-26">Executive Room</h2>
                    <p class="fs-16 m-0 p-0">Executive Room is executive class spacious room with modern design, vinyl flooring with choice of twin or double bed. Large mirror. With attached bath, running hot & cold water, tea & coffee maker, hair dryer on request, shaving & dental kit on request.</p>

                    <ul class="list-unstyled fs-16 fw-normal p-0 m-0 mt-2 fs-16">
                      <li><img src="images/check-icon.png" /> Air conditioning</li>
                      <li><img src="images/check-icon.png" /> High speed WiFI internet in room</li>
                      <li><img src="images/check-icon.png" /> Two single OR One double bed</li>
                      <li><img src="images/check-icon.png" /> Welcome drink ( Non-Alcoholic )</li>
                      <li><img src="images/check-icon.png" /> Pick-Up from AWB ( Airport, Railways, Cidco Bus stop) *On Chargeable Basis</li>
                      <li><img src="images/check-icon.png" /> Free use Swimming pool, Gym, Steam bath, Jaccuzi.</li>
                    </ul>

                    <div class="mt-2"><button type="button" class="btn btn-green-small">Know More</button></div>
                  </div>
                </div>
                <div class="col-lg-6 col-sm-6 rat3">
                  <!-- <img src="images/30.jpeg" class="img-fluid" /> -->
                </div>
              </div>


            </div>
           </div>
           <!-- End Room & Tariff -->



          <!-- Footer -->
          <?php include 'includes/footer.php'; ?>
           <!-- End Footer -->

           <!-- Back to Top -->
             <button id="backToTop" aria-label="Back to top">
              <img src="./images/back-to-top.png" />
            </button>
             <!-- End back to Top -->


        </div> 
    <script src="js/bootstrap.bundle.js"></script>
    <script>
  document.getElementById("backToTop").addEventListener("click", () => {
    window.scrollTo({
      top: 0,
      behavior: "smooth",
    });
  });
</script>
</body>
</html>
