<?php

error_reporting();
include 'config.php';

// $sql= "SELECT * FROM cars WHERE carBrand='Audi' order by carId DESC LIMIT 1";
// $sqlresult =  mysqli_query ($conn, $sql) or die( mysqli_error ($conn));

// if(mysqli_num_rows($sqlresult)>0)
// {
//     while($data = mysqli_fetch_assoc($sqlresult))
//     {
//         print_r($data['carId']);
//     }
// }

if(isset($_POST['addLisiting_btn'])){

    $carMaker = mysqli_real_escape_string($conn, $_POST['brands']);
    $sqlQuery = "SELECT * FROM cars WHERE carBrand = '$carMaker' ORDER BY carId DESC LIMIT 1" ;
    $result = mysqli_query($conn, $sqlQuery);
    if(mysqli_num_rows($result) > 0)
    while($row = mysqli_fetch_assoc($result)){
        $carId = $row['carId']; 
    }
    $str1 = (int)substr($carId, -3);
    $carId = substr($carId, 0, -3);
    $newstr = (string)($str1 + 1);
    if($str1 < 10){
        $carId = $carId."00".$newstr;
    }elseif($str1 < 100){
        $carId = $carId."0".$newstr;
    }
    else{
        $carId = $carId.$newstr;
    }
    print_r($carId);

    $carTitle =  mysqli_real_escape_string($conn, $_POST['carTitle']);

    $carGenre =  mysqli_real_escape_string($conn, $_POST['carType']);

    $carBrand =  mysqli_real_escape_string($conn, $_POST['brands']);

    $carModel =  mysqli_real_escape_string($conn, $_POST['carModel']);

    $carPrice =  mysqli_real_escape_string($conn, $_POST['carPrice']);

    $carReleaseDate =  mysqli_real_escape_string($conn, $_POST['carYear']);
    

    $carTransmission =  mysqli_real_escape_string($conn, $_POST['carTransmission']);
    $carFuelType =  mysqli_real_escape_string($conn, $_POST['carFuelType']);
    $carMilage=  mysqli_real_escape_string($conn, $_POST['carMileage']);
    $carCylinders =  mysqli_real_escape_string($conn, $_POST['carCylinder']);
    $carDescription =  mysqli_real_escape_string($conn, $_POST['carDescription']);
    $carVideo =  mysqli_real_escape_string($conn, $_POST['carVideo']);
    $carDriveType =  mysqli_real_escape_string($conn, $_POST['carDriveType']);
    $carMaker = mysqli_real_escape_string($conn, $_POST['brands']);

    



}



?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AUSTHIR CARS | LOGIN-REGISTRATION</title>
    <!-- bootstrap stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

    <!--dropzone css-->
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />

    <!-- custom stylesheet -->
    <link rel="stylesheet" href="css/dropdown.css" />
    <link rel="stylesheet" href="css/add-listing.css" />

    <!-- fontawesome kit -->
    <script src="https://kit.fontawesome.com/d1dbecc215.js" crossorigin="anonymous"></script>
</head>

