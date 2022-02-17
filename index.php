<?php

include 'config.php';

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>AUSTHIR CARS | HOME</title>
    <!-- bootstrap stylesheet -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
      
    />
    <!-- custom stylesheet -->
    <link rel="stylesheet" href="css/home-page.css" />
    <link rel="stylesheet" href="css/dropdown.css" />
    <!-- fontawesome kit -->
    <script
      src="https://kit.fontawesome.com/d1dbecc215.js"
      crossorigin="anonymous"
    ></script>
    <!-- owl carousel stylesheet -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
      integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
  </head>
  <body>
    <!-- header start -->
    <header id="home-header">
      <!-- navbar -->
      <nav class="navbar navbar-expand-lg py-0">
        <div id="nav-bar" class="container-fluid">
          <a class="navbar-brand austhir-nav-link" href="#">
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
                    href="#our-services"
                    >Our Services</a
                  >
                </li>
                <li class="nav-item austhir-nav-item">
                  <a
                    class="nav-link austhir-nav-link active"
                    href="#featured-car"
                    >Featured Cars</a
                  >
                </li>
                <li class="nav-item austhir-nav-item">
                  <a class="nav-link austhir-nav-link" href="#hot-sells"
                    >Hot Sells</a
                  >
                </li>
                <li class="nav-item austhir-nav-item">
                  <a class="nav-link austhir-nav-link" href="#why_us"
                    >Why Us?</a
                  >
                </li>
                <li class="nav-item austhir-nav-item">
                  <a class="nav-link austhir-nav-link" href="#contact_us"
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

      <!-- hero section -->
      <section class="container">
        <div class="row-cols-1">
          <!-- title -->
          <div class="row">
            <h1 class="hero-title text-capitalize">
              Find your <span>Perfect</span> Car
            </h1>
          </div>

          <!-- car search  -->
          <div class="row d-flex justify-content-center">
            <div
              class="search-car-container d-flex flex-column flex-lg-row align-items-center"
            >
              <!-- all brands dropdown -->
              <div class="search-car-dropdown d-block">
                <div class="austhir-dropdown">
                  <div class="select">
                    <span>All Brands</span>
                    <i class="fa fa-chevron-left"></i>
                  </div>
                  <input type="hidden" name="brands" />
                  <ul class="dropdown-menu">
                    <li id="none">All Brands</li>
                    <li id="mercedes-benz">Mercedes-Benz</li>
                    <li id="koenigsegg">Koenigsegg</li>
                  </ul>
                </div>
              </div>

              <!-- all models dropdown -->
              <div class="search-car-dropdown d-block">
                <div class="austhir-dropdown">
                  <div class="select">
                    <span>All Models</span>
                    <i class="fa fa-chevron-left"></i>
                  </div>
                  <input type="hidden" name="models" />
                  <ul class="dropdown-menu">
                    <li id="none">All Models</li>
                    <li id="mercedes-benz">Mercedes-Benz</li>
                    <li id="koenigsegg">Koenigsegg</li>
                  </ul>
                </div>
              </div>

              <!-- max price dropdown -->
              <div class="dropdown search-car-dropdown d-block">
                <div class="austhir-dropdown">
                  <div class="select">
                    <span>Max Price</span>
                    <i class="fa fa-chevron-left"></i>
                  </div>
                  <input type="hidden" name="price" />
                  <ul class="dropdown-menu">
                    <li id="none">Max Price</li>
                    <li id="mercedes-benz">Mercedes-Benz</li>
                    <li id="koenigsegg">Koenigsegg</li>
                  </ul>
                </div>
              </div>

              <!-- search button  -->
              <div class="d-block search-button-container">
                <a
                  class="d-block search-button d-flex align-items-center justify-content-center"
                  href="#"
                >
                  <i class="fas fa-search"></i>
                  <p class="search-button-text">Search</p>
                </a>
              </div>
            </div>
          </div>

          <!-- car type filters -->
          <div class="row">
            <div
              class="car-type-filter-container d-block d-md-flex justify-content-center"
            >
              <div class="first-row d-flex justify-content-center">
                <!-- sedan -->
                <div class="car-type-button">
                  <a href="car-gallery.html?type=sedan">
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
                        <g>
                          <g>
                            <path
                              d="M181.1,526.5c-40.8,0-73.9,33.1-73.9,73.9c0,3.1,0.3,6.2,0.7,9.3c4.6,36.5,35.6,64.6,73.3,64.6c38.7,0,70.4-29.7,73.6-67.6c0.2-2.1,0.3-4.2,0.3-6.3C255,559.6,221.9,526.5,181.1,526.5z M144.1,572.6l15.1,15.1c-1.2,2-2.1,4.2-2.7,6.5h-21.3C136.3,586.1,139.4,578.7,144.1,572.6z M135.1,606.9h21.4c0.6,2.3,1.5,4.4,2.7,6.4l-15.1,15.1C139.4,622.3,136.3,615,135.1,606.9z M174.7,646.4c-8-1.1-15.3-4.3-21.4-8.9l15-15c2,1.2,4.1,2,6.4,2.6V646.4z M174.7,575.8c-2.3,0.6-4.5,1.5-6.5,2.7l-15.1-15.1c6.2-4.7,13.5-7.8,21.6-8.9V575.8z M187.5,554.5c8.1,1.1,15.4,4.2,21.6,8.9L194,578.5c-2-1.2-4.2-2.1-6.5-2.7L187.5,554.5L187.5,554.5z M187.5,646.3V625c2.3-0.6,4.4-1.4,6.4-2.6l15,15C202.8,642.1,195.5,645.2,187.5,646.3z M218.1,628.5l-15.2-15.2c1.2-2,2.2-4.1,2.8-6.4h21.3C225.8,614.9,222.8,622.4,218.1,628.5z M205.7,594.1c-0.6-2.3-1.5-4.5-2.7-6.5l15.1-15.1c4.7,6.2,7.7,13.5,8.9,21.6L205.7,594.1L205.7,594.1z"
                            />
                            <path
                              d="M795.1,526.5c-40.8,0-74,33.1-74,73.9c0,3.1,0.3,6.2,0.7,9.3c4.6,36.5,35.6,64.6,73.3,64.6c38.7,0,70.4-29.7,73.6-67.6c0.2-2.1,0.3-4.2,0.3-6.3C869.1,559.6,836,526.5,795.1,526.5z M758.1,572.6l15.1,15.1c-1.2,2-2.1,4.2-2.7,6.5h-21.3C750.3,586.1,753.4,578.7,758.1,572.6z M749.1,606.9h21.4c0.6,2.3,1.5,4.4,2.7,6.4l-15.1,15.1C753.4,622.3,750.3,615,749.1,606.9z M788.7,646.4c-8-1.1-15.3-4.3-21.4-8.9l15-15c2,1.2,4.1,2,6.4,2.6V646.4z M788.7,575.8c-2.3,0.6-4.5,1.5-6.5,2.7l-15.1-15.1c6.2-4.7,13.5-7.8,21.6-8.9V575.8z M801.5,554.5c8.1,1.1,15.4,4.2,21.6,8.9l-15.1,15.1c-2-1.2-4.2-2.1-6.5-2.7V554.5z M801.5,646.3V625c2.3-0.6,4.4-1.4,6.4-2.6l15,15C816.8,642.1,809.5,645.2,801.5,646.3z M832.1,628.5L817,613.4c1.2-2,2.2-4.1,2.7-6.4H841C839.8,614.9,836.8,622.4,832.1,628.5z M819.7,594.1c-0.6-2.3-1.5-4.5-2.7-6.5l15.1-15.1c4.7,6.2,7.7,13.5,8.9,21.6L819.7,594.1L819.7,594.1z"
                            />
                            <path
                              d="M972.7,488.2v-54.7c0-8.8-6.4-16.3-15.1-17.6c-20.9-3.3-57.8-9.4-74.5-14.6c-23.8-7.3-115.9-46.3-147.8-53.6c-31.9-7.3-175.7-46.4-313.3,1.3c-23.3,8.1-128.1,58.2-189.7,84.2c-18.2,0.4-197.8,37.8-207.4,63.5c-9.6,25.7-12.6,38.1-14.3,44.7c-1.8,6.5,0,37.7,13.3,59.4c13.6,7.7,39.8,12.9,70.1,16.3c-0.3-1.8-0.7-3.7-1-5.5c-0.5-4-0.8-7.7-0.8-11.1c0-49,39.8-88.8,88.8-88.8c49,0,88.8,39.8,88.8,88.8c0,2.5-0.2,5-0.4,7.5c-0.5,5.5-1.5,10.8-2.9,16c0.1,0,0.2,0,0.2,0l440.8-8.9c-0.2-1.1-0.5-2.3-0.6-3.4c-0.5-4-0.8-7.6-0.8-11.1c0-49,39.8-88.8,88.8-88.8c49,0,88.8,39.8,88.8,88.8c0,0.2,0,0.3,0,0.5l1.9-0.2l75.4-14.2c0,0,28.9-15.4,28.9-57.6C990,500.8,972.7,488.2,972.7,488.2z M535.4,436.3l-164.6,5c3-24.7-11.6-30.2-11.6-30.2c65.4-59.4,197.3-61.4,197.3-61.4L535.4,436.3z M720.2,428.8l-150,5l13.6-84.1c77.5-1,121.8,16.1,121.8,16.1l22.1,35.7L720.2,428.8z M804.7,428.3h-41.8l-41.8-57.4c31.4,12.5,56.4,24.8,71.4,32.5C801.6,408.1,806.5,418.2,804.7,428.3z"
                            />
                          </g>
                        </g>
                      </g>
                    </svg>
                    Sedan
                  </a>
                </div>
                <!-- coupe -->
                <div class="car-type-button">
                  <a href="car-gallery.html?type=coupe">
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
                        <g
                          transform="translate(0.000000,511.000000) scale(0.100000,-0.100000)"
                        >
                          <path
                            d="M5614,1666.7c-68.9-9.8-155.5-27.5-190.9-39.4c-37.4-11.8-405.4-192.9-820.6-401.4c-499.8-251.9-783.2-383.7-842.2-391.6c-49.2-7.9-468.3-45.3-934.7-82.7C1753,663,1497.2,635.5,1241.4,572.5c-346.3-84.6-917-312.9-1039-413.3C141.3,108.1,100-67,100-287.4c0-263.7,49.2-340.4,236.1-375.8l68.9-11.8l2-125.9c2-82.7,13.8-145.6,35.4-177.1c31.5-51.2,33.5-51.2,314.9-51.2h281.4L1013.1-927c-35.4,133.8-35.4,371.9,2,505.7c137.8,517.5,669.1,852.1,1182.7,743.8c590.4-126,938.7-700.5,785.2-1296.8l-13.8-55.1h2125.3h2125.3l-27.5,92.5C7150.9-801,7156.8-527.5,7204-376c145.6,474.2,651.4,787.1,1135.5,704.5c375.9-63,702.5-346.3,814.7-706.5c43.3-143.7,53.1-415.2,17.7-533.3c-29.5-102.3-27.6-104.3,86.6-92.5c135.8,13.8,246,63,401.4,179.1l122,94.5V-498c0,137.8,7.9,238.1,19.7,246C9839-228.4,9900-86.7,9900-19.8c0,53.1-19.7,84.6-88.6,155.5l-88.6,90.5l13.8,295.2l11.8,295.2l-53.1,33.5c-35.4,23.6-129.9,43.3-283.4,61c-263.7,27.5-232.2,17.7-1027.2,316.8c-798.9,301.1-1023.3,377.8-1210.2,413.3C6987.5,1674.5,5810.8,1694.2,5614,1666.7z M7133.2,1353.8c53.1-21.7,55.1-27.6,45.3-106.3c-5.9-47.2-53.1-192.8-104.3-324.7l-92.5-240.1h-850.1h-850.1l-90.5,61c-80.7,53.1-171.2,149.6-171.2,181c0,15.8,271.6,214.5,391.6,287.3c143.7,86.6,285.4,139.7,425.1,159.4C6011.5,1397.1,7064.3,1381.3,7133.2,1353.8z M7733.4,1117.6c198.8-84.6,370-169.2,379.8-186.9c13.8-23.6-5.9-55.1-74.8-129.9l-92.5-98.4h-391.6c-332.6,0-391.6,3.9-383.7,27.6c5.9,15.7,39.4,137.8,74.8,271.6c68.9,271.6,68.9,271.6,102.3,271.6C7361.4,1273.1,7534.6,1202.3,7733.4,1117.6z"
                          />
                          <path
                            d="M1855.3,90.4c-606.1-118.1-844.2-877.7-413.3-1314.5C1896.7-1682.7,2672-1434.7,2772.4-801c66.9,415.2-220.4,816.7-633.6,891.4C2006.9,114,1975.4,114,1855.3,90.4z M2205.6-204.8c480.2-216.5,381.8-915.1-141.7-991.8c-265.7-39.4-547.1,183-580.5,460.5C1438.2-350.4,1853.4-45.4,2205.6-204.8z"
                          />
                          <path
                            d="M1812-391.7c-19.7-21.7-19.7-39.4-3.9-76.8c27.6-61-5.9-147.6-57.1-147.6c-63,0-96.4-23.6-96.4-68.9c0-47.2,59-82.7,96.4-59c11.8,5.9,35.4-11.8,53.1-39.4c23.6-37.4,27.5-61,13.8-102.3c-25.6-72.8-11.8-104.3,41.3-104.3c27.5,0,53.1,17.7,66.9,47.2c27.6,63,116.1,63,167.3,0c66.9-86.6,141.7-37.4,94.5,63c-27.5,62.9,21.6,145.6,86.6,145.6c23.6,0,55.1,13.8,68.9,29.5c33.5,41.3-7.9,88.6-78.7,88.6c-68.9,0-108.2,74.8-74.8,147.6c15.7,37.4,15.7,55.1-3.9,78.7c-35.4,43.3-76.7,35.4-102.3-19.7c-17.7-37.4-37.4-49.2-86.6-49.2c-35.4,0-66.9,11.8-72.8,27.5C1904.5-379.9,1839.6-356.3,1812-391.7z"
                          />
                          <path
                            d="M8030.5,90.4c-234.2-45.3-464.4-226.3-566.7-446.7c-47.2-98.4-53.1-135.8-53.1-318.8c0-190.9,3.9-216.5,61-334.5c76.8-163.3,208.6-295.2,377.8-377.8c122-61,145.6-64.9,328.6-64.9s206.6,3.9,328.6,64.9c173.2,84.6,299.1,208.6,375.9,373.9c59,122,63,147.6,63,338.5c0,183-5.9,220.4-53.1,318.8C8786.2-130,8559.9,45.1,8317.8,90.4C8186,114,8154.5,114,8030.5,90.4z M8384.7-204.8c179.1-80.7,291.2-238.1,309-431c33.5-358.2-309-641.5-649.4-543.1c-214.5,63-360.1,234.2-381.8,452.6C7623.2-344.5,8034.5-45.4,8384.7-204.8z"
                          />
                          <path
                            d="M7989.2-391.7c-17.7-21.7-17.7-41.3-2-76.8c33.5-72.8-3.9-141.7-86.6-157.4c-53.1-9.8-66.9-21.6-66.9-59c0-47.2,59-82.7,96.4-61c9.8,5.9,33.4-11.8,51.2-39.4c25.6-41.3,29.5-61,11.8-98.4c-45.3-98.4,47.2-149.6,106.3-59c19.7,29.5,49.2,47.2,82.7,47.2s66.9-19.7,90.5-47.2c66.9-84.6,141.7-37.4,96.4,61c-31.5,68.9,9.8,143.7,84.6,151.5c49.2,3.9,59,15.7,59,55.1c0,41.3-9.8,51.2-63,55.1c-76.7,7.9-122,92.5-84.6,161.4c17.7,31.5,17.7,49.2-2,70.8c-33.5,41.3-74.8,33.4-100.4-21.7c-27.5-63-141.7-70.8-171.2-11.8C8064-370.1,8018.7-356.3,7989.2-391.7z"
                          />
                        </g>
                      </g>
                    </svg>
                    Coupe
                  </a>
                </div>
                <!-- suv -->
                <div class="car-type-button">
                  <a href="car-gallery.html?type=suv">
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
                        <g
                          transform="translate(0.000000,511.000000) scale(0.100000,-0.100000)"
                        >
                          <path
                            d="M5117.6,2150c-294-19.6-648.8-68.6-744.8-100c-33.3-11.8-405.7-301.8-825.2-644.8l-762.4-623.3l-143.1-23.5c-346.9-56.8-1121.1-201.9-1419-264.6C791.9,399.7,592,337,537.1,276.2c-49-52.9-109.8-237.2-147-433.2c-21.6-113.7-31.4-133.3-92.1-172.5c-152.9-96-196-194-198-450.8c0-205.8,31.4-288.1,135.2-356.7c62.7-43.1,84.3-45.1,421.4-45.1h356.7l23.5,160.7c105.8,729.1,899.6,1117.2,1530.8,746.7c282.2-164.6,492-505.7,492-801.6V-1182H5049h1989.4v68.6c0,284.2,174.5,609.6,425.3,787.9c409.6,292,958.4,248.9,1307.3-100c180.3-180.3,305.8-452.8,305.8-662.5c0-41.2,9.8-74.5,19.6-74.5c60.8,0,517.5,164.6,558.6,201.9c33.3,27.4,54.9,74.5,64.7,131.3c13.7,80.4,19.6,88.2,72.5,94.1c86.3,9.8,107.8,51,107.8,215.6c0,178.4-19.6,219.5-103.9,219.5h-62.7l5.9,339.1c3.9,188.2-2,437.1-11.8,552.7c-15.7,184.2-23.5,217.6-62.7,248.9c-23.5,19.6-66.7,35.3-94.1,35.3c-72.5,0-241.1,178.4-531.2,566.4c-180.3,243-237.1,333.2-229.3,362.6c5.9,23.5,17.6,60.8,23.5,84.3c13.7,51,9.8,51-286.2,101.9c-613.5,103.9-1375.9,158.8-2381.4,168.6C5735,2163.7,5262.6,2159.8,5117.6,2150z M7273.6,1973.6c135.3-9.8,284.2-23.5,329.3-31.4l86.2-9.8l-13.7-523.3c-7.9-288.1-19.6-529.2-27.5-537.1c-5.9-7.8-343-27.4-746.7-43.1c-403.8-17.6-789.9-35.3-858.5-39.2l-121.5-9.8l3.9,601.7l5.9,601.7l88.2,13.7C6129,2012.8,6946.3,1997.1,7273.6,1973.6z M5684,1971.6c43.1-15.7,60.8-33.3,60.8-62.7c0-115.6-80.4-1119.2-90.2-1129c-5.9-5.9-117.6-13.7-248.9-17.6c-1828.7-41.2-1844.4-41.2-1911-9.8c-35.3,17.6-76.4,49-92.1,72.5c-37.2,52.9-37.2,168.6,0,221.5c43.1,62.7,548.8,493.9,774.2,662.5c105.8,78.4,235.2,156.8,288.1,174.4c84.3,27.4,374.4,78.4,554.7,96C5186.2,1997.1,5627.2,1991.2,5684,1971.6z M8241.8,1885.4c152.9-41.2,266.6-109.8,380.2-235.2c182.3-198,366.5-644.8,280.3-678.2c-62.7-25.5-978-105.8-995.7-88.2c-9.8,9.8-45.1,654.6-45.1,840.8v190.1h133.3C8067.4,1914.8,8179.1,1901.1,8241.8,1885.4z"
                          />
                          <path
                            d="M1795.4-398c-337.1-111.7-556.6-441-535.1-805.5c35.3-617.4,727.2-946.7,1246.6-591.9c488,333.2,429.2,1087.8-107.8,1352.4c-129.4,64.7-166.6,72.5-315.6,78.4C1954.2-360.8,1885.6-368.6,1795.4-398z M2259.9-621.4c292-123.5,435.1-468.4,311.6-748.7c-56.8-125.4-180.3-250.9-303.8-303.8c-278.3-119.6-629.2,21.6-746.8,299.9c-160.7,390,150.9,827.1,562.5,789.9C2146.2-588.1,2226.6-605.8,2259.9-621.4z"
                          />
                          <path
                            d="M1854.2-829.2c-5.9-19.6-2-54.9,7.8-76.4c15.7-29.4,13.7-52.9-13.7-98c-27.5-51-43.1-58.8-84.3-51c-70.6,15.7-123.5-35.3-96-90.1c11.8-21.6,41.2-37.2,70.6-37.2c35.3,0,56.8-17.6,80.4-68.6c29.4-62.7,29.4-70.6-2-105.8c-47-51-25.5-119.6,37.2-119.6c25.5,0,56.8,19.6,74.5,45.1c43.1,66.7,141.1,51,182.3-27.4c52.9-105.8,160.7-51,121.5,62.7c-25.5,74.5,29.4,162.7,96,149c113.7-21.6,141.1,98,29.4,127.4c-84.3,23.5-117.6,100-74.5,176.4c17.6,27.5,25.5,64.7,19.6,82.3c-17.6,43.1-92.1,39.2-135.2-7.9c-21.6-23.5-60.8-39.2-96-39.2c-51,0-66.6,9.8-84.3,58.8C1960-778.2,1873.8-764.5,1854.2-829.2z"
                          />
                          <path
                            d="M7867.5-376.4c-213.6-54.9-433.2-241.1-531.2-446.9c-47.1-101.9-52.9-135.2-52.9-329.3c0-203.8,3.9-223.4,62.7-345c243-492,907.5-595.8,1281.8-199.9c376.3,397.9,262.6,1021.2-229.3,1262.2c-111.7,54.9-154.9,64.7-299.9,70.6C8006.6-362.7,7902.8-368.6,7867.5-376.4z M8308.5-641c101.9-51,217.6-166.6,270.5-270.5c49-96,58.8-303.8,19.6-423.3c-43.1-131.3-164.6-264.6-297.9-329.3c-149-72.5-337.1-72.5-488,0c-335.2,164.6-427.3,605.6-180.3,885.9C7806.7-580.3,8079.1-525.4,8308.5-641z"
                          />
                          <path
                            d="M7859.6-821.4c-19.6-23.5-19.6-43.1-3.9-88.2c33.3-86.2-19.6-170.5-111.7-178.4c-58.8-5.9-68.6-13.7-68.6-54.9c0-41.2,9.8-51,62.7-54.9c90.2-9.8,137.2-86.2,105.8-174.4c-19.6-52.9-19.6-72.5-2-94.1c35.3-43.1,70.5-35.3,113.7,19.6c52.9,66.6,145,66.6,188.2-2c43.1-62.7,115.6-58.8,125.4,7.8c3.9,25.5-2,56.9-13.7,70.6c-17.6,19.6-13.7,43.1,11.8,86.2c27.4,47,51,62.7,103.9,66.6c117.6,9.8,90.1,133.3-29.4,133.3c-60.8,0-98,86.2-66.6,158.8c11.8,31.4,17.6,68.6,9.8,86.2c-17.6,45.1-86.2,35.3-121.5-19.6c-43.1-66.6-152.9-68.6-186.2-3.9C7936.1-786.1,7898.8-774.3,7859.6-821.4z"
                          />
                        </g>
                      </g>
                    </svg>
                    SUV
                  </a>
                </div>
              </div>
              <div class="second-row d-flex justify-content-center">
                <!-- hatchback -->
                <div class="car-type-button">
                  <a href="car-gallery.html?type=hatchback">
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
                        <g>
                          <g>
                            <path
                              d="M166.7,535.1c-42.8,0-77.4,34.6-77.4,77.4c0,3.3,0.3,6.5,0.7,9.7c4.8,38.2,37.3,67.7,76.7,67.7c40.5,0,73.7-31.2,77.1-70.8c0.2-2.2,0.3-4.4,0.3-6.6C244.1,569.7,209.5,535.1,166.7,535.1z M127.9,583.3l15.8,15.8c-1.2,2.1-2.2,4.4-2.8,6.8h-22.3C119.8,597.5,123,589.8,127.9,583.3z M118.6,619.3H141c0.6,2.4,1.6,4.7,2.8,6.7l-15.8,15.8C123.1,635.4,119.7,627.7,118.6,619.3z M160,660.6c-8.4-1.2-16-4.4-22.5-9.3l15.7-15.7c2.1,1.2,4.3,2.1,6.7,2.7V660.6z M160,586.7c-2.4,0.6-4.7,1.6-6.8,2.9l-15.8-15.8c6.5-4.9,14.2-8.2,22.6-9.3V586.7z M173.4,564.5c8.5,1.2,16.1,4.4,22.6,9.4l-15.8,15.8c-2.1-1.3-4.4-2.2-6.8-2.9V564.5z M173.4,660.6v-22.3c2.4-0.6,4.6-1.5,6.7-2.7l15.8,15.8C189.4,656.1,181.8,659.4,173.4,660.6z M205.5,641.9L189.6,626c1.2-2.1,2.3-4.3,2.9-6.7h22.3C213.5,627.7,210.4,635.5,205.5,641.9z M192.5,605.9c-0.6-2.4-1.6-4.7-2.8-6.8l15.8-15.8c4.9,6.5,8.1,14.2,9.3,22.6L192.5,605.9L192.5,605.9z"
                            />
                            <path
                              d="M818.5,535.1c-42.8,0-77.4,34.6-77.4,77.4c0,3.3,0.3,6.5,0.7,9.7c4.8,38.2,37.3,67.7,76.7,67.7c40.5,0,73.7-31.2,77.1-70.8c0.2-2.2,0.3-4.4,0.3-6.6C895.9,569.7,861.2,535.1,818.5,535.1z M779.7,583.3l15.8,15.8c-1.2,2.1-2.2,4.4-2.8,6.8h-22.3C771.6,597.5,774.8,589.8,779.7,583.3z M770.3,619.3h22.4c0.6,2.4,1.6,4.7,2.8,6.7l-15.8,15.8C774.9,635.4,771.5,627.7,770.3,619.3z M811.8,660.6c-8.4-1.2-16-4.4-22.5-9.3l15.7-15.7c2.1,1.2,4.3,2.1,6.7,2.7V660.6z M811.8,586.7c-2.4,0.6-4.7,1.6-6.8,2.9l-15.8-15.8c6.5-4.9,14.2-8.2,22.6-9.3V586.7z M825.2,564.5c8.5,1.2,16.1,4.4,22.6,9.4L832,589.6c-2.1-1.3-4.4-2.2-6.8-2.9V564.5z M825.2,660.6v-22.3c2.4-0.6,4.6-1.5,6.7-2.7l15.8,15.8C841.2,656.1,833.6,659.4,825.2,660.6z M857.3,641.9L841.4,626c1.2-2.1,2.3-4.3,2.9-6.7h22.3C865.3,627.7,862.2,635.5,857.3,641.9z M844.3,605.9c-0.6-2.4-1.6-4.7-2.8-6.8l15.8-15.8c4.9,6.5,8.1,14.2,9.3,22.6L844.3,605.9L844.3,605.9z"
                            />
                            <path
                              d="M983.3,510.4l-14.9-14.2l0-44.8c0-11.8-4.3-23.1-12.2-31.9l-55-60.9v0c-0.3-12.7-9.3-23.4-21.8-25.7c-65.4-12.3-268.3-44.1-428.9-0.9c-99.2,26.7-200.1,80.3-200.1,80.3s-175.2,22.3-217.2,77c-14.6,19-20.8,44.1-23,66.6c-3.1,31.5,17.6,60.3,48.5,67.2l16.2,3.7c-0.1-0.9-0.3-1.8-0.5-2.7c-0.5-4.1-0.8-8-0.8-11.7c0-51.3,41.7-93,93-93c51.3,0,93,41.7,93,93c0,2.7-0.2,5.3-0.4,7.9c-0.3,3.2-0.7,6.3-1.3,9.3l469.4,0.9c-0.4-2.2-0.9-4.3-1.1-6.5c-0.5-4.1-0.8-8-0.8-11.7c0-51.3,41.7-93,93-93c51.3,0,93,41.7,93,93c0,2.7-0.2,5.3-0.4,7.9c-0.3,3.6-0.9,7.2-1.6,10.7l6.4,0l26.7-14.6c27.9-15.2,45.7-44,46.9-75.7l0.5-13.9C990.2,520.7,987.8,514.7,983.3,510.4z M342.7,418.6l7.2-28.7c0,0,108.7-56.9,290.7-50.7V424l-291.4,23C349.2,447,350.7,428.8,342.7,418.6z M809.7,410.7l-137,10.8V341c45.1,3.3,94,10.4,146.6,23.1c5.3,1.3,9.6,5.2,11.3,10.4c1.7,5.2,0.6,10.9-2.9,15.1L809.7,410.7z"
                            />
                          </g>
                        </g>
                      </g>
                    </svg>
                    Hatchback
                  </a>
                </div>
                <!-- station wagon -->
                <div class="car-type-button">
                  <a href="car-gallery.html?type=wagon">
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
                        <g
                          transform="translate(0.000000,511.000000) scale(0.100000,-0.100000)"
                        >
                          <path
                            d="M6275.8,1786.8c-983.7-23.5-1638.9-107.6-2063.3-266c-371.6-138.8-972-440-1525.4-768.6c-254.2-150.6-254.2-150.6-430.2-164.3C1597.8,539,737.3,290.6,422.5,59.9C356,11,271.9-124,271.9-182.6c0-23.5-11.7-43-27.4-43c-13.7,0-48.9-17.6-74.3-39.1c-91.9-70.4-93.9-348.1-3.9-389.2c45-19.6,46.9-27.4,46.9-234.7c0-176,5.9-215.1,31.3-224.9c39.1-15.7,727.5-15.7,803.8,0c58.7,11.7,58.7,11.7,43,111.5c-23.5,142.8,11.7,348.1,84.1,500.7c162.3,342.2,573,557.4,934.8,494.8c260.1-46.9,533.9-236.6,651.2-449.8c97.8-179.9,136.9-432.2,93.9-614.1l-17.6-74.3h2030h2030l-17.6,74.3c-109.5,475.3,246.4,979.8,751,1063.9c365.7,60.6,762.7-150.6,929-492.8c66.5-136.9,113.4-359.8,93.9-451.8c-7.8-45-3.9-56.7,23.5-56.7c17.6,0,236.7,13.7,483.1,29.3c248.4,15.6,473.3,29.3,504.6,29.3c46.9,0,52.8,7.8,52.8,66.5c0,54.8,11.7,74.3,66.5,107.6c82.1,50.8,119.3,138.8,115.4,266c-1.9,76.3-11.7,103.7-48.9,131c-23.5,19.6-56.7,45-68.4,54.8c-17.6,15.6-25.4,97.8-25.4,289.4c0,600.4-90,903.5-422.4,1433.5l-105.6,168.2l-269.9,43c-829.2,133-1056.1,160.4-1412,170.1c-199.5,3.9-445.9,9.8-547.6,13.7C6897.8,1796.5,6571.1,1792.6,6275.8,1786.8z M6794.1,1468c25.4-15.6,78.2-107.6,125.2-215.1c80.2-183.8,82.1-187.7,76.3-387.2l-5.9-201.4l-704-52.8c-387.2-27.4-708-48.9-711.9-43c-15.7,15.6,39.1,815.5,58.7,850.7c25.4,46.9,54.8,52.8,379.4,74.3C6377.5,1518.8,6735.4,1505.1,6794.1,1468z M7938.2,1473.8c393.1-13.7,618-31.3,657.1-46.9c43-17.6,123.2-109.5,279.7-322.7c119.3-164.3,217.1-309,217.1-322.7s-11.7-33.3-23.5-45c-23.5-17.6-1691.7-95.8-1707.3-78.2c-15.6,15.6-381.4,823.3-381.4,840.9c0,11.7,66.5,15.6,181.9,7.8C7259.6,1501.2,7609.6,1485.6,7938.2,1473.8z M9232.9,1348.7c133-174.1,400.9-727.5,369.6-758.8c-29.3-29.3-111.5,29.3-201.4,142.8c-183.8,226.9-426.3,578.9-426.3,620c0,48.9,84.1,105.6,146.7,97.8C9140.9,1448.4,9191.8,1403.4,9232.9,1348.7z M5368.4,1407.3c5.9-15.6-25.4-217.1-72.4-447.9L5213.9,541l-354-11.7c-195.6-5.9-545.6-15.6-778.4-21.5l-426.3-9.8v205.4v205.3l121.3,90c330.5,242.5,596.5,338.3,1136.2,408.7C5198.3,1442.5,5354.7,1444.5,5368.4,1407.3z"
                          />
                          <path
                            d="M1740.6-243.2c-111.5-43-133-54.8-234.7-146.7c-291.4-266-287.5-735.4,7.8-1007.2c136.9-123.2,277.7-178,459.6-178c400.9,0,694.3,293.3,692.3,696.2c-2,256.2-160.4,500.6-397,610.2C2120-198.3,1893.2-188.5,1740.6-243.2z M2231.5-509.2c45-33.2,109.5-103.7,142.8-156.4c50.9-80.2,58.7-113.4,58.7-222.9c-3.9-487-643.4-643.4-860.5-211.2C1457-865.2,1550.9-589.4,1787.5-476c58.7,27.4,111.5,35.2,219,31.3C2125.9-450.6,2159.1-460.4,2231.5-509.2z"
                          />
                          <path
                            d="M1803.2-648.1c-5.9-17.6-1.9-48.9,11.7-68.4c29.3-50.9-23.5-135-86.1-135c-25.4,0-48.9-11.7-52.8-23.5c-17.6-45,5.9-74.3,60.6-74.3c70.4,0,115.4-72.4,82.1-134.9c-43-78.2,43-117.3,91.9-41.1c13.7,21.5,45,39.1,72.4,39.1c27.4,0,58.7-17.6,72.4-39.1c29.3-46.9,90-50.8,105.6-9.8c7.8,15.6,1.9,43-11.7,58.7c-39.1,47,3.9,121.2,78.2,136.9c48.9,9.8,60.6,21.5,54.8,54.8c-3.9,31.3-21.5,45-60.6,48.9c-64.5,7.8-95.8,60.6-80.2,138.9c15.6,78.2-43,109.5-86.1,45c-37.2-56.7-131-58.7-160.4-3.9C1869.7-609,1820.8-605.1,1803.2-648.1z"
                          />
                          <path
                            d="M7533.3-241.3c-168.2-60.6-299.2-176-393.1-346.2c-48.9-88-52.8-117.3-52.8-303.1c0-197.5,1.9-211.2,66.5-328.6c70.4-131,166.2-223,314.9-299.2c76.3-41.1,115.4-47,293.3-47c183.8,0,215.1,5.9,303.1,50.9c129.1,68.5,254.2,197.5,318.8,330.5c46.9,93.9,52.8,131,52.8,293.4c0,148.6-7.8,203.4-43,277.7c-58.7,129.1-205.3,279.7-334.4,342.2C7916.7-200.2,7683.9-188.5,7533.3-241.3z M7953.8-477.9C8124-564,8210-706.8,8212-896.5c0-217.1-138.8-393.1-352-443.9c-250.3-60.6-514.3,123.2-557.4,385.3c-27.4,178,84.1,391.2,248.4,473.3C7662.4-427.1,7852.1-425.1,7953.8-477.9z"
                          />
                          <path
                            d="M7588.1-644.2c-17.6-21.5-17.6-37.2,0-66.5c37.2-58.7-3.9-136.9-74.3-144.7c-72.4-7.8-78.2-80.2-5.9-90c68.4-9.8,119.3-80.2,93.9-127.1c-41.1-80.2,39.1-129.1,86.1-52.8c33.3,52.8,121.3,50.9,156.5-3.9c45-66.5,101.7-33.2,86,50.9c-15.6,80.2,2,129.1,45,129.1c19.6,0,50.8,11.7,70.4,27.4c31.3,23.5,33.3,31.3,11.7,58.7c-13.7,17.6-45,31.3-68.4,31.3c-58.7,0-97.8,66.5-68.5,119.3c43,82.1-35.2,134.9-84.1,56.7c-15.6-23.5-46.9-39.1-76.3-39.1c-27.4,0-66.5,17.6-86.1,39.1C7633.1-609,7617.4-607,7588.1-644.2z"
                          />
                        </g>
                      </g>
                    </svg>
                    Wagon
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </header>

    <main>
      <!-- our services section -->
      <section id="our-services" class="container">
        <h2 class="section-title text-center text-lg-start">Our Services</h2>
        <div class="row row-cols-1 row-cols-lg-3">
          <div class="col">
            <div class="service-card">
              <img
                class="img-fluid"
                src="images/car-gallery.jpg"
                alt="image of cars"
              />
              <div class="service-card-info">
                <h4 class="service-title">Car Gallery</h4>
                <a class="austhir-btn service-view-btn" href="car-gallery.html"
                  >View</a
                >
              </div>
            </div>
          </div>
          <div class="col">
            <div class="service-card">
              <img
                class="img-fluid"
                src="images/after-sales-service.jpg"
                alt="image of a mechanic fixing car"
              />
              <div class="service-card-info">
                <h4 class="service-title">Car Servicing</h4>
                <a
                  class="austhir-btn service-view-btn"
                  href="after-sales-service.html"
                  >View</a
                >
              </div>
            </div>
          </div>
          <div class="col">
            <div class="service-card">
              <img
                class="img-fluid"
                src="images/mod-gallery.jpg"
                alt="image of a modified car"
              />
              <div class="service-card-info">
                <h4 class="service-title">Mod Gallery</h4>
                <a class="austhir-btn service-view-btn" href="#">View</a>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- featured cars section -->
      <section id="featured-car" class="bg-white">
        <div class="container">
          <h2 class="section-title text-center text-lg-start">Featured Cars</h2>
          <!-- featured cards -->
          <div class="row row-cols-1 row-cols-md-1 row-cols-xl-2 g-1">
            <div class="col d-none d-xl-block">
              <a href="#">
                <div class="card h-100 austhir-card austhir-hot-card">
                  <div class="austhir-card-image">
                    <img
                      src="images/lamborghini.jpg"
                      class="card-img-top"
                      alt="image of an aventador"
                    />
                  </div>
                  <div class="card-body">
                    <h4 class="card-title austhir-card-title">
                      Lamborghini Aventador LP 700-4
                    </h4>
                    <h4 class="card-text austhir-card-price">৳ 5,40,00,000</h4>
                  </div>
                  <div class="card-footer austhir-card-footer">
                    <p class="year-badge austhir-footer-info">2017</p>
                    <p class="austhir-footer-info">Automatic</p>
                    <p class="austhir-footer-info">Petrol</p>
                    <p class="austhir-footer-info">Front Wheel Drive</p>
                  </div>
                </div>
              </a>
            </div>
            <div class="col">
              <!-- for desktop -->
              <div class="row row-cols-1 row-cols-md-2 gx-1 d-none d-xl-flex">
                <!-- hot card for mobile -->
                <div class="col d-block d-xl-none">
                  <a href="#">
                    <div class="card h-100 austhir-card">
                      <div class="austhir-card-image">
                        <img
                          src="images/lamborghini.jpg"
                          class="card-img-top"
                          alt="image of an aventador"
                        />
                      </div>
                      <div class="card-body">
                        <h4 class="card-title austhir-card-title">
                          Lamborghini Aventador LP 700-4
                        </h4>
                        <h4 class="card-text austhir-card-price">
                          ৳ 5,40,00,000
                        </h4>
                      </div>
                      <div class="card-footer austhir-card-footer">
                        <p class="year-badge austhir-footer-info">2017</p>
                        <p class="austhir-footer-info">Automatic</p>
                        <p class="austhir-footer-info">Petrol</p>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="col">
                  <a href="#">
                    <div class="card h-100 austhir-card">
                      <div class="austhir-card-image">
                        <img
                          src="images/mercedes-benz.jpg"
                          class="card-img-top"
                          alt="image of a C63 AMG"
                        />
                      </div>
                      <div class="card-body">
                        <h4 class="card-title austhir-card-title">
                          Mercedes-Benz C63 AMG
                        </h4>
                        <h4 class="card-text austhir-card-price">
                          ৳ 2,67,00,000
                        </h4>
                      </div>
                      <div class="card-footer austhir-card-footer">
                        <p class="year-badge austhir-footer-info">2019</p>
                        <p class="austhir-footer-info">Automatic</p>
                        <p class="austhir-footer-info">Diesel</p>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="col d-none d-xl-block">
                  <a href="#">
                    <div class="card h-100 austhir-card">
                      <div class="austhir-card-image">
                        <img
                          src="images/bmw.jpg"
                          class="card-img-top"
                          alt="image of i8"
                        />
                      </div>
                      <div class="card-body">
                        <h4 class="card-title austhir-card-title">BMW I8</h4>
                        <h4 class="card-text austhir-card-price">
                          ৳ 3,42,00,000
                        </h4>
                      </div>
                      <div class="card-footer austhir-card-footer">
                        <p class="year-badge austhir-footer-info">2018</p>
                        <p class="austhir-footer-info">Automatic</p>
                        <p class="austhir-footer-info">Petrol</p>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
              <!-- for tablets -->
              <div class="row row-cols-1 row-cols-md-2 g-1 d-flex d-xl-none">
                <!-- hot card for mobile -->
                <div class="col d-block d-xl-none">
                  <div class="card h-100 austhir-card">
                    <div class="austhir-card-image">
                      <img
                        src="images/lamborghini.jpg"
                        class="card-img-top"
                        alt="image of an aventador"
                      />
                    </div>
                    <div class="card-body">
                      <h4 class="card-title austhir-card-title">
                        Lamborghini Aventador LP 700-4
                      </h4>
                      <h4 class="card-text austhir-card-price">
                        ৳ 5,40,00,000
                      </h4>
                    </div>
                    <div class="card-footer austhir-card-footer">
                      <p class="year-badge austhir-footer-info">2017</p>
                      <p class="austhir-footer-info">Automatic</p>
                      <p class="austhir-footer-info">Petrol</p>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card h-100 austhir-card">
                    <div class="austhir-card-image">
                      <img
                        src="images/mercedes-benz.jpg"
                        class="card-img-top"
                        alt="image of a C63 AMG"
                      />
                    </div>
                    <div class="card-body">
                      <h4 class="card-title austhir-card-title">
                        Mercedes-Benz C63 AMG
                      </h4>
                      <h4 class="card-text austhir-card-price">
                        ৳ 2,67,00,000
                      </h4>
                    </div>
                    <div class="card-footer austhir-card-footer">
                      <p class="year-badge austhir-footer-info">2019</p>
                      <p class="austhir-footer-info">Automatic</p>
                      <p class="austhir-footer-info">Diesel</p>
                    </div>
                  </div>
                </div>
                <div class="col d-none d-xl-block">
                  <div class="card h-100 austhir-card">
                    <div class="austhir-card-image">
                      <img
                        src="images/bmw.jpg"
                        class="card-img-top"
                        alt="image of i8"
                      />
                    </div>
                    <div class="card-body">
                      <h4 class="card-title austhir-card-title">BMW I8</h4>
                      <h4 class="card-text austhir-card-price">
                        ৳ 3,42,00,000
                      </h4>
                    </div>
                    <div class="card-footer austhir-card-footer">
                      <p class="year-badge austhir-footer-info">2018</p>
                      <p class="austhir-footer-info">Automatic</p>
                      <p class="austhir-footer-info">Petrol</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row row-cols-md-2 g-1">
                <div class="col d-block d-xl-none">
                  <a href="#">
                    <div class="card h-100 austhir-card">
                      <div class="austhir-card-image">
                        <img
                          src="images/bmw.jpg"
                          class="card-img-top"
                          alt="image of i8"
                        />
                      </div>
                      <div class="card-body">
                        <h4 class="card-title austhir-card-title">BMW I8</h4>
                        <h4 class="card-text austhir-card-price">
                          ৳ 3,42,00,000
                        </h4>
                      </div>
                      <div class="card-footer austhir-card-footer">
                        <p class="year-badge austhir-footer-info">2018</p>
                        <p class="austhir-footer-info">Automatic</p>
                        <p class="austhir-footer-info">Petrol</p>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="col">
                  <a href="#">
                    <div class="card h-100 austhir-card">
                      <div class="austhir-card-image">
                        <img
                          src="images/koenigsegg.jpg"
                          class="card-img-top"
                          alt="image of agera rs"
                        />
                      </div>
                      <div class="card-body">
                        <h4 class="card-title austhir-card-title">
                          Koenigsegg Agera RS
                        </h4>
                        <h4 class="card-text austhir-card-price">
                          ৳ 7,87,00,000
                        </h4>
                      </div>
                      <div class="card-footer austhir-card-footer">
                        <p class="year-badge austhir-footer-info">2020</p>
                        <p class="austhir-footer-info">Automatic</p>
                        <p class="austhir-footer-info">Diesel</p>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="col d-none d-xl-block">
                  <a href="#">
                    <div class="card h-100 austhir-card">
                      <div class="austhir-card-image">
                        <img
                          src="images/audi.jpg"
                          class="card-img-top"
                          alt="image of an audi rs5"
                        />
                      </div>
                      <div class="card-body">
                        <h4 class="card-title austhir-card-title">Audi RS 5</h4>
                        <h4 class="card-text austhir-card-price">
                          ৳ 2,25,00,000
                        </h4>
                      </div>
                      <div class="card-footer austhir-card-footer">
                        <p class="year-badge austhir-footer-info">2020</p>
                        <p class="austhir-footer-info">Automatic</p>
                        <p class="austhir-footer-info">Petrol</p>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- hot sells section  -->
      <section id="hot-sells" class="container">
        <h2 class="section-title text-center text-lg-start">Hot Sells</h2>
        <div class="row">
          <div class="austhir-carousel owl-carousel">
            <a href="#">
              <div class="card h-100 austhir-card">
                <div class="austhir-card-image">
                  <img
                    src="images/lamborghini.jpg"
                    class="card-img-top"
                    alt="image of an aventador"
                  />
                </div>
                <div class="card-body">
                  <h4 class="card-title austhir-card-title">
                    Lamborghini Aventador LP 700-4
                  </h4>
                  <h4 class="card-text austhir-card-price">৳ 5,40,00,000</h4>
                </div>
                <div class="card-footer austhir-card-footer">
                  <p class="year-badge austhir-footer-info">2017</p>
                  <p class="austhir-footer-info">Automatic</p>
                  <p class="austhir-footer-info">Petrol</p>
                </div>
              </div>
            </a>
            <a href="#">
              <div class="card h-100 austhir-card">
                <div class="austhir-card-image">
                  <img
                    src="images/audi.jpg"
                    class="card-img-top"
                    alt="image of an audi rs5"
                  />
                </div>
                <div class="card-body">
                  <h4 class="card-title austhir-card-title">Audi RS 5</h4>
                  <h4 class="card-text austhir-card-price">৳ 2,25,00,000</h4>
                </div>
                <div class="card-footer austhir-card-footer">
                  <p class="year-badge austhir-footer-info">2020</p>
                  <p class="austhir-footer-info">Automatic</p>
                  <p class="austhir-footer-info">Petrol</p>
                </div>
              </div>
            </a>
            <a href="#">
              <div class="card h-100 austhir-card">
                <div class="austhir-card-image">
                  <img
                    src="images/lamborghini.jpg"
                    class="card-img-top"
                    alt="image of an aventador"
                  />
                </div>
                <div class="card-body">
                  <h4 class="card-title austhir-card-title">
                    Lamborghini Aventador LP 700-4
                  </h4>
                  <h4 class="card-text austhir-card-price">৳ 5,40,00,000</h4>
                </div>
                <div class="card-footer austhir-card-footer">
                  <p class="year-badge austhir-footer-info">2017</p>
                  <p class="austhir-footer-info">Automatic</p>
                  <p class="austhir-footer-info">Petrol</p>
                </div>
              </div>
            </a>
            <a href="#">
              <div class="card h-100 austhir-card">
                <div class="austhir-card-image">
                  <img
                    src="images/audi.jpg"
                    class="card-img-top"
                    alt="image of an audi rs5"
                  />
                </div>
                <div class="card-body">
                  <h4 class="card-title austhir-card-title">Audi RS 5</h4>
                  <h4 class="card-text austhir-card-price">৳ 2,25,00,000</h4>
                </div>
                <div class="card-footer austhir-card-footer">
                  <p class="year-badge austhir-footer-info">2020</p>
                  <p class="austhir-footer-info">Automatic</p>
                  <p class="austhir-footer-info">Petrol</p>
                </div>
              </div>
            </a>
            <a href="#">
              <div class="card h-100 austhir-card">
                <div class="austhir-card-image">
                  <img
                    src="images/lamborghini.jpg"
                    class="card-img-top"
                    alt="image of an aventador"
                  />
                </div>
                <div class="card-body">
                  <h4 class="card-title austhir-card-title">
                    Lamborghini Aventador LP 700-4
                  </h4>
                  <h4 class="card-text austhir-card-price">৳ 5,40,00,000</h4>
                </div>
                <div class="card-footer austhir-card-footer">
                  <p class="year-badge austhir-footer-info">2017</p>
                  <p class="austhir-footer-info">Automatic</p>
                  <p class="austhir-footer-info">Petrol</p>
                </div>
              </div>
            </a>
            <a href="#">
              <div class="card h-100 austhir-card">
                <div class="austhir-card-image">
                  <img
                    src="images/audi.jpg"
                    class="card-img-top"
                    alt="image of an audi rs5"
                  />
                </div>
                <div class="card-body">
                  <h4 class="card-title austhir-card-title">Audi RS 5</h4>
                  <h4 class="card-text austhir-card-price">৳ 2,25,00,000</h4>
                </div>
                <div class="card-footer austhir-card-footer">
                  <p class="year-badge austhir-footer-info">2020</p>
                  <p class="austhir-footer-info">Automatic</p>
                  <p class="austhir-footer-info">Petrol</p>
                </div>
              </div>
            </a>
            <a href="#">
              <div class="card h-100 austhir-card">
                <div class="austhir-card-image">
                  <img
                    src="images/lamborghini.jpg"
                    class="card-img-top"
                    alt="image of an aventador"
                  />
                </div>
                <div class="card-body">
                  <h4 class="card-title austhir-card-title">
                    Lamborghini Aventador LP 700-4
                  </h4>
                  <h4 class="card-text austhir-card-price">৳ 5,40,00,000</h4>
                </div>
                <div class="card-footer austhir-card-footer">
                  <p class="year-badge austhir-footer-info">2017</p>
                  <p class="austhir-footer-info">Automatic</p>
                  <p class="austhir-footer-info">Petrol</p>
                </div>
              </div>
            </a>
            <a href="#">
              <div class="card h-100 austhir-card">
                <div class="austhir-card-image">
                  <img
                    src="images/audi.jpg"
                    class="card-img-top"
                    alt="image of an audi rs5"
                  />
                </div>
                <div class="card-body">
                  <h4 class="card-title austhir-card-title">Audi RS 5</h4>
                  <h4 class="card-text austhir-card-price">৳ 2,25,00,000</h4>
                </div>
                <div class="card-footer austhir-card-footer">
                  <p class="year-badge austhir-footer-info">2020</p>
                  <p class="austhir-footer-info">Automatic</p>
                  <p class="austhir-footer-info">Petrol</p>
                </div>
              </div>
            </a>
          </div>
        </div>
      </section>

      <!-- why us section -->
      <section id="why_us" class="container">
        <h2 class="section-title text-center text-lg-start">Why Us?</h2>
        <div class="row row-cols-1 row-cols-lg-3 p-0">
          <div class="col mt-3">
            <div class="us-card h-100">
              <div class="us-card-icon">
                <svg
                  version="1.1"
                  id="Capa_1"
                  xmlns="http://www.w3.org/2000/svg"
                  xmlns:xlink="http://www.w3.org/1999/xlink"
                  x="0px"
                  y="0px"
                  viewBox="0 0 375.041 375.041"
                  style="enable-background: new 0 0 375.041 375.041"
                  xml:space="preserve"
                >
                  <g>
                    <g>
                      <path
                        d="M305.745,152.489c7.346-6.515,15.67-13.898,15.67-24.241s-8.324-17.727-15.67-24.242
			                  c-4.156-3.686-8.867-7.864-9.873-10.965c-1.105-3.399,0.275-9.773,1.494-15.397c2.035-9.399,4.342-20.054-1.523-28.111
                        c-5.918-8.131-16.828-9.221-26.453-10.182c-5.678-0.567-12.111-1.209-14.922-3.255c-2.74-1.993-5.301-7.856-7.56-13.029
                        c-3.902-8.929-8.322-19.049-18.006-22.192C227.114,0.295,225.216,0,223.259,0c-7.396,0-14.439,4.105-21.25,8.076
                        c-5.049,2.942-10.77,6.277-14.488,6.277c-3.721,0-9.441-3.335-14.49-6.277C166.22,4.105,159.177,0,151.78,0
                        c-1.959,0-3.857,0.295-5.644,0.875c-9.682,3.144-14.102,13.264-18.002,22.191c-2.26,5.173-4.822,11.036-7.56,13.029
                        c-2.813,2.046-9.246,2.688-14.922,3.255c-9.627,0.961-20.537,2.051-26.453,10.182c-5.865,8.058-3.559,18.712-1.521,28.111
                        c1.217,5.624,2.598,11.998,1.494,15.397c-1.008,3.1-5.717,7.278-9.873,10.964c-7.346,6.516-15.672,13.9-15.672,24.243
                        c0,10.344,8.326,17.729,15.672,24.243c4.156,3.686,8.867,7.863,9.873,10.961c1.104,3.401-0.277,9.776-1.494,15.4
                        c-2.037,9.399-4.344,20.054,1.52,28.111c5.912,8.122,16.805,9.218,26.422,10.178L66.661,342.688
                        c-0.871,2.804-0.025,5.857,2.164,7.814c2.188,1.957,5.318,2.456,8.008,1.278l40.315-17.656l23.24,37.377
                        c1.379,2.22,3.799,3.54,6.367,3.54c0.316,0,0.637-0.019,0.957-0.061c2.912-0.373,5.338-2.412,6.207-5.216l33.602-108.279
                        l33.6,108.279c0.871,2.804,3.297,4.843,6.209,5.216c0.32,0.042,0.639,0.061,0.957,0.061c2.568,0,4.986-1.321,6.367-3.54
                        l23.238-37.377l40.316,17.656c2.686,1.178,5.818,0.681,8.006-1.278c2.189-1.957,3.035-5.011,2.166-7.814l-38.959-125.545
                        c9.619-0.961,20.51-2.057,26.422-10.179c5.865-8.058,3.559-18.712,1.523-28.112c-1.219-5.624-2.6-11.999-1.494-15.399
                        C296.878,160.352,301.589,156.175,305.745,152.489z M144.458,349.641l-18-28.952c-1.969-3.167-5.965-4.405-9.379-2.91
                        l-31.227,13.676l34.504-111.194c0.07,0.048,0.148,0.092,0.217,0.141c2.738,1.993,5.301,7.855,7.56,13.028
                        c3.9,8.928,8.322,19.048,18.004,22.19c1.787,0.581,3.688,0.875,5.645,0.875c7.396,0,14.439-4.106,21.25-8.074
                        c1.127-0.657,2.287-1.332,3.453-1.987L144.458,349.641z M257.96,317.778c-3.412-1.494-7.408-0.254-9.377,2.91l-18.002,28.952
                        l-32.025-103.209c1.164,0.654,2.326,1.33,3.453,1.987c6.811,3.971,13.854,8.075,21.25,8.075c1.959,0,3.857-0.294,5.645-0.874
                        c9.682-3.144,14.104-13.264,18.004-22.191c2.26-5.173,4.822-11.035,7.56-13.028c0.066-0.049,0.145-0.093,0.217-0.14
                        l34.504,111.193L257.96,317.778z M281.604,158.82c-2.354,7.25-0.598,15.361,1.1,23.205c1.303,6.009,2.922,13.487,1.012,16.112
                        c-1.965,2.699-9.646,3.466-15.816,4.082c-7.943,0.793-16.158,1.612-22.258,6.053c-6.029,4.387-9.309,11.893-12.479,19.15
                        c-2.506,5.733-5.623,12.869-8.893,13.931c-0.293,0.095-0.623,0.141-1.012,0.141c-3.344,0-8.844-3.206-13.697-6.034
                        c-7.016-4.089-14.27-8.317-22.041-8.317c-7.773,0-15.027,4.229-22.043,8.317c-4.852,2.828-10.352,6.034-13.695,6.034
                        c-0.389,0-0.719-0.046-1.012-0.142c-3.27-1.061-6.387-8.196-8.893-13.93c-3.17-7.258-6.449-14.764-12.479-19.15
                        c-6.102-4.441-14.316-5.261-22.262-6.054c-6.17-0.616-13.848-1.383-15.813-4.081c-1.91-2.625-0.291-10.102,1.01-16.11
                        c1.699-7.844,3.457-15.955,1.102-23.208c-2.266-6.98-8.326-12.354-14.186-17.55c-4.981-4.418-10.625-9.424-10.625-13.021
                        c0-3.597,5.644-8.604,10.625-13.021c5.859-5.197,11.92-10.572,14.188-17.554c2.353-7.251,0.596-15.361-1.102-23.205
                        c-1.303-6.009-2.922-13.485-1.012-16.11c1.965-2.699,9.645-3.466,15.816-4.082c7.943-0.793,16.156-1.612,22.258-6.052
                        c6.029-4.389,9.309-11.895,12.479-19.153c2.506-5.733,5.623-12.868,8.891-13.93C151.06,15.047,151.392,15,151.78,15
                        c3.344,0,8.844,3.207,13.697,6.035c7.016,4.09,14.27,8.318,22.043,8.318c7.771,0,15.025-4.229,22.041-8.318
                        C214.415,18.207,219.915,15,223.259,15c0.389,0,0.719,0.047,1.01,0.142c3.27,1.061,6.387,8.196,8.893,13.931
                        c3.172,7.259,6.451,14.765,12.48,19.152c6.1,4.439,14.314,5.259,22.258,6.052c6.17,0.616,13.852,1.383,15.816,4.082
                        c1.91,2.625,0.291,10.103-1.012,16.11c-1.697,7.844-3.453,15.955-1.1,23.204c2.266,6.982,8.326,12.357,14.188,17.556
                        c4.979,4.416,10.623,9.423,10.623,13.02c0,3.597-5.645,8.603-10.623,13.019C289.931,146.464,283.87,151.839,281.604,158.82z"
                      />
                      <path
                        d="M187.52,43.244c-46.871,0-85.004,38.133-85.004,85.004s38.133,85.004,85.004,85.004s85.004-38.133,85.004-85.004
                        S234.392,43.244,187.52,43.244z M187.52,198.252c-38.602,0-70.004-31.403-70.004-70.004s31.402-70.004,70.004-70.004
                        c38.6,0,70.004,31.403,70.004,70.004S226.12,198.252,187.52,198.252z"
                      />
                      <path
                        d="M187.52,69.186c-32.566,0-59.063,26.495-59.063,59.063c0,4.143,3.357,7.5,7.5,7.5c4.143,0,7.5-3.357,7.5-7.5
                        c0-24.296,19.766-44.063,44.063-44.063c4.143,0,7.5-3.357,7.5-7.5S191.663,69.186,187.52,69.186z"
                      />
                    </g>
                  </g>
                </svg>
              </div>
              <div class="us-info d-flex flex-column align-items-center">
                <h3 class="us-title text-center">Wide range of brands</h3>
                <p class="us-text text-center">
                  We have world class brands like BMW, Audi, Mercedes-Benz etc.
                  cars in our showroom. We are providing a wide range of brands
                  as well as model of cars.
                </p>
              </div>
            </div>
          </div>
          <div class="col mt-3">
            <div class="us-card h-100">
              <div class="us-card-icon">
                <svg
                  version="1.1"
                  id="Layer_1"
                  xmlns="http://www.w3.org/2000/svg"
                  xmlns:xlink="http://www.w3.org/1999/xlink"
                  x="0px"
                  y="0px"
                  viewBox="0 0 512.002 512.002"
                  style="enable-background: new 0 0 512.002 512.002"
                  xml:space="preserve"
                >
                  <g>
                    <g>
                      <path
                        d="M255.92,0c-5.71,0-10.339,4.629-10.339,10.339v52.606c-0.001,5.711,4.629,10.34,10.339,10.34
                        c5.71,0,10.339-4.629,10.339-10.339V10.339C266.258,4.629,261.63,0,255.92,0z"
                      />
                    </g>
                  </g>
                  <g>
                    <g>
                      <path
                        d="M227.274,55.634l-37.199-37.198c-4.038-4.037-10.584-4.038-14.622,0.001c-4.038,4.037-4.038,10.584,0,14.622
                        l37.199,37.198c4.037,4.036,10.584,4.038,14.622-0.001C231.312,66.219,231.312,59.672,227.274,55.634z"
                      />
                    </g>
                  </g>
                  <g>
                    <g>
                      <path
                        d="M336.64,18.437c-4.037-4.038-10.583-4.038-14.622-0.001l-37.199,37.198c-4.038,4.038-4.038,10.585,0,14.622
                        c4.037,4.038,10.584,4.039,14.622,0.001l37.199-37.198C340.678,29.021,340.678,22.474,336.64,18.437z"
                      />
                    </g>
                  </g>
                  <g>
                    <g>
                      <path
                        d="M255.92,199.55c-5.71,0-10.339,4.629-10.339,10.339v52.607c0,5.71,4.629,10.339,10.339,10.339
                        c5.71,0,10.339-4.629,10.339-10.339v-52.607C266.258,204.179,261.63,199.55,255.92,199.55z"
                      />
                    </g>
                  </g>
                  <g>
                    <g>
                      <path
                        d="M227.274,202.579c-4.037-4.037-10.583-4.038-14.622-0.001l-37.199,37.198c-4.038,4.038-4.038,10.585,0,14.622
                        c4.037,4.038,10.583,4.039,14.622,0.001l37.199-37.198C231.312,213.163,231.312,206.616,227.274,202.579z"
                      />
                    </g>
                  </g>
                  <g>
                    <g>
                      <path
                        d="M336.64,239.776l-37.199-37.198c-4.038-4.037-10.584-4.038-14.622,0.001c-4.038,4.037-4.038,10.584,0,14.622
                        l37.199,37.198c4.037,4.036,10.584,4.038,14.622-0.001C340.678,250.361,340.678,243.814,336.64,239.776z"
                      />
                    </g>
                  </g>
                  <g>
                    <g>
                      <circle cx="400.387" cy="98.371" r="45.677" />
                    </g>
                  </g>
                  <g>
                    <g>
                      <path
                        d="M493.001,226.766L451.479,163.5c-3.233-4.927-8.73-7.895-14.623-7.895c-10.495,0-62.472,0-70.504,0l-60.215-7.039
                        l-21.674-51.774c-3.731-8.913-13.979-13.114-22.889-9.38c-2.149,0.9-4.016,2.185-5.572,3.732
                        c-1.556-1.547-3.422-2.833-5.572-3.732c-8.912-3.732-19.159,0.468-22.889,9.38l-21.674,51.774l-60.215,7.039
                        c-7.748,0-61.6,0-70.504,0c-5.893,0-11.39,2.968-14.623,7.894l-41.522,63.267c-2.404,3.662-3.346,8.094-2.64,12.416l12.253,75.062
                        c1.557,9.538,10.548,16.002,20.081,14.446c9.534-1.556,16.002-10.547,14.445-20.081l-11.156-68.341l13.733-20.925
                        c0,45.355-0.381,123.2-0.381,168.543L45.15,486.81c-2.318,11.358,5.011,22.446,16.37,24.763
                        c11.379,2.318,22.448-5.028,24.762-16.37l20.609-101.001c0.282-1.381,0.424-2.787,0.424-4.197v-66.773h9.062v167.773
                        c0,11.592,9.398,20.99,20.99,20.99s20.99-9.398,20.99-20.99c0-18.602,0.008-301.666,0.008-301.666l61.716-7.216
                        c6.273-0.734,11.664-4.793,14.104-10.619l21.815-52.11l21.815,52.11c2.439,5.827,7.831,9.885,14.104,10.619l61.716,7.216
                        c0,0,0.008,283.064,0.008,301.666c0,11.592,9.398,20.99,20.99,20.99s20.99-9.398,20.99-20.99V323.232h9.062v66.773
                        c0,1.41,0.142,2.815,0.424,4.197l20.61,101.001c2.317,11.353,13.397,18.687,24.762,16.37c11.358-2.318,18.688-13.405,16.37-24.763
                        l-20.185-98.923c0-28.158-0.38-95.435-0.38-168.544l13.733,20.925l-11.156,68.342c-1.556,9.534,4.911,18.524,14.445,20.081
                        c9.535,1.555,18.525-4.912,20.081-14.446l12.253-75.062C496.347,234.86,495.405,230.428,493.001,226.766z"
                      />
                    </g>
                  </g>
                  <g>
                    <g>
                      <circle cx="111.604" cy="98.371" r="45.677" />
                    </g>
                  </g>
                </svg>
              </div>
              <div class="us-info d-flex flex-column align-items-center">
                <h3 class="us-title text-center">Trusted by our clients</h3>
                <p class="us-text text-center">
                  We try to deliver our customer the best product that we have.
                  We also provide after sells service and thus we have gained
                  our clients trust.
                </p>
              </div>
            </div>
          </div>
          <div class="col mt-3">
            <div class="us-card h-100">
              <div class="us-card-icon">
                <svg
                  version="1.1"
                  id="Capa_1"
                  xmlns="http://www.w3.org/2000/svg"
                  xmlns:xlink="http://www.w3.org/1999/xlink"
                  x="0px"
                  y="0px"
                  viewBox="0 0 490.766 490.766"
                  style="enable-background: new 0 0 490.766 490.766"
                  xml:space="preserve"
                >
                  <g>
                    <path
                      d="M472.554,319.199c-9.4-0.7-28.8,9.8-34.1,12.5c-18.9,9.5-45.2,24.4-62.5,36.3c-1.2,0.8-2.8,1.9-4,2.7
                      c-7.8,5-16,8.3-25.1,10.3c-50.2,10.7-123.3,11.8-123.3,11.8l-4.3,0.2c-3.2,0.2-6.1-2.1-6.5-5.2c-0.5-3.4,2-6.6,5.6-6.9l108.7-10.3
                      c12-1.3,21.5-12.5,20.2-25.1s-12.9-21.8-24.9-20.5l-96.7-1.2c-6.6-0.1-17.1-1.7-23.4-3.6c-62.3-18.2-97.5-1.2-116.2,6.8
                      c-4.2-6.9-12.1-11.4-20.9-10.8l-41.7,2.8c-13.9,0.9-24.3,12.5-23.4,25.9l6.7,92.6c1,13.4,13,23.5,26.9,22.5l41.7-2.8
                      c8.8-0.6,16-6,19.1-13.4l183.2,7.9c20.4,2.2,39.5-0.3,57.5-9.7l5.2-2.7l138.5-81c6.8-4,11.6-10.9,11.9-18.5
                      C491.054,330.499,485.754,320.199,472.554,319.199z M48.954,438.099c-7.8,0-14.2-6.1-14.2-13.7s6.4-13.7,14.2-13.7
                      s14.2,6.1,14.2,13.7S56.754,438.099,48.954,438.099z M367.654,333.399c14.6-8,43.2-21.8,58.8-27.9c7.8-3.1,15.5-2.9,22.6,1.9
                      c-5.6,2-10.8,4.5-15.7,6.9c-16.4,8.2-45.3,23.9-59.4,33.8c-1.4,1-2.9,2-4.3,3c0.2-2.5,0.2-5.1-0.1-7.7c-0.3-3.3-1.1-6.4-2.1-9.4
                      C367.454,333.799,367.554,333.599,367.654,333.399z M411.354,296.199c-11.3,5-33,12.6-43.3,18.3l-7,3.8c-0.7,0.4-1.3,0.8-1.9,1.3
                      c-3.1-3.7-6.8-6.8-10.9-9.3c9.6-5.1,31-12,40.7-15.8C396.754,291.399,404.254,291.599,411.354,296.199z M114.954,232.999
                      c0-5.8,4.7-10.5,10.5-10.5h261.7c5.8,0,10.5,4.7,10.5,10.5s-4.7,10.5-10.5,10.5h-261.8
                      C119.654,243.499,114.954,238.799,114.954,232.999z M114.954,270.999c0-5.8,4.7-10.5,10.5-10.5h261.7c5.8,0,10.5,4.7,10.5,10.5
                      s-4.7,10.5-10.5,10.5h-261.8C119.654,281.499,114.954,276.799,114.954,270.999z M319.554,118.299c0-8.2,6.7-14.9,14.9-14.9
                      c8.2,0,14.9,6.7,14.9,14.9s-6.7,14.9-14.9,14.9C326.154,133.199,319.554,126.499,319.554,118.299z M163.254,118.299
                      c0-8.2,6.7-14.9,14.9-14.9s14.9,6.7,14.9,14.9s-6.7,14.9-14.9,14.9C169.854,133.199,163.254,126.499,163.254,118.299z
                      M139.254,205.899h234c13.5,0,24.5-11,24.5-24.5v-126.2c0-13.5-11-24.5-24.5-24.5h-234c-13.5,0-24.5,11-24.5,24.5v126.2
                      C114.754,194.899,125.754,205.899,139.254,205.899z M135.654,80.599c1.4,0.3,2.9,0.4,4.4,0.4c13.7,0,24.8-11.1,24.8-24.8
                      c0-1.6-0.1-3.1-0.4-4.6h182.2c-0.5,1.9-0.8,4-0.8,6.1c0,13.7,11.1,24.8,24.8,24.8c2.1,0,4.2-0.3,6.1-0.8v76.1c-2-0.5-4-0.8-6.1-0.8
                      c-13.7,0-24.8,11.1-24.8,24.8c0,1,0.1,2.1,0.2,3.1h-181.6c0.3-1.5,0.4-3,0.4-4.6c0-13.7-11.1-24.8-24.8-24.8
                      c-1.5,0-2.9,0.1-4.4,0.4V80.599z M234.954,118.299c0-11.8,9.6-21.5,21.5-21.5c11.8,0,21.5,9.6,21.5,21.5c0,11.8-9.6,21.5-21.5,21.5
                      S234.954,130.199,234.954,118.299z M256.454,171.899c29.6,0,53.5-24,53.5-53.5s-24-53.5-53.5-53.5c-29.6,0-53.5,24-53.5,53.5
                      S226.854,171.899,256.454,171.899z M256.454,82.399c19.8,0,35.9,16.1,35.9,35.9s-16.1,35.9-35.9,35.9s-35.9-16.1-35.9-35.9
                      S236.654,82.399,256.454,82.399z"
                    />
                  </g>
                </svg>
              </div>
              <div class="us-info d-flex flex-column align-items-center">
                <h3 class="us-title text-center">EMI facility</h3>
                <p class="us-text text-center">
                  We are providing EMI facility while purchasing our products so
                  that you can buy them without any tension. Normally, the EMI
                  has 12 to 18 months of expiration period.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- contact us section -->
      <section id="contact_us" class="bg-white">
        <div class="container">
          <h2 class="section-title text-center text-lg-start">Contact Us</h2>
          <div class="row row-cols-1 row-cols-lg-2 contact-us-card">
            <div
              class="col d-flex flex-column justify-content-center contact-info"
            >
              <div class="d-flex align-items-center">
                <div class="contact-icon">
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
                        d="M513.3,985.4c-3.9,3.1-8.6,4.6-13.3,4.6c-4.7,0-9.4-1.5-13.3-4.6C472.2,974,132.3,659.5,132.3,377.5C132.3,174.9,297.3,10,500,10c202.7,0,367.7,164.9,367.7,367.5C867.7,659.5,527.8,974,513.3,985.4z M500,205.9c-94.8,0-171.6,76.8-171.6,171.6c0,94.8,76.8,171.6,171.6,171.6c94.8,0,171.6-76.8,171.6-171.6C671.6,282.7,594.8,205.9,500,205.9z"
                      />
                    </g>
                  </svg>
                </div>
                <div class="w-100">
                  <h3 class="contact-title">Address</h3>
                  <p class="contact-text">
                    14/B Rajarbag (Opposite to Police Telecom Building),
                    Dhaka-1000.
                  </p>
                </div>
              </div>
              <div class="d-flex align-items-center mt-4">
                <div class="contact-icon">
                  <svg
                    version="1.1"
                    xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink"
                    x="0px"
                    y="0px"
                    viewBox="0 0 1000 1000"
                    enable-background="new 0 0 1000 1000"
                    xml:space="preserve"
                    fill="#3F87F5"
                  >
                    <g>
                      <g
                        transform="translate(0.000000,511.000000) scale(0.100000,-0.100000)"
                      >
                        <path
                          d="M1916.4,4915.3c-904.5-385.6-1570.6-937.2-1766.9-1456.1c-44.4-116.9-51.4-182.3-49.1-462.8c2.3-607.7,149.6-1280.8,446.4-2033.4C951.1-60.6,1547.1-983.8,2409.6-1923.4c1537.9-1673.4,3604-2776.6,5377.9-2865.4c331.9-18.7,486.1,11.7,745.6,147.2c432.4,224.4,965.3,937.2,1285.5,1717.9c93.5,224.4,100.5,271.1,51.4,364.6C9830.2-2481.9,7673-948.7,7539.8-902c-95.8,30.4-203.3,21-306.2-30.4c-35.1-18.7-226.7-233.7-427.7-476.8c-409-497.8-465.1-542.2-691.8-544.6c-123.9,0-158.9,11.7-446.4,170.6C4372.8-1075,3809.6-511.7,3101.4,783.1c-158.9,289.8-170.6,322.6-170.6,448.8c2.3,224.4,53.8,289.8,544.6,691.8c238.4,194,451.1,388,476.8,427.7c49.1,86.5,56.1,271.1,14,355.3c-16.4,30.4-378.6,549.2-804,1149.9c-497.8,708.2-794.7,1107.8-836.7,1128.9C2229.6,5034.5,2175.8,5025.2,1916.4,4915.3z"
                        />
                      </g>
                    </g>
                  </svg>
                </div>
                <div class="w-100">
                  <h3 class="contact-title">Phone</h3>
                  <p class="contact-text">123-456-7890</p>
                </div>
              </div>
              <div class="d-flex align-items-center mt-4">
                <div class="contact-icon">
                  <svg
                    version="1.1"
                    id="Layer_1"
                    xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink"
                    x="0px"
                    y="0px"
                    viewBox="0 0 512 512"
                    style="enable-background: new 0 0 512 512"
                    xml:space="preserve"
                    fill="#3F87F5"
                  >
                    <g id="XMLID_1_">
                      <path
                        id="XMLID_3_"
                        d="M508.1,122.5L375.7,257.2c-0.8,0.8-0.8,2.4, 0,3.2l92.9,98.5c6.3,6.3,6.3,16.5,0,22.8
                          c-3.2,3.2-7.1,4.7-11,4.7c-3.9,0-7.9-1.6-11-4.7L352.9,284c-0.8-0.8-2.4-0.8-3.9,0l-22.1,22.8c-18.9,18.9-44.1,29.9-70.9,29.9
                          c-27.6,0-52.8-11-72.5-30.7L161.5,284c-0.8-0.8-2.4-0.8-3.9,0L67,382.4c-3.2,3.2-7.1,4.7-11,4.7s-7.9-1.6-11-4.7
                          c-6.3-6.3-6.3-16.5,0-22.8l92.9-98.5c0.8-0.8,0.8-2.4,0-3.2L3.9,122.5c-1.6-1.6-3.9-0.8-3.9,1.6v270.2c0,22.1,18.1,39.4,39.4,39.4
                          h433.2c22.1,0,39.4-18.1,39.4-39.4V124.1C512,122.5,509.6,120.9,508.1,122.5z"
                      />
                      <path
                        id="XMLID_4_"
                        d="M256,304.4c18.1,0,35.4-7.1,48-20.5L497,87c-7.1-5.5-15-8.7-24.4-8.7H39.4c-9.5,0-18.1,3.2-24.4,8.7L208,284
                                        C220.6,297.4,237.9,304.4,256,304.4z"
                      />
                    </g>
                  </svg>
                </div>
                <div class="w-100">
                  <h3 class="contact-title">Email</h3>
                  <p class="contact-text">austhir@cars.com</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="contact-us-msg">
                <form
                  action="SUBMIT"
                  class="d-flex flex-column align-items-center"
                >
                  <input type="text" placeholder="Full name" />
                  <input
                    type="email"
                    name=""
                    id=""
                    placeholder="Email address"
                  />
                  <textarea
                    name="contact-message"
                    id=""
                    cols="30"
                    rows="10"
                    placeholder="Type your message..."
                  ></textarea>
                  <button class="austhir-btn submit-btn" type="submit">
                    Send
                  </button>
                </form>
              </div>
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
    <!-- owl carousel js -->
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
      integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
    <script>
      $(".austhir-carousel").owlCarousel({
        loop: true,
        margin: 12,
        nav: true,
        navText: [
          "<i class='fas fa-chevron-left'></i>",
          "<i class='fas fa-chevron-right'></i>",
        ],
        responsive: {
          0: {
            items: 1,
          },
          768: {
            items: 2,
          },
          992: {
            items: 3,
          },
          1250: {
            items: 4,
          },
        },
      });
    </script>
    <!-- custom js  -->
    <script src="js/header.js"></script>
    <script src="js/dropdown.js"></script>
  </body>
</html>
