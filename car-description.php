<?php

include 'config.php';

session_start();

if(isset($_POST['buy'])){
    
    header("location: customization-page.php");
}


if(isset($_GET['carId'])){
    $_SESSION['carId'] = $carId = mysqli_real_escape_string($conn, $_GET['carId']);
    $sqlQuery = "SELECT * FROM cars JOIN carDetails ON cars.carId = carDetails.carId WHERE cars.carId = '$carId' ";
    $result = mysqli_query($conn, $sqlQuery);
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_array($result)){
            $carTitle = $row['carBrand'].' '.$row['carModel'].' '.$row['doors'].' '.$row['carGenre'].' '.$row['color'];
            $carPrice = $row['carPrice'];
            $carMaker = $row['carBrand'];
            $carModel = $row['carModel'];
            $carType = $row['carGenre'];
            $carColor = $row['color'];
            $carYear = $row['carReleaseDate'];
            $carDriveType = $row['driveType'];
            $carTransmission = $row['transmission'];
            $carFuelType = $row['fuelType'];
            $carCylinder = $row['cylinder'];
            $carEngineSize = $row['engineSize'];
            $carDoors = $row['doors'];
            $carSeats = $row['carSeats'];
            $carImage = "images/carImage/".$row['carImage'];

            if($row['descriptions'] === null){
                $carDescription = "How the adventure ended will be seen anon. Aouda was anxious, though she said nothing. As for Passepartout, he thought Mr. Fogg’s manoeuvre simply glorious. The captain had said “between eleven and twelve knots,” and the Henrietta confirmed his prediction.
                <br><br><br>
                If, then—for there were “ifs” still—the sea did not become too boisterous, if the wind did not veer round to the east, if no accident happened to the boat or its machinery, the Henrietta might cross the three thousand miles from New York to Liverpool in the nine days, between the 12th and the 21st of December. It is true that, once arrived, the affair on board the Henrietta, added to that of the Bank of England, might create more difficulties for Mr. Fogg than he imagined or could desire.";

            }else{
                $carDescription = $row['description'];
            }
            if($row['videoLink'] === null){
                $carVideoLink = 'https://www.youtube.com/embed/kz2KJvS7KhY';
                //echo $carVideoLink; 
            }else {
                $carVideoLink = $row['videoLink'];
                //echo $carVideoLink; 
            }
        }

        
    }
}else{
    Header("Location: car-gallery.php");
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

    <!-- custom stylesheet -->
    <link rel="stylesheet" href="css/car-description.css" />

    <!-- fontawesome kit -->
    <script src="https://kit.fontawesome.com/d1dbecc215.js" crossorigin="anonymous"></script>
</head>

<body>
    <!-- header start -->
    <header>
        
    <?php include 'header.php'; ?>
    </header>
    <!-- header end -->

    <main>
        <div class="maincontent">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="image-part">
                                <img class="car-img" src="<?php echo $carImage; ?>" alt="">
                            </div>
                        </div>
                        <div class="row" id="description-large-screen">
                            <h5 class="description-header">
                                Description
                            </h5>
                            <p><?php echo $carDescription; ?></p>
                            
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="row">
                            <div>
                                <h2 class="name"><?php echo $carTitle; ?></h2>
                            </div>
                        </div>
                        <div class="row">
                            <hr>
                        </div>
                        <div class="row">
                            <h2 class="amount">৳ <?php echo $carPrice; ?></h2>
                        </div>
                        <div class="row">
                            <div class="details">
                                <div class="table-responsive">
                                    <table class="table table-borderless">
                                      <tbody>
                                        <tr>
                                          <td>Make:</td>
                                          <td><?php echo $carMaker; ?></td>
                                        </tr>
                                        <tr>
                                          <td>Model:</td>
                                          <td><?php echo $carModel; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Type:</td>
                                            <td><?php echo $carType; ?></td>
                                          </tr>
                                        <!-- <tr>
                                          <td>Color:</td>
                                          <td></td>
                                        </tr> -->
                                        <tr>
                                            <td>Year:</td>
                                            <td><?php echo $carYear; ?></td>
                                        </tr>
                                        <tr>
                                          <td>Drive Type:</td>
                                          <td><?php echo $carDriveType; ?></td>
                                        </tr>
                                        <tr>
                                          <td>Transmission:</td>
                                          <td><?php echo $carTransmission; ?></td>
                                        </tr>
                                        <tr>
                                          <td>Fuel Type:</td>
                                          <td><?php echo $carFuelType; ?></td>
                                        </tr>
                                        <tr>
                                          <td>Cylinder:</td>
                                          <td><?php echo $carCylinder; ?></td>
                                        </tr>
                                        <tr><?php if($carEngineSize !== null){
                                        ?>
                                            <td>Engine Size:</td>
                                            <td><?php echo $carEngineSize; ?></td>

                                        <?php
                                            }
                                        ?>
                                        </tr>
                                        <tr>
                                            <td>Doors:</td>
                                            <td><?php echo $carDoors; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Seats:</td>
                                            <td><?php echo $carSeats; ?></td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </div>
                            </div>
                        </div>
                        <form action="customization-page.php" method="POST">
                            <button class="btn austhir-btn buy-btn" type="submit" name="buy">Buy Now</button>
                        </form>
                        
                    </div>
                    <div class="col-lg-12" id="description-small-screen">
                        <div class="row">
                            <h5 class="description-header">
                                Description
                            </h5>
                            <p><?php echo $carDescription; ?> </p>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <iframe class="youtube-link" width="100%" height="500" src="<?php echo $carVideoLink; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                        
                        
                    </div>
                </div>
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
    <script src="js/header.js"></script>
</body>

</html>