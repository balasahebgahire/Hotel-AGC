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
                <li class="breadcrumb-item active" aria-current="page"><a href="meeting-and-events.php" class="text-decoration-none">Meeting & Events</a></li>
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
                <h1 class="fs-34 fw-bold font-bold text-uppercase">Viceroy Restaurant (Pure Veg)</h1>
                <h2 class="fw-bold text-uppercase fs-22 textGreen">Multi cusine restaurant serving indian, chinese, local cusine</h2>
              </div>
              </div>


              <div class="row mt-20">
                <div class="col-md-12 mt-20">
                  <div class="row g-0 bg-white shadow border borderRadius16">
                    <div class="col-lg-5 col-md-5"><img src="./images/corporate_clients_01.png" class="img-fluid" /></div>
                    <div class="col-lg-7 col-md-7">
                      <div class="p-4 d-flex flex-column justify-content-center h-100">
                      <h4 class="m-0 p-0 fs-22 fw-bold textGreen">Our special focus is on our corporate clients to make sure their meetings and conferences, however big or small are professionally taken care of.</h4>
                      <p class="fs-16 m-0 p-0 lh-sm mt-2">
                        We specialise in all type of events, be it a board meeting, or a full day conference with special type of seating like u shape, calssroom, cluster or theater style. Our halls, 3 of them, are built for 20 to 200 persons at a time.
                        <br /><br />
                        All requirements like Audio and video and other requirements like flip chart board, electronic pointers, etc are made available.
                      </p>
                      </div>
                    </div>
                  </div>
                </div>                
              </div>


              <div class="row mt-20">
                <div class="col-md-12 mt-20">
                  <div class="row g-0 bg-white shadow border borderRadius16">
                    <div class="col-lg-7 col-md-7">
                      <div class="p-4 d-flex flex-column justify-content-center h-100">
                      <h4 class="m-0 p-0 fs-22 fw-bold textGreen">Conference Hall's</h4>
                      <p class="fs-16 m-0 p-0 lh-sm mt-2">
                       Regal Hall is a 2000 sq ft airconditioned hall with a built in stage suitable for upto 200 persons, with all audio and video facilities.
                       <br /><br />
                       Topaz Hall is 1950 sq ft airconditioned hall suitable for up to 180 persons with all conference amenities.
                       <br /><br />
                       Our Board room takes up to 18 persons on the table with built in screen and a separate sofa sit out for one to one discussion. All conference aids are available.
                      </p>
                      </div>
                    </div>

                    <div class="col-lg-5 col-md-5"><img src="./images/Conference-Hall.png" class="img-fluid" /></div>
                  </div>
                </div>                
              </div>


              <div class="row mt-20">
                <div class="col-md-12 mt-20">
                  <div class="row g-0 bg-white shadow border borderRadius16">
                    <div class="col-lg-5 col-md-5"><img src="./images/Private_Banqueting_01.png" class="img-fluid" /></div>
                    <div class="col-lg-7 col-md-7">
                      <div class="p-4 d-flex flex-column justify-content-center h-100">
                      <h4 class="m-0 p-0 fs-22 fw-bold textGreen">Private Banqueting</h4>
                      <p class="fs-16 m-0 p-0 lh-sm mt-2">
                        Our halls are also perfect for private parties, be it kids birthday party or wedding anniversaries or just get togethers of college students or other fratineries. We have enough out door spaces for under the sky events.
                      </p>
                      </div>
                    </div>
                  </div>
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
