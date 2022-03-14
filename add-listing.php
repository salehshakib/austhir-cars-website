<?php
error_reporting();
session_start();
include 'config.php';

if(!isset($_SESSION['adminName'])){
    if(isset($_SESSION['name']))
    Header("Location: index.php");
    else Header("Location: login-register.php");
}

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
    $carSeat = mysqli_real_escape_string($conn, $_POST['seats']);
    $carEngineSize = mysqli_real_escape_string($conn, $_POST['engineSize']);
    $carDoor = mysqli_real_escape_string($conn, $_POST['carDoor']);
    $carColor = mysqli_real_escape_string($conn, $_POST['carColor']);

    $file_name = time()."-".rand(1000, 9999).".".pathinfo("images/carImage/".basename($_FILES['carImage']['name']), PATHINFO_EXTENSION);
    $temp_name = $_FILES["carImage"]["tmp_name"];
    $folder = "images/carImage/".$file_name;
    move_uploaded_file($temp_name, $folder);

    $insertCarsSql = "INSERT INTO cars (carId, carTittle, carBrand, carModel, carPrice, carGenre, carReleaseDate, carSeats, carImage) VALUES ('$carId','$carTitle','$carBrand', '$carModel', '$carPrice', '$carGenre', '$carReleaseDate', '$carSeat', '$file_name')";
    $insertCarsResult = mysqli_query($conn, $insertCarsSql);

    $insertCarDetailsSql = "INSERT INTO cardetails (carId, maker, transmission, engineSize, doors, cylinder, color, fuelType,
                            driveType, milage, descriptions, videoLink) VALUES ('$carId', '$carBrand', '$carTransmission', '$carEngineSize',
                            '$carDoor', '$carCylinders', '$carColor', '$carFuelType', '$carDriveType', '$carMilage', '$carDescription',
                            '$carVideo')";



    $insertCarDetailssResult = mysqli_query($conn, $insertCarDetailsSql);
    
    
    if($insertCarDetailssResult && $insertCarsResult){
        echo "<script>alert('Inserted Successfully.')</script>";
    }                     
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
      <?php include 'admin-header.php'; ?>
    </header>
    <!-- header end -->

    <main>
        <div class="content">
            <div class="container">
                <form action="" method="post" enctype="multipart/form-data">
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
                                                            <li id="Sedan">Sedan</li>
                                                            <li id="Coupe">Coupe</li>
                                                            <li id="SUV">SUV</li>
                                                            <li id="Hatchback">Hatchback</li>
                                                            <li id="Wagon">Wagon</li>
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
                                                            <li id="Audi">Audi</li>
                                                            <li id="Bentley">Bentley</li>
                                                            <li id="BMW">BMW</li>
                                                            <li id="Cadillac">Cadillac</li>
                                                            <li id="Ferrari">Ferrari</li>
                                                            <li id="Ford">Ford</li>
                                                            <li id="Mercedes-Benz">Mercedes-Benz</li>
                                                            <li id="Porsche">Porsche</li>
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
                                        <!-- Color -->
                                        <div class="col-sm-6">
                                            <div class="mb-4">
                                                <label for="exampleInputName2"
                                                    class="form-label input-title">Color</label>
                                                <div class="search-car-dropdown form-field-container">
                                                    <div class="austhir-dropdown">
                                                        <div class="select">
                                                            <span>Select</span>
                                                            <i class="fa fa-chevron-left"></i>
                                                        </div>
                                                        <input type="hidden" name="carColor" />
                                                        <ul class="dropdown-menu">
                                                            <li id="none">Select</li>
                                                            <li id="Red">Red</li>
                                                            <li id="Black">Black</li>
                                                            <li id="White">White</li>
                                                            <li id="Blue">Blue</li>
                                                            <li id="Yellow">Yellow</li>
                                                            <li id="Silver">Silver</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Color end-->
                                        <!--Door-->
                                        <div class="col-sm-6">
                                            <div class="mb-4">
                                                <label for="exampleInputName1"
                                                    class="form-label input-title">Door</label>
                                                    
                                                <div class="search-car-dropdown form-field-container">
                                                    <div class="austhir-dropdown">
                                                        <div class="select">
                                                            <span>Select</span>
                                                            <i class="fa fa-chevron-left"></i>
                                                        </div>

                                                        <input type="hidden" name="carDoor"/>
                                                        <ul class="dropdown-menu">
                                                            <li id="none">Select</li>
                                                            <li id="2-door">2 </li>
                                                            <li id="4-door">4</li>
                                                            <li id="5-door">5</li>
                                                        </ul> 
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Door end-->
                                    </div>
                                    <div class="row">
                                        <!--Year-->
                                        <div class="col-sm-6">
                                            <div class="mb-4">
                                                <label for="exampleInputName1"
                                                    class="form-label input-title">Year</label>
                                                <input type="text" name="carYear" class="form-control inputbox" id="exampleInputYear"
                                                    required>
                                            </div>
                                        </div>
                                        <!--Year end-->
                                        
                                        
                                    <!-- </div> -->
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
                                                            <li id="Front-Wheel-Drive">Front Wheel Drive</li>
                                                            <li id="Rear-Wheel-Drive">Rear Wheel Drive</li>
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
                                                            <li id="Automatic">Automatic</li>
                                                            <li id="Manual">Manual</li>
                                                            <li id="Semi-Automatic">Semi-Automatic</li>
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
                                                            <li id="Deisel">Deisel</li>
                                                            <li id="Electric">Electric</li>
                                                            <li id="Hybrid">Hybrid</li>
                                                            <li id="Petrol">Petrol</li>
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
                                                <textarea required class="form-control desbox" id="exampleFormControlTextarea1" name="carDescription"
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

                                    <!--Picture add-->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="mb-4">
                                            <input type="file" name="carImage" id="carImage" class = "image-upload" accept="image/*">
                                            </div>
                                        </div>
                                    </div>

                                    <!--Picture add end-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" name="addLisiting_btn" class="btn austhir-btn add-submit">Add Listing</button>
                    <!--  -->
                </form>

 
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
    <script src="js/admin-header.js"></script>
    <script src="js/dropdown.js"></script>
    <script src="js/filter.js"></script>
   
</body>

</html>