<body>
    <!-- header start -->
    <header>
        <!-- navbar -->
        
        <!-- <nav id="austhir-nav" class="navbar navbar-expand-lg py-0">
            <div id="nav-bar" class="container-fluid">
                <a class="navbar-brand austhir-nav-link" href="index.html">
                    <img src="images/logo.png" alt="" width="90" height="90"
                        class="d-inline-block align-text-top" /></a>
                <button id="nav-hamburger-button" class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M6 19.5C6.82843 19.5 7.5 18.8284 7.5 18C7.5 17.1716 6.82843 16.5 6 16.5C5.17157 16.5 4.5 17.1716 4.5 18C4.5 18.8284 5.17157 19.5 6 19.5Z"
                            fill="#FF4604" />
                        <path
                            d="M30.09 16.5H11.91C11.1313 16.5 10.5 17.1313 10.5 17.91V18.09C10.5 18.8687 11.1313 19.5 11.91 19.5H30.09C30.8687 19.5 31.5 18.8687 31.5 18.09V17.91C31.5 17.1313 30.8687 16.5 30.09 16.5Z"
                            fill="#FF4604" />
                        <path
                            d="M30.09 24H5.91C5.13128 24 4.5 24.6313 4.5 25.41V25.59C4.5 26.3687 5.13128 27 5.91 27H30.09C30.8687 27 31.5 26.3687 31.5 25.59V25.41C31.5 24.6313 30.8687 24 30.09 24Z"
                            fill="#FF4604" />
                        <path
                            d="M30.09 9H5.91C5.13128 9 4.5 9.63128 4.5 10.41V10.59C4.5 11.3687 5.13128 12 5.91 12H30.09C30.8687 12 31.5 11.3687 31.5 10.59V10.41C31.5 9.63128 30.8687 9 30.09 9Z"
                            fill="#FF4604" />
                    </svg>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <div id="nav-items-container"
                        class="d-flex flex-column align-items-center flex-lg-row justify-content-between w-100">
                        <ul class="navbar-nav mb-2 mb-lg-0">
                            <li class="nav-item austhir-nav-item">
                                <a class="nav-link austhir-nav-link" aria-current="page"
                                    href="index.html#our-services">Our Services</a>
                            </li>
                            <li class="nav-item austhir-nav-item">
                                <a class="nav-link austhir-nav-link active" href="index.html#featured-car">Featured
                                    Cars</a>
                            </li>
                            <li class="nav-item austhir-nav-item">
                                <a class="nav-link austhir-nav-link" href="index.html#hot-sells">Hot Sells</a>
                            </li>
                            <li class="nav-item austhir-nav-item">
                                <a class="nav-link austhir-nav-link" href="index.html#why_us">Why Us?</a>
                            </li>
                            <li class="nav-item austhir-nav-item">
                                <a class="nav-link austhir-nav-link" href="index.html#contact_us">Contact Us</a>
                            </li>
                        </ul>

                        <ul class="navbar-nav me-0 me-lg-4 mb-2 mb-lg-0">
                            <li class="nav-item log-sign-nav-item d-flex align-items-center">
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
        </nav> -->
    </header>
    <!-- header end -->

    <main>
        <div class="content">
            <div class="container">
                <form action="" method="post">
                    <!--Add Listing-->
                    <div class="partition">
                        <div class="row">
                            <div class="text">
                                <h2>
                                    <b>
                                        Add Listing
                                    </b>
                                </h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="list">
                                <div class="container">
                                    <!--Listing Title-->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="mb-4">
                                                <label for="exampleInputName1" class="form-label input-title">Listing
                                                    Title</label>
                                                <input type="text" name="carTitle" class="form-control inputbox" id="exampleInputTitle"
                                                    placeholder="Enter title here" required>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Listing Title end-->
                                    <div class="row">
                                        <!--Type-->
                                        <div class="col-sm-6">
                                            <div class="mb-4">
                                                <label for="exampleInputName2"
                                                    class="form-label input-title">Type</label>
                                                <div class="search-car-dropdown form-field-container">
                                                    <div class="austhir-dropdown">
                                                        <div class="select">
                                                            <span>Select</span>
                                                            <i class="fa fa-chevron-left"></i>
                                                        </div>
                                                        <input type="hidden" name="carType" />
                                                        <ul class="dropdown-menu">
                                                            <li id="none">Select</li>
                                                            <li id="sedan">Sedan</li>
                                                            <li id="coupe">Coupe</li>
                                                            <li id="suv">SUV</li>
                                                            <li id="hatchback">Hatchback</li>
                                                            <li id="wagon">Wagon</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Type end-->
                                        <!--Make-->
                                        <div class="col-sm-6">
                                            <div class="mb-4">
                                                <label for="exampleInputName1"
                                                    class="form-label input-title">Make</label>
                                                    <!-- <input type="text" class="form-control inputbox" id="exampleInputTitle"
                                                    placeholder="Enter brand" name= "carMaker"required> -->
                                                <div class="search-car-dropdown form-field-container">
                                                    <div class="austhir-dropdown">
                                                        <div class="select">
                                                            <span>Select</span>
                                                            <i class="fa fa-chevron-left"></i>
                                                        </div>

                                                        <input type="hidden" name="brands"/>
                                                        <ul class="dropdown-menu">
                                                            <li id="none">Select</li>
                                                            <li id="audi">Audi</li>
                                                            <li id="bentley">Bentley</li>
                                                            <li id="bmw">BMW</li>
                                                            <li id="cadillac">Cadillac</li>
                                                            <li id="ferrari">Ferrari</li>
                                                            <li id="ford">Ford</li>
                                                            <li id="mercedes-benz">Mercedes-Benz</li>
                                                            <li id="porsche">Porsche</li>
                                                        </ul> 
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Make end-->
                                    </div>
                                    <div class="row">
                                        <!--Model-->
                                        <div class="col-sm-6">
                                            <div class="mb-4">
                                                <label for="exampleInputName1"
                                                    class="form-label input-title">Model</label>
                                                    <input type="text" class="form-control inputbox" id="exampleInputTitle"
                                                    placeholder="Enter model" name= "carModel" required>
                                            </div> 
                                        </div>
                                        <!--Model end-->
                                        <!--Price-->
                                        <div class="col-sm-6">
                                            <div class="mb-4">
                                                <label for="exampleInputName1" class="form-label input-title">Price
                                                    (BDT)</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control inputbox" name="carPrice"
                                                        id="exampleInputPrice" required>
                                                    <span class="input-group-text">৳</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Price end-->
                                    </div>
                                    <div class="row">
                                        <!--Year-->
                                        <div class="col-sm-6">
                                            <div class="mb-4">
                                                <label for="exampleInputName1"
                                                    class="form-label input-title">Year</label>
                                                <input type="text" name="carYear"class="form-control inputbox" id="exampleInputYear"
                                                    required>
                                            </div>
                                        </div>
                                        <!--Year end-->
                                        <!--Drive Type-->
                                        <div class="col-sm-6">
                                            <div class="mb-4">
                                                <label for="exampleInputName1" class="form-label input-title">Drive
                                                    Type</label>
                                                <div class="search-car-dropdown form-field-container">
                                                    <div class="austhir-dropdown">
                                                        <div class="select">
                                                            <span>Select</span>
                                                            <i class="fa fa-chevron-left"></i>
                                                        </div>
                                                        <input type="hidden" name="carDriveType" />
                                                        <ul class="dropdown-menu">
                                                            <li id="4WD">AWD/4WD</li>
                                                            <li id="front-wheel-drive">Front Wheel Drive</li>
                                                            <li id="rear-wheel-drive">Rear Wheel Drive</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Drive Type end-->
                                    </div>
                                    <div class="row">
                                        <!--Transmission-->
                                        <div class="col-sm-6">
                                            <div class="mb-4">
                                                <label for="exampleInputName2"
                                                    class="form-label input-title">Transmission</label>
                                                <div class="search-car-dropdown form-field-container">
                                                    <div class="austhir-dropdown">
                                                        <div class="select">
                                                            <span>Select</span>
                                                            <i class="fa fa-chevron-left"></i>
                                                        </div>
                                                        <input type="hidden" name="carTransmission" />
                                                        <ul class="dropdown-menu">
                                                            <li id="none">Select</li>
                                                            <li id="automatic">Automatic</li>
                                                            <li id="manual">Manual</li>
                                                            <li id="semi-automatic">Semi-Automatic</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Transmission end-->
                                        <!--Fuel Type-->
                                        <div class="col-sm-6">
                                            <div class="mb-4">
                                                <label for="exampleInputName1" class="form-label input-title">Fuel
                                                    Type</label>
                                                <div class="search-car-dropdown form-field-container">
                                                    <div class="austhir-dropdown">
                                                        <div class="select">
                                                            <span>Select</span>
                                                            <i class="fa fa-chevron-left"></i>
                                                        </div>
                                                        <input type="hidden" name="carFuelType" />
                                                        <ul class="dropdown-menu">
                                                            <li id="none">Select</li>
                                                            <li id="deisel">Deisel</li>
                                                            <li id="electric">Electric</li>
                                                            <li id="hybrid">Hybrid</li>
                                                            <li id="petrol">Petrol</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Fuel Type end-->
                                    </div>
                                    <div class="row">
                                        <!--Milage-->
                                        <div class="col-sm-6">
                                            <div class="mb-4">
                                                <label for="exampleInputName1"
                                                    class="form-label input-title">Mileage</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control inputbox" name="carMileage"
                                                        id="exampleInputMiles" required>
                                                    <span class="input-group-text">miles</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Milage end-->
                                        <!--Cylinders-->
                                        <div class="col-sm-6">
                                            <div class="mb-4">
                                                <label for="exampleInputName1"
                                                    class="form-label input-title">Cylinders</label>
                                                <div class="search-car-dropdown form-field-container">
                                                    <div class="austhir-dropdown">
                                                        <div class="select">
                                                            <span>Select</span>
                                                            <i class="fa fa-chevron-left"></i>
                                                        </div>
                                                        <input type="hidden" name="carCylinder" />
                                                        <ul class="dropdown-menu">
                                                            <li id="none">Select</li>
                                                            <li id="4">4</li>
                                                            <li id="6">6</li>
                                                            <li id="8">8</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Cylinders end-->
                                    </div>

                                    <div class="row">
                                        <!--Engine Size-->
                                        <div class="col-sm-6">
                                            <div class="mb-4">
                                                <label for="exampleInputName1"
                                                    class="form-label input-title">Engine Size</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control inputbox" name="engineSize"
                                                        id="exampleInputMiles">
                                                    <span class="input-group-text">Ltr.</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Engine Size end-->
                                        <!--Seats-->
                                        <div class="col-sm-6">
                                            <div class="mb-4">
                                                <label for="exampleInputName1"
                                                    class="form-label input-title">Seats</label>
                                                <div class="search-car-dropdown form-field-container">
                                                    <div class="austhir-dropdown">
                                                        <div class="select">
                                                            <span>Select</span>
                                                            <i class="fa fa-chevron-left"></i>
                                                        </div>
                                                        <input type="hidden" name="seats" />
                                                        <ul class="dropdown-menu">
                                                            <li id="none">Select</li>
                                                            <li id="2">2</li>
                                                            <li id="4">4</li>
                                                            <li id="5">5</li>
                                                            <li id="6">6</li>
                                                            <li id="8">8</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Seats end-->
                                    </div>
                                    <!--Description-->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="mb-4">
                                                <label for="exampleInputName1"
                                                    class="form-label input-title">Description</label>
                                                <textarea class="form-control desbox" id="exampleFormControlTextarea1" name="carDescription"
                                                    rows="12"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Description end-->
                                    <!--YT Link-->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="mb-4">
                                                <label for="exampleInputName1" class="form-label input-title">Video -
                                                    copy any online video link e.g. YouTube, Facebook, Instagram or
                                                    .mp4</label>
                                                <div class="input-group">
                                                    <span class="input-group-text"><i
                                                            class="fa fa-video-camera"></i></span>
                                                    <input type="text" class="form-control inputbox" name="carVideo"
                                                        id="exampleInputTitle" placeholder="Video Link" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--YT Link end-->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="mb-4">
                                            <input type="file" name="file">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" name="addLisiting_btn" class="btn austhir-btn add-submit">Add Listing</button>
                    <!--  -->
                </form>

                <!--Gallery-->
                <!-- <div class="partition">
                    <div class="row">
                        <div class="text">
                            <h2>
                                <b>
                                    Gallery
                                </b>
                            </h2>
                        </div>
                    </div>
                    <div class="row">
                        <form action="/file-upload" class="dropzone" id="my-awesome-dropzone"> </form>
                    </div>
                </div> -->
                <!--Gallery end-->
 
            </div>
        </div>
    </main>

    <!-- footer -->
    <footer>
        <div class="container-fluid h-100 d-flex align-items-center">
            <div class="row row-cols-1 row-cols-md-2 w-100 d-flex justify-content-between align-items-center">
                <div class="copyright-text text-center text-md-start">
                    <p>Copyright © Austhir Cars 2022. All rights reserved.</p>
                </div>

                <div class="social-links d-flex justify-content-center justify-content-md-end">
                    <a class="social-link" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="social-link" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="social-link" href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </footer>

    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

    <!--dropzone js-->
    <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>

    <!-- jQuery CDN  -->
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>


    <!-- custom js -->
    <script src="js/header.js"></script>
    <script src="js/dropdown.js"></script>
    <script src="js/filter.js"></script>
    <!-- <script>
        submitForms = function(){
            document.getElementById("add-listing-data").submit();
            document.getElementById("my-awesome-dropzone").submit();
        }
    </script> -->

</body>

</html>

