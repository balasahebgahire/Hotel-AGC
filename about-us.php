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
                <li class="breadcrumb-item active" aria-current="page"><a href="about-us.php" class="text-decoration-none">About Us</a></li>
              </ul>
            </nav>
          </div>
         </div>
         <!-- End Breadcrumb -->


        <!-- Welcome Section -->
         <div class="container-fluid px-0 py-5">
          <div class="container">

            <div class="row">
              <div class="col-lg-12 text-center">
                <h1 class="fs-34 fw-bold font-bold textGreen text-uppercase">Explore Aurangabad with us...</h1>
              </div>
            </div>


            <div class="row mt-40">
              <div class="col-lg-6 col-md-6 mb-sm-20">
                <img src="images/about-img.png" class="img-fluid shadow-lg" />
              </div>
              <div class="col-lg-6 col-md-6">
                <h2 class="fs-22 fw-bold">Hotel AGC in Aurangabad (Club hotel in Aurangabad), is a Club cum hotel property with 4 star facilities, spread over two and half acres lush green landscape.</h2>
                <p class="fs-16 text-justify">Hotel AGC in Aurangabad (Club hotel in Aurangabad), is a Club cum hotel property with 4 star facilities, spread over two and half acres lush green landscape. The property which is one of the best hotel in Aurangabad is located close to the airport and easily accessible from the railway station and bus station, the hotel features 100 well-appointed rooms with all modern amenities offering warm hospitality and value for money services. We have a vegetarian restaurant, with 24 hour room service, banquet halls, conference halls and board room with scanning, copying and printing facilities. Attached is an exclusive health club with swimming pool. For the health and beauty conscious, we have gents and ladies beauty parlor and rejuvenation massage therapies. Ours is the best 4 star hotel in Aurangabad.</p>
              </div>
            </div>


          </div>
         </div>
         <!-- End Welcome Section -->



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
