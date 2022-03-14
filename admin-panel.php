<?php
include 'config.php';
session_start();
if(!isset($_SESSION['adminName'])){
    if(isset($_SESSION['name']))
    Header("Location: index.php");
    else Header("Location: login-register.php");
}
error_reporting(0);
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

    <link rel="stylesheet" href="css/admin-panel.css">

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
        <div class="maincontent">
            <div class="container">
                <div class="row">
                    <div class="table-contents">
                        <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">User Name</th>
                                <th scope="col">Transaction ID</th>
                                <th scope="col">Handle</th>
                              </tr>
                            </thead>
                            <tbody>
                            <form action="" method="POST">
                            <?php
                            $i = 1;
                            $sql = "SELECT service.serviceId, service.tId, transactions.userEmail
                                    FROM service
                                    INNER JOIN transactions ON service.tId = transactions.tId";
                            $result = mysqli_query($conn, $sql);
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {    
                                       
                            ?>
                            
                            <tr>
                                <th scope="row"><?php echo $i++; ?></th>
                                <td><?php echo $row['userEmail']; ?></td>
                                <td><?php echo $row['tId']; ?></td>
                                <?php echo "<td><a href=\"delete.php?id=".$row['serviceId']."\">Done</a></td>" ?>
                            </tr>
                            
                            <?php
                                
                                }
                            }         
                            ?>
                              <!-- <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td><button type="button" class="btn success-btn">Done</button></td>
                              </tr>
                              <tr>
                                <th scope="row">3</th>
                                <td>Larry the Bird</td>
                                <td>@twitter</td>
                                <td><button type="button" class="btn success-btn">Done</button></td>
                              </tr> -->
                              </form>
                            </tbody>
                          </table>
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
    <script src="js/admin-header.js"></script>
</body>

</html>