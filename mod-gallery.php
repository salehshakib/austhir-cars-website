<?php

include 'config.php';

session_start();

if(!isset($_SESSION['name'])){
  Header("Location: login-register.php");
}

if(isset($_SESSION['adminName'])){
  Header("Location: admin-home.php");
}


?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>AUSTHIR CARS | MOD GALLERY</title>
    <!-- bootstrap stylesheet -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <!-- custom stylesheet -->
    <link rel="stylesheet" href="css/mod-gallery.css" />
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
    <header>
         <?php include 'purchase-header.php'; ?>
    </header>
    <!-- header end -->

    <main>
      <!-- car genre selection section -->
      <section id="car-genre-selection-section" class="container">
        <h2 class="genre-title">Select Your Car Genre</h2>
        <!-- car type filters -->
        <div class="row">
          <div
            class="car-type-filter-container d-block d-md-flex justify-content-center"
          >
            <div class="first-row d-flex justify-content-center">
              <!-- sedan -->
              <div class="car-type-button">
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
              </div>
              <!-- coupe -->
              <div class="car-type-button">
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
              </div>
              <!-- suv -->
              <div class="car-type-button">
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
              </div>
            </div>
            <div class="second-row d-flex justify-content-center">
              <!-- hatchback -->
              <div class="car-type-button">
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
              </div>
              <!-- station wagon -->
              <div class="car-type-button">
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
              </div>
            </div>
          </div>
        </div>
        <div class="d-flex justify-content-center mt-5">
          <button id="mods-search-btn" class="austhir-btn submit-btn">
            <i class="fas fa-search"></i> Search Mods
          </button>
        </div>
      </section>

      <section id="Not-found-msg-container" class="container d-none">
        <h1 id="Not-found-msg">Please, Select A Genre First</h1>
      </section>

      <!-- mods section -->
      <section id="mods-section" class="d-none">
        <!-- colors section -->
        <section class="container">
          <h2 class="mods-section-title">Available Resprays</h2>
          <div class="mods-container-5">
            <!-- color cards -->
            <div class="color-card" style="background-color: red">
              <p class="color-card-text">
                <span class="color-type">Red</span>
                <span class="color-price">৳10000</span>
              </p>
            </div>
            <div class="color-card" style="background-color: blue">
              <p class="color-card-text">
                <span class="color-type">Blue</span>
                <span class="color-price">৳10000</span>
              </p>
            </div>
            <div class="color-card" style="background-color: silver">
              <p class="color-card-text">
                <span class="color-type">Silver</span>
                <span class="color-price">৳10000</span>
              </p>
            </div>
            <div class="color-card" style="background-color: white">
              <p class="color-card-text">
                <span class="color-type">White</span>
                <span class="color-price">৳10000</span>
              </p>
            </div>
            <div class="color-card" style="background-color: black">
              <p class="color-card-text" style="color: white">
                <span class="color-type">Black</span>
                <span class="color-price">৳10000</span>
              </p>
            </div>
          </div>
        </section>

        <!-- tyre section -->
        <section class="container">
          <h2 class="mods-section-title">Available Tyres</h2>
          <div class="mods-container-5">
            <!-- color cards -->
            <div
              class="tyre-card"
              style="
                background-image: url(images/Bridgestone.jpg);
                background-color: rgba(0, 0, 0, 0.4);
                background-size: cover;
                background-position: center;
                background-blend-mode: multiply;
              "
            >
              <p class="tyre-card-text" style="color: white">
                <span class="tyre-brand">Bridgestone</span>
                <span class="tyre-price">৳20000</span>
              </p>
            </div>
            <div
              class="tyre-card"
              style="
                background-image: url(images/Michelin.jpg);
                background-color: rgba(0, 0, 0, 0.4);
                background-size: cover;
                background-position: center;
                background-blend-mode: multiply;
              "
            >
              <p class="tyre-card-text" style="color: white">
                <span class="tyre-brand">Michelin</span>
                <span class="tyre-price">৳35000</span>
              </p>
            </div>
            <div
              class="tyre-card"
              style="
                background-image: url(images/Goodyear.jpg);
                background-color: rgba(0, 0, 0, 0.4);
                background-size: cover;
                background-position: center;
                background-blend-mode: multiply;
              "
            >
              <p class="tyre-card-text" style="color: white">
                <span class="tyre-brand">Goodyear</span>
                <span class="tyre-price">৳32000</span>
              </p>
            </div>
            <div
              class="tyre-card"
              style="
                background-image: url(images/Pirelli.jpg);
                background-color: rgba(0, 0, 0, 0.4);
                background-size: cover;
                background-position: center;
                background-blend-mode: multiply;
              "
            >
              <p class="tyre-card-text" style="color: white">
                <span class="tyre-brand">Pirelli</span>
                <span class="tyre-price">৳43000</span>
              </p>
            </div>
            <div
              class="tyre-card"
              style="
                background-image: url(images/Continental.jpg);
                background-color: rgba(0, 0, 0, 0.4);
                background-size: cover;
                background-position: center;
                background-blend-mode: multiply;
              "
            >
              <p class="tyre-card-text" style="color: white">
                <span class="tyre-brand">Continental</span>
                <span class="tyre-price">৳27000</span>
              </p>
            </div>
          </div>
        </section>

        <!-- rim section -->
        <section class="container">
          <h2 class="mods-section-title">Available Rims</h2>
          <div class="mods-container-5">
            <!-- color cards -->
            <div
              class="rim-card"
              style="
                background-image: url(images/BBS.jpg);
                background-color: rgba(0, 0, 0, 0.4);
                background-size: cover;
                background-position: center;
                background-blend-mode: multiply;
              "
            >
              <p class="rim-card-text text-center" style="color: white">
                <span class="rim-size">16"</span>
                <span class="rim-brand">BBS</span>
                <span class="rim-price">৳70000</span>
              </p>
            </div>
            <div
              class="rim-card"
              style="
                background-image: url(images/TSW.jpg);
                background-color: rgba(0, 0, 0, 0.4);
                background-size: cover;
                background-position: center;
                background-blend-mode: multiply;
              "
            >
              <p class="rim-card-text text-center" style="color: white">
                <span class="rim-size">17"</span>
                <span class="rim-brand">TSW</span>
                <span class="rim-price">৳34000</span>
              </p>
            </div>
            <div
              class="rim-card"
              style="
                background-image: url(images/Vossen.jpg);
                background-color: rgba(0, 0, 0, 0.4);
                background-size: cover;
                background-position: center;
                background-blend-mode: multiply;
              "
            >
              <p class="rim-card-text text-center" style="color: white">
                <span class="rim-size">18"</span>
                <span class="rim-brand">Vosen</span>
                <span class="rim-price">৳76000</span>
              </p>
            </div>
            <div
              class="rim-card"
              style="
                background-image: url(images/Konig.jpg);
                background-color: rgba(0, 0, 0, 0.4);
                background-size: cover;
                background-position: center;
                background-blend-mode: multiply;
              "
            >
              <p class="rim-card-text text-center" style="color: white">
                <span class="rim-size">20"</span>
                <span class="rim-brand">Konig</span>
                <span class="rim-price">৳131000</span>
              </p>
            </div>
            <div
              class="rim-card"
              style="
                background-image: url(images/Enkei.jpg);
                background-color: rgba(0, 0, 0, 0.4);
                background-size: cover;
                background-position: center;
                background-blend-mode: multiply;
              "
            >
              <p class="rim-card-text text-center" style="color: white">
                <span class="rim-size">22"</span>
                <span class="rim-brand">Enkei</span>
                <span class="rim-price">৳197000</span>
              </p>
            </div>
          </div>
        </section>

        <!-- light section -->
        <section class="container">
          <h2 class="mods-section-title">Available Lights</h2>
          <div class="mods-container-5">
            <!-- color cards -->

            <!-- color cards -->
            <div
              class="light-card"
              style="
                background-image: url(images/led-hella.jpg);
                background-color: rgba(0, 0, 0, 0.4);
                background-size: cover;
                background-position: center;
                background-blend-mode: multiply;
              "
            >
              <p class="light-card-text text-center" style="color: white">
                <span class="light-type">LED</span>
                <br />
                <span class="light-brand">HELLA</span>
                <span class="light-price">৳200649</span>
              </p>
            </div>
            <div
              class="light-card"
              style="
                background-image: url(images/xenon-koito.jpg);
                background-color: rgba(0, 0, 0, 0.4);
                background-size: cover;
                background-position: center;
                background-blend-mode: multiply;
              "
            >
              <p class="light-card-text text-center" style="color: white">
                <span class="light-type">Xenon</span>
                <br />
                <span class="light-brand">KOITO</span>
                <span class="light-price">৳150246</span>
              </p>
            </div>
            <div
              class="light-card"
              style="
                background-image: url(images/halogen-magneti.jpg);
                background-color: rgba(0, 0, 0, 0.4);
                background-size: cover;
                background-position: center;
                background-blend-mode: multiply;
              "
            >
              <p class="light-card-text text-center" style="color: white">
                <span class="light-type">Halogen</span>
                <br />
                <span class="light-brand">Magneti</span>
                <span class="light-price">৳50472</span>
              </p>
            </div>
            <div
              class="light-card"
              style="
                background-image: url(images/halogen-koito.jpg);
                background-color: rgba(0, 0, 0, 0.4);
                background-size: cover;
                background-position: center;
                background-blend-mode: multiply;
              "
            >
              <p class="light-card-text text-center" style="color: white">
                <span class="light-type">Halogen</span>
                <br />
                <span class="light-brand">KOITO</span>
                <span class="light-price">৳40235</span>
              </p>
            </div>
            <div
              class="light-card"
              style="
                background-image: url(images/xenon-hella.jpg);
                background-color: rgba(0, 0, 0, 0.4);
                background-size: cover;
                background-position: center;
                background-blend-mode: multiply;
              "
            >
              <p class="light-card-text text-center" style="color: white">
                <span class="light-type">Xenon</span>
                <br />
                <span class="light-brand">HELLA</span>
                <span class="light-price">৳250333</span>
              </p>
            </div>
          </div>
        </section>

        <!-- window tint section -->
        <section class="container">
          <h2 class="mods-section-title">Available Window Tints</h2>
          <div class="mods-container-5">
            <!-- color cards -->
            <div
              class="tint-card"
              style="
                background-image: url(images/dyed-window-tint.jpg);
                background-color: rgba(0, 0, 0, 0.4);
                background-size: cover;
                background-position: center;
                background-blend-mode: multiply;
              "
            >
              <p class="tint-card-text text-center" style="color: white">
                <span class="tint-type">Dyed Window Tint</span>
                <span class="tint-price">৳5275</span>
              </p>
            </div>
            <div
              class="tint-card"
              style="
                background-image: url(images/dyed-window-tint.jpg);
                background-color: rgba(0, 0, 0, 0.4);
                background-size: cover;
                background-position: center;
                background-blend-mode: multiply;
              "
            >
              <p class="tint-card-text text-center" style="color: white">
                <span class="tint-type">Metalized Window Tint</span>
                <span class="tint-price">৳6755</span>
              </p>
            </div>
            <div
              class="tint-card"
              style="
                background-image: url(images/dyed-window-tint.jpg);
                background-color: rgba(0, 0, 0, 0.6);
                background-size: cover;
                background-position: center;
                background-blend-mode: multiply;
              "
            >
              <p class="tint-card-text text-center" style="color: white">
                <span class="tint-type">Carbon Tint Film</span>
                <span class="tint-price">৳8576</span>
              </p>
            </div>
            <div
              class="tint-card"
              style="
                background-image: url(images/dyed-window-tint.jpg);
                background-color: rgba(0, 0, 0, 0.4);
                background-size: cover;
                background-position: center;
                background-blend-mode: multiply;
              "
            >
              <p class="tint-card-text text-center" style="color: white">
                <span class="tint-type">Ceramic Window Tint</span>
                <span class="tint-price">৳4296</span>
              </p>
            </div>
            <div
              class="tint-card"
              style="
                background-image: url(images/dyed-window-tint.jpg);
                background-color: rgba(0, 0, 0, 0.4);
                background-size: cover;
                background-position: center;
                background-blend-mode: multiply;
              "
            >
              <p class="tint-card-text text-center" style="color: white">
                <span class="tint-type"> Crystalline Window Tint</span>
                <br />
                <span class="tint-price">৳9460</span>
              </p>
            </div>
          </div>
        </section>
      </section>

      <section>
        <!-- mod purchase modal -->
        <div class="modal fade" id="purchaseModal" tabindex="-1" aria-labelledby="purchaseModal" aria-hidden="true">
          <div class="modal-dialog modal-xl">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Selected Mods</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <table class="table table-bordered modal-table">
                  <thead>
                    <tr>
                      <th scope="col">Serial No</th>
                      <th scope="col">Product ID</th>
                      <th scope="col">Name</th>
                      <th scope="col">Type</th>
                      <th scope="col">Brand</th>
                      <th scope="col">Size</th>
                      <th scope="col">Unit Price</th>
                      <th scope="col">Quantity</th>
                      <th scope="col">Product Price</th>
                    </tr>
                  </thead>
                  <tbody id="modal-table-body">
                  </tbody>
                  <tfoot>
                    <tr>
                      <td></td>
                      <td colspan="7" class="text-end">Total Price</td>
                      <th id="total-price" scope="row">৳00</th>
                    </tr>
                  </tfoot>
                </table>

                <!-- modal payment table -->
                <form action="">
                    <!-- hidden table inputs -->
                    <input type="hidden" id="row-1-prod-id">
                    <input type="hidden" id="row-1-name">
                    <input type="hidden" id="row-1-type">
                    <input type="hidden" id="row-1-brand">
                    <input type="hidden" id="row-1-size">
                    <input type="hidden" id="row-1-unit-price">
                    <input type="hidden" id="row-1-quantity">
                    <input type="hidden" id="row-1-prod-price">

                    <input type="hidden" id="row-2-prod-id">
                    <input type="hidden" id="row-2-name">
                    <input type="hidden" id="row-2-type">
                    <input type="hidden" id="row-2-brand">
                    <input type="hidden" id="row-2-size">
                    <input type="hidden" id="row-2-unit-price">
                    <input type="hidden" id="row-2-quantity">
                    <input type="hidden" id="row-2-prod-price">
                    
                    <input type="hidden" id="row-3-prod-id">
                    <input type="hidden" id="row-3-name">
                    <input type="hidden" id="row-3-type">
                    <input type="hidden" id="row-3-brand">
                    <input type="hidden" id="row-3-size">
                    <input type="hidden" id="row-3-unit-price">
                    <input type="hidden" id="row-3-quantity">
                    <input type="hidden" id="row-3-prod-price">

                    <input type="hidden" id="row-4-prod-id">
                    <input type="hidden" id="row-4-name">
                    <input type="hidden" id="row-4-type">
                    <input type="hidden" id="row-4-brand">
                    <input type="hidden" id="row-4-size">
                    <input type="hidden" id="row-4-unit-price">
                    <input type="hidden" id="row-4-quantity">
                    <input type="hidden" id="row-4-prod-price">

                    <input type="hidden" id="row-5-prod-id">
                    <input type="hidden" id="row-5-name">
                    <input type="hidden" id="row-5-type">
                    <input type="hidden" id="row-5-brand">
                    <input type="hidden" id="row-5-size">
                    <input type="hidden" id="row-5-unit-price">
                    <input type="hidden" id="row-5-quantity">
                    <input type="hidden" id="row-5-prod-price">

                    <input type="hidden" id="row-total-price">

                    <h5 class="text-center mt-4">Account Information</h5>
                    <div class="modal-input-container">
                      <label for="acc-num">Bank Account Number</label>
                      <input
                        type="text"
                        id="acc-num"
                        placeholder="Bank Account Number"
                        required
                      />
                    </div>
                    <div class="modal-input-container">
                      <label for="acc-pin">PIN</label>
                      <input
                        type="password"
                        id="acc-pin"
                        placeholder="PIN"
                        required
                      />
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="austhir-btn austhir-alt-btn" data-bs-dismiss="modal"><i class="fas fa-ban"></i> Cancel</button>
                    <button type="submit" class="austhir-btn submit-btn"><i class="fas fa-credit-card"></i> Purchase Now</button>
                  </div>
                </form>
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
    <!-- custom js  -->
    <script src="js/mod-gallery.js"></script>
    <script src="js/header.js"></script>
  </body>
</html>
