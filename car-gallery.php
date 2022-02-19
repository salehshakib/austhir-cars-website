<?php
include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>AUSTHIR CARS | CAR GALLERY</title>
    <!-- bootstrap stylesheet -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <!-- custom stylesheet -->
    <link rel="stylesheet" href="css/dropdown.css" />
    <link rel="stylesheet" href="css/car-gallery-page.css" />
    <!-- fontawesome kit -->
    <script
      src="https://kit.fontawesome.com/d1dbecc215.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <!-- header start -->
    <header>
      <!-- navbar -->
      <nav id="austhir-nav" class="navbar navbar-expand-lg py-0">
        <div id="nav-bar" class="container-fluid">
          <a class="navbar-brand austhir-nav-link" href="index.html">
            <img
              src="images/logo.png"
              alt=""
              width="90"
              height="90"
              class="d-inline-block align-text-top"
          /></a>
          <button
            id="nav-hamburger-button"
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <svg
              width="36"
              height="36"
              viewBox="0 0 36 36"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M6 19.5C6.82843 19.5 7.5 18.8284 7.5 18C7.5 17.1716 6.82843 16.5 6 16.5C5.17157 16.5 4.5 17.1716 4.5 18C4.5 18.8284 5.17157 19.5 6 19.5Z"
                fill="#FF4604"
              />
              <path
                d="M30.09 16.5H11.91C11.1313 16.5 10.5 17.1313 10.5 17.91V18.09C10.5 18.8687 11.1313 19.5 11.91 19.5H30.09C30.8687 19.5 31.5 18.8687 31.5 18.09V17.91C31.5 17.1313 30.8687 16.5 30.09 16.5Z"
                fill="#FF4604"
              />
              <path
                d="M30.09 24H5.91C5.13128 24 4.5 24.6313 4.5 25.41V25.59C4.5 26.3687 5.13128 27 5.91 27H30.09C30.8687 27 31.5 26.3687 31.5 25.59V25.41C31.5 24.6313 30.8687 24 30.09 24Z"
                fill="#FF4604"
              />
              <path
                d="M30.09 9H5.91C5.13128 9 4.5 9.63128 4.5 10.41V10.59C4.5 11.3687 5.13128 12 5.91 12H30.09C30.8687 12 31.5 11.3687 31.5 10.59V10.41C31.5 9.63128 30.8687 9 30.09 9Z"
                fill="#FF4604"
              />
            </svg>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div
              id="nav-items-container"
              class="d-flex flex-column align-items-center flex-lg-row justify-content-between w-100"
            >
              <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item austhir-nav-item">
                  <a
                    class="nav-link austhir-nav-link"
                    aria-current="page"
                    href="index.html#our-services"
                    >Our Services</a
                  >
                </li>
                <li class="nav-item austhir-nav-item">
                  <a
                    class="nav-link austhir-nav-link active"
                    href="index.html#featured-car"
                    >Featured Cars</a
                  >
                </li>
                <li class="nav-item austhir-nav-item">
                  <a
                    class="nav-link austhir-nav-link"
                    href="index.html#hot-sells"
                    >Hot Sells</a
                  >
                </li>
                <li class="nav-item austhir-nav-item">
                  <a class="nav-link austhir-nav-link" href="index.html#why_us"
                    >Why Us?</a
                  >
                </li>
                <li class="nav-item austhir-nav-item">
                  <a
                    class="nav-link austhir-nav-link"
                    href="index.html#contact_us"
                    >Contact Us</a
                  >
                </li>
              </ul>

              <ul class="navbar-nav me-0 me-lg-4 mb-2 mb-lg-0">
                <li
                  class="nav-item log-sign-nav-item d-flex align-items-center"
                >
                  <i class="d-none d-lg-block far fa-user me-2"></i>
                  <a class="nav-link austhir-nav-link" href="#">Log In</a>
                </li>
                <li class="nav-item log-sign-nav-item">
                  <a class="nav-link austhir-nav-link" href="#">Sign Up</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </nav>
    </header>
    <!-- header end -->

    <main>
      <!-- filter section -->
      <section class="container">
        <form id="filter-form" class="d-none d-lg-block" action="">
          <div class="filter-container d-block d-lg-flex">
            <!-- all brands dropdown -->
            <div class="search-car-dropdown form-field-container">
              <div class="austhir-dropdown">
                <div class="select">
                  <span>Select Brand</span>
                  <i class="fa fa-chevron-left"></i>
                </div>
                <input type="hidden" name="brands" />
                <ul class="dropdown-menu">
                  <li id="none">Select Brand</li>
                  <li id="mercedes-benz">Mercedes-Benz</li>
                  <li id="koenigsegg">Koenigsegg</li>
                </ul>
              </div>
            </div>

            <!-- all models dropdown -->
            <div class="search-car-dropdown form-field-container">
              <div class="austhir-dropdown">
                <div class="select">
                  <span>Select Model</span>
                  <i class="fa fa-chevron-left"></i>
                </div>
                <input type="hidden" name="models" />
                <ul class="dropdown-menu">
                  <li id="none">Select Model</li>
                  <li id="mercedes-benz">Mercedes-Benz</li>
                  <li id="koenigsegg">Koenigsegg</li>
                </ul>
              </div>
            </div>

            <!-- type dropdown -->
            <div class="search-car-dropdown form-field-container">
              <div class="austhir-dropdown">
                <div class="select">
                  <span>Select Type</span>
                  <i class="fa fa-chevron-left"></i>
                </div>
                <input type="hidden" name="models" />
                <ul class="dropdown-menu">
                  <li id="none">Select Type</li>
                  <li id="sedan">Sedan</li>
                  <li id="coupe">Coupe</li>
                  <li id="suv">SUV</li>
                  <li id="hatchback">Hatchback</li>
                  <li id="wagon">Wagon</li>
                </ul>
              </div>
            </div>

            <!-- min max price filter -->
            <div class="filter-input d-flex">
              <input type="text" placeholder="Min Price" />
              <input type="text" placeholder="Max Price" />
            </div>

            <!-- mileage dropdown -->
            <div class="search-car-dropdown form-field-container">
              <div class="austhir-dropdown">
                <div class="select">
                  <span>Mileage</span>
                  <i class="fa fa-chevron-left"></i>
                </div>
                <input type="hidden" name="models" />
                <ul class="dropdown-menu">
                  <li id="none">Select Model</li>
                  <li id="mercedes-benz">Mercedes-Benz</li>
                  <li id="koenigsegg">Koenigsegg</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="filter-container d-block d-lg-flex">
            <!-- drive type dropdown -->
            <div class="search-car-dropdown form-field-container">
              <div class="austhir-dropdown">
                <div class="select">
                  <span>Drive Type</span>
                  <i class="fa fa-chevron-left"></i>
                </div>
                <input type="hidden" name="brands" />
                <ul class="dropdown-menu">
                  <li id="4WD">AWD/4WD</li>
                  <li id="front-wheel-drive">Front Wheel Drive</li>
                  <li id="rear-wheel-drive">Rear Wheel Drive</li>
                </ul>
              </div>
            </div>

            <!-- fuel dropdown -->
            <div class="search-car-dropdown form-field-container">
              <div class="austhir-dropdown">
                <div class="select">
                  <span>Fuel Type</span>
                  <i class="fa fa-chevron-left"></i>
                </div>
                <input type="hidden" name="models" />
                <ul class="dropdown-menu">
                  <li id="none">Fuel Type</li>
                  <li id="deisel">Deisel</li>
                  <li id="electric">Electric</li>
                  <li id="hybrid">Hybrid</li>
                  <li id="petrol">Petrol</li>
                </ul>
              </div>
            </div>

            <!-- transmission dropdown -->
            <div class="search-car-dropdown form-field-container">
              <div class="austhir-dropdown">
                <div class="select">
                  <span>Transmission</span>
                  <i class="fa fa-chevron-left"></i>
                </div>
                <input type="hidden" name="models" />
                <ul class="dropdown-menu">
                  <li id="none">Transmission</li>
                  <li id="automatic">Automatic</li>
                  <li id="manual">Manual</li>
                  <li id="semi-automatic">Semi-Automatic</li>
                </ul>
              </div>
            </div>

            <!-- cylinders dropdown -->
            <div class="search-car-dropdown form-field-container">
              <div class="austhir-dropdown">
                <div class="select">
                  <span>Cylinders</span>
                  <i class="fa fa-chevron-left"></i>
                </div>
                <input type="hidden" name="models" />
                <ul class="dropdown-menu">
                  <li id="none">Cylinders</li>
                  <li id="4">4</li>
                  <li id="6">6</li>
                  <li id="8">8</li>
                </ul>
              </div>
            </div>

            <!-- min max year filter -->
            <div class="filter-input d-flex">
              <input type="text" placeholder="Min Year" />
              <input type="text" placeholder="Max Year" />
            </div>
          </div>
          <div
            class="search-btn-container d-block d-lg-flex justify-content-end"
          >
            <button class="austhir-btn search-btn" type="submit">
              <i class="fas fa-search"></i>Search
            </button>
          </div>
        </form>
        <div class="filter-button-container d-block d-lg-none">
          <button id="filter-btn" class="austhir-btn submit-btn w-100">
            <i class="fas fa-sort-amount-down-alt me-2"></i>Filters
          </button>
        </div>
      </section>

      <!-- gallery section -->
      <section id="gallery-section" class="bg-white">
        <div class="container">
          <div
            class="title-container text-center text-lg-start d-block d-lg-flex justify-content-between"
          >
            <h3 class="search-result">All Cars</h3>
            <h3 class="search-result">100 Results</h3>
          </div>

          <!-- cards container -->
          <div class="gallery-card-container">
        
            <div
              class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4"
            >
            <?php
				    $query = "select * from cars order by carId";
			      $result = mysqli_query($conn, $query);
			      if (mysqli_num_rows($result) > 0) {
				        while ($row = mysqli_fetch_array($result)) {
			      ?>
              <div class="col">
                <a class="p-0" href="#">
                  <div class="card h-100 austhir-card">
                    <div class="austhir-card-image">
                      <img
                        src="images/carImage/<?php echo $row["carImage"]; ?>"
                        class="card-img-top"
                        alt="image of an aventador"
                      />
                    </div>
                    <div class="card-body">
                      <h4 class="card-title austhir-card-title">
                      <?php echo $row["carBrand"]; ?>
                      </h4>
                      <h4 class="card-text austhir-card-price">
                        ৳ <?php echo $row["carPrice"]; ?>
                      </h4>
                    </div>
                    <div class="card-footer austhir-card-footer">
                      <p class="year-badge austhir-footer-info"><?php echo $row["carReleaseDate"]; ?></p>
                      <p class="austhir-footer-info">Automatic</p>
                      <p class="austhir-footer-info">Petrol</p>
                    </div>
                  </div>
                </a>
              </div>
              <?php
				          }
			      }
		        ?>
            </div>
            
          </div>
        </div>
      </section>
    </main>

    <!-- footer -->
    <footer>
      <div class="container-fluid h-100 d-flex align-items-center">
        <div
          class="row row-cols-1 row-cols-md-2 w-100 d-flex justify-content-between align-items-center"
        >
          <div class="copyright-text text-center text-md-start">
            <p>Copyright © Austhir Cars 2022. All rights reserved.</p>
          </div>

          <div
            class="social-links d-flex justify-content-center justify-content-md-end"
          >
            <a class="social-link" href="#"
              ><i class="fab fa-facebook-f"></i
            ></a>
            <a class="social-link" href="#"><i class="fab fa-twitter"></i></a>
            <a class="social-link" href="#"><i class="fab fa-instagram"></i></a>
          </div>
        </div>
      </div>
    </footer>

    <!-- bootstrap js -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
    <!-- jQuery CDN  -->
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <!-- custom js -->
    <script src="js/header.js"></script>
    <script src="js/dropdown.js"></script>
    <script src="js/filter.js"></script>
  </body>
</html>
