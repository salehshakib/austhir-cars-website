<?php
include 'config.php';
session_start();
error_reporting(0);

if(!isset($_SESSION['adminName'])){
  if(isset($_SESSION['name']))
  Header("Location: index.php");
  else Header("Location: login-register.php");
}


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
    <link rel="stylesheet" href="css/admin-home.css" />
    <!-- fontawesome kit -->
    <script
      src="https://kit.fontawesome.com/d1dbecc215.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <!-- header start -->
    <header>
      <?php include'admin-header.php'; ?>
    </header>
    <!-- header end -->
    <main>
      <!-- admin cards section -->
      <section id="admin-card-section" class="container">
        <div class="admin-card-container">
          <a href="admin-panel.php">
            <div class="admin-card">
              <div class="admin-card-image">
                <svg
                  version="1.1"
                  xmlns="http://www.w3.org/2000/svg"
                  xmlns:xlink="http://www.w3.org/1999/xlink"
                  x="0px"
                  y="0px"
                  viewBox="0 0 1000 1000"
                  enable-background="new 0 0 1000 1000"
                  xml:space="preserve"
                >
                  <g>
                    <path
                      d="M303,58.5c50.8,50.8,63.3,125.4,37.3,187.8l411.8,412.5c62.4-26.1,137-13.9,187.7,36.8c66.9,67,66.9,175.7,0,243.1c-66.9,67-175.6,67-243,0C646.1,888,634,813.4,660,750.9l-412.3-412c-62.4,25.6-137,13.5-187.3-37.3C18.7,260.3,3,202.7,12.9,149.3l129.3,129.4l137.9-137.9L150.7,11.3C204.2,1.5,261.7,17.2,303,58.5L303,58.5z M898.9,897.4l-55.2,14.8l-54.8,14.8l-40-40.4l-40.4-40l14.8-54.8l14.8-54.8l54.8-14.8l54.8-14.8l40.4,40l40,40.4l-14.8,54.8L898.9,897.4z"
                    />
                    <path
                      d="M522.6,318.2l162.6,162.7c10.3,10.3,10.3,27,0,37.3l0,0c-9.9,9.9-27,9.9-36.8,0l-163-163.1c-9.9-9.9-9.9-27,0-36.8l0,0C495.6,307.9,512.3,307.9,522.6,318.2L522.6,318.2z M880.5,163.2L630.8,413l-51.2-50.8l250.2-249.8l-21.6-21.6L930.8,9.1l18.4,18l16.6,16.6l18,18l-81.7,123.1L880.5,163.2z M501.9,646.2L160.2,988.2c-4.5,4.5-12.1,4.5-17.1,0l-128.9-129c-4.5-4.9-4.5-12.6,0-17.1l342.2-341.9l13.5,13.5L62.3,821.5c-3.6,4.1-3.6,9.9,0,13.9l0,0c3.6,3.6,9.9,3.6,13.5,0l307.6-307.8l38.6,38.2L114.4,873.6c-3.6,4-3.6,9.9,0,13.9l0,0c3.6,3.6,9.9,3.6,13.5,0l307.6-307.8l39.1,39.1L166.9,926.6c-3.6,3.6-3.6,9.9,0,13.5l0,0c4,3.6,9.9,3.6,13.9,0l307.6-307.8L501.9,646.2z"
                    />
                  </g>
                </svg>
              </div>
              <h3 class="admin-card-title">After Sales Service</h3>
            </div>
          </a>
          <a href="add-listing.php">
            <div class="admin-card">
              <div class="admin-card-image">
                <svg
                  version="1.1"
                  id="Icons"
                  xmlns="http://www.w3.org/2000/svg"
                  xmlns:xlink="http://www.w3.org/1999/xlink"
                  x="0px"
                  y="0px"
                  viewBox="0 0 32 32"
                  style="enable-background: new 0 0 32 32"
                  xml:space="preserve"
                >
                  <style type="text/css">
                    .st0 {
                      fill: none;
                      stroke: #ff4604;
                      stroke-width: 2;
                      stroke-linecap: round;
                      stroke-linejoin: round;
                      stroke-miterlimit: 10;
                    }
                    .st1 {
                      fill: none;
                      stroke: #ff4604;
                      stroke-width: 2;
                      stroke-linejoin: round;
                      stroke-miterlimit: 10;
                    }
                  </style>
                  <path
                    class="st0"
                    d="M24,13H4l2-4.6C6.6,7,8,6,9.6,6h8.7c1.6,0,3,1,3.7,2.4L24,13z"
                  />
                  <path
                    class="st0"
                    d="M8,23H2v2c0,1.1,0.9,2,2,2h2c1.1,0,2-0.9,2-2V23z"
                  />
                  <line class="st0" x1="1" y1="12" x2="4.4" y2="12" />
                  <line class="st0" x1="24" y1="12" x2="27" y2="12" />
                  <line class="st0" x1="4" y1="18" x2="7" y2="18" />
                  <circle class="st0" cx="24" cy="23" r="7" />
                  <line class="st0" x1="24" y1="20" x2="24" y2="26" />
                  <line class="st0" x1="21" y1="23" x2="27" y2="23" />
                  <path
                    class="st0"
                    d="M17.6,20.1c-0.3-0.7-1-1.1-1.8-1.1h-3.5c-0.8,0-1.5,0.4-1.8,1.1L9,23"
                  />
                  <path
                    class="st0"
                    d="M17,23H3c-1.1,0-2-0.9-2-2v-4c0-2.2,1.8-4,4-4h18c2.1,0,3.8,1.6,4,3.7"
                  />
                </svg>
              </div>
              <h3 class="admin-card-title">Add New Car</h3>
            </div>
          </a>
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
    <script src="js/admin-header.js"></script>
  </body>
</html>


