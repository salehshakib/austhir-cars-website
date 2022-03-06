<?php
include 'config.php';

if(isset($_GET['type'])){
  $car_type = $_GET['type'];
  $query = "select * from cars WHERE carGenre = '$car_type'";

}else{
  $query = "SELECT * FROM cars";
}
$count = mysqli_num_rows(mysqli_query($conn, $query));

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
     <?php include'header.php'; ?>
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
            <!-- <div class="search-car-dropdown form-field-container">
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
            </div> -->

            <!-- type dropdown -->
            <div class="search-car-dropdown form-field-container">
              <div class="austhir-dropdown">
                <div class="select">
                  <span>
                    <?php
                      if(isset($_GET['type'])){
                        $car_type = $_GET['type'];
                      }else{
                        $car_type = 'Select Type';
                      } 
                      echo $car_type;

                    ?></span>
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


            <!-- mileage dropdown -->
            <!-- <div class="search-car-dropdown form-field-container">
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
            </div> -->
          </div>
          <div class="filter-container d-block d-lg-flex">
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
            <h3 class="search-result"><?php echo $count; ?> Results</h3>
          </div>

          <!-- cards container -->
          <div class="gallery-card-container">
        
            <div
              class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4"
            >
            <?php
            if(isset($_GET['type'])){
              $car_type = $_GET['type'];
              $query = "select * from cars WHERE carGenre = '$car_type'";
            
            }else{
              $query = "SELECT * FROM cars";
            }
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
                    <?php echo $row["carBrand"].' '. $row["carModel"]; ?>
                    </h4>
                    <h4 class="card-text austhir-card-price">
                      ৳ <?php echo $row["carPrice"]; ?>
                    </h4>
                  </div>
                  <div class="card-footer austhir-card-footer">
                    <p class="year-badge austhir-footer-info"><?php echo $row["carReleaseDate"]; ?></p>
                    <?php   

                    $car = $row['carId'];                    
                    $newQuery = "SELECT * FROM carDetails where carId = '$car' ";
                    $result1 = mysqli_query($conn, $newQuery);
                    if (mysqli_num_rows($result1) > 0) {
                      while ($row1 = mysqli_fetch_array($result1)) {
                    ?>
                    <p class="austhir-footer-info"><?php echo $row1['transmission'] ?></p>
                    <p class="austhir-footer-info"><?php echo $row1['fuelType'] ?> </p>
                    <?php
                      }
                    } 
                    ?>
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
