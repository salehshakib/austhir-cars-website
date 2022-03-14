<?php

session_start();
include 'config.php';
$userEmail = $_SESSION['email'];
$userName = $_SESSION['name'];
$sql = "select * from userinfo where userName = '$userName' OR userEmail = '$userEmail'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    $userAddress = $row['userAddress'];
    $userMobile = $row['userMobile'];
    $userNID = $row['userNID'];
    $userPassport = $row['userPassport'];
  }
}


if (isset($_POST['save'])) {
    $userName = $_POST['userName'];
    $userAddress = $_POST['userAddress'];
    $userMobile = $_POST['userMobile'];
    $userNID = $_POST['userNID'];
    $userPassport = $_POST['userPassport'];
    $sql_update = "update userinfo set userName = '$userName', userAddress = '$userAddress', userPassport = '$userPassport',
                  userMobile = '$userMobile', userNID = '$userNID'  where userEmail = '$userEmail'";
    $result_update = mysqli_query($conn, $sql_update);

}


if(isset($_POST['payEMI'])){
  $tid = $_POST['tId'];
  $insNo = $_POST['installmentNo'];
  $installmentDate = $_POST['installmentDate'];



  $sqlQuery = "SELECT * FROM installment where tId = '$tid'";
  $result = mysqli_query($conn, $sqlQuery);
  if(mysqli_num_rows($result) > 0){
    while ($row = mysqli_fetch_assoc($result)) {
      $totalCost = $row['totalCost'];
      $paid = $row['paid'];
      $paidInstallment = $row['paidInstallment'];
      
      $paid = $paid + (int)(($totalCost - $paid)/(12 - $paidInstallment));  
    }
  }


  $sqlUpdate = "UPDATE installment set paid = '$paid', paidInstallment = '$insNo', installmentDate = '$installmentDate' where tId = '$tid'";
  $updateResult = mysqli_query($conn, $sqlUpdate);

  Header("Location: user-profile.php");
  
}



?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>AUSTHIR CARS | USER PROFILE</title>
    <!-- bootstrap stylesheet -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <!-- custom stylesheet -->
    <link rel="stylesheet" href="css/user-profile.css" />
    <!-- fontawesome kit -->
    <script
      src="https://kit.fontawesome.com/d1dbecc215.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <!-- header start -->
    <header>
    
    </header>
    <!-- header end -->
    <?php include'header.php'; ?>
    <main>
      <!-- basic info section -->
      <section class="user-section">
        <div class="container">
          <h1 class="user-profile-title">Basic Information</h1>
          <div class="col-md-12 user-info">
            <!-- user info table -->
            <div id="user-info-table" class="">
              <div class="d-flex justify-content-end">
                <button
                  onclick="toggleUserInfoEditForm()"
                  class="user-edit-btn"
                >
                  <i class="fas fa-edit"></i> Edit
                </button>
              </div>
              <table class="table austhir-user-table">
                <tbody>
                <tr>
                    <th scope="row">Name</th>
                    <td><?php echo $userName; ?></td>
                  </tr>
                  <tr>
                    <th scope="row">Email</th>
                    <td><?php echo $userEmail; ?></td>
                  </tr>
                  <tr>
                    <th scope="row">Phone Number</th>
                    <td><?php echo $userMobile; ?></td>
                  </tr>
                  <tr>
                    <th scope="row">NID</th>
                    <td><?php echo $userNID; ?></td>
                  </tr>
                  <tr>
                    <th scope="row">Address</th>
                    <td><?php echo $userAddress; ?></td>
                  </tr>
                  <tr>
                    <th scope="row">Passport</th>
                    <td><?php echo $userPassport; ?></td>
                  </tr>
                  
                </tbody>
              </table>
            </div>
            <!-- user info edit form -->
            <div id="user-edit-form" class="d-none">
              <form action="" method="POST">
                <div class="input-container">
                  <input type="text" name="userName" placeholder="Name" value="<?php echo $userName; ?> " readonly/>
                </div>
                <div class="input-container">
                  <input type="text" name="userMobile" placeholder="Phone Number" value="<?php echo $userMobile; ?>"/>
                  <input type="text" name="userNID" placeholder="NID Number" value="<?php echo $userNID; ?>"/>
                </div>
                <div class="input-container">
                  <input type="text" name="userPassport" placeholder="Passport Number" value="<?php echo $userPassport; ?>"/>
                </div>
                <div class="input-container">
                  <textarea
                    name="userAddress"
                    id=""
                    cols="30"
                    rows="10"
                    placeholder="Type Your Address..."
                  ><?php echo $userAddress; ?></textarea>
                </div>
                <div class="submit-btn-container">
                  <button
                    onclick="toggleUserInfoEditForm()"
                    type="button"
                    class="austhir-btn submit-btn austhir-alt-btn"
                  >
                    <i class="fas fa-ban"></i> Cancel
                  </button>
                  <button type="submit" name="save" class="austhir-btn submit-btn">
                    <i class="fas fa-save"></i> Save
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>

      <!-- transaction section -->
      <section class="user-section">
        <div class="container">
          <h1 class="user-profile-title">Transaction Log</h1>
          <div class="col-md-12 user-info">
            <!-- transaction log table -->
            <div id="user-info-table" class="">
              <h1 class="no-data-msg">Transaction Data</h1>
              <table class="table austhir-user-table log-table">
                <thead>
                  <tr>
                    <th scope="col">Serial No</th>
                    <th scope="col">Transaction ID</th>
                    <th scope="col">Product ID</th>
                    <th scope="col">Account Number</th>
                    <th scope="col">Transaction Type</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $i = 1;
                  $sql_ins = "SELECT * FROM transactions WHERE userEmail = '$userEmail'";
                  $result_ins = mysqli_query($conn, $sql_ins);
                  if (mysqli_num_rows($result_ins) > 0) {
                    while ($row = mysqli_fetch_assoc($result_ins)) {
                  ?>
                  <tr>
                    <th scope="row"><?php echo $i++; ?></th>
                    <td><?php echo $row['tId']; ?></td>
                    <td><?php echo $row['productId']; ?></td>
                    <td><?php echo $row['accountNo']; ?></td>
                    <td><?php echo $row['transType']; ?></td>
                  </tr>
                  <?php
                     
                    }
                  }
                  ?>
  
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </section>

      <!-- emi section -->
      <section class="user-section">
        <div class="container">
          <h1 class="user-profile-title">EMI Log</h1>
          <div class="col-md-12 user-info">
            <!-- transaction log table -->
            <div id="user-info-table" class="">
              <h1 class="no-data-msg">EMI Data</h1>
              <table class="table austhir-user-table log-table">
                <thead>
                  <tr>
                    <th scope="col">Serial No</th>
                    <th scope="col">Instalment ID</th>
                    <th scope="col">Transaction ID</th>
                    <th scope="col">Total Instalments</th>
                    <th scope="col">Paid Instalments</th>
                    <th scope="col">Next Instalment Date</th>
                    <th scope="col">Pay Instalments</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                  $j = 1;
                  $sql_emi = "SELECT * FROM installment WHERE userEmail = '$userEmail'";
                  $result_emi = mysqli_query($conn, $sql_emi);
                  if (mysqli_num_rows($result_emi) > 0) {
                    while ($row = mysqli_fetch_assoc($result_emi)) {
                  ?>
                  <tr>
                    <th scope="row"><?php echo $j++; ?></th>
                    <td class="install-id"><?php echo $row['insId']; ?></td>
                    <td class="transac-id"><?php echo $row['tId']; ?></td>
                    <td>12</td>
                    <td class="paid-install"><?php echo $row['paidInstallment']; ?></td>
                    <td class="next-ins-date"><?php echo $row['installmentDate']; ?></td>
                    <td>
                      <button
                        class="table-btn"
                        data-bs-toggle="modal"
                        data-bs-target="#emiModal"
                      >
                        Pay
                      </button>
                    </td>
                  </tr>
                  <?php
                     
                    }
                  }
                  ?>
                  
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </section>

      <!-- emi modal section-->
      <section>
        <!-- Modal -->
        <div
          class="modal fade"
          id="emiModal"
          tabindex="-1"
          role="dialog"
          aria-labelledby="exampleModalCenterTitle"
          aria-hidden="true"
        >
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">
                  Pay EMI Instrallments
                </h5>
                <button
                  type="button"
                  class="modal-close-btn"
                  data-bs-dismiss="modal"
                  aria-label="Close"
                >
                  <i class="fas fa-times"></i>
                </button>
              </div>
              <div class="modal-body">
                <!-- emi payment form -->
                <form action="" method="POST">
                  <h5 class="text-center">EMI Information</h5>
                  <div class="modal-input-container">
                    <label for="emi-id">EMI ID</label>
                    <input
                      type="text"
                      id="emi-id"
                      placeholder="EMI ID"
                      readonly
                    />
                  </div>
                  <div class="modal-input-container">
                    <label for="tran-id">Transaction ID</label>
                    <input name="tId"
                      type="text"
                      id="tran-id"
                      placeholder="Transaction ID"
                      readonly
                    />
                  </div>
                  <div class="modal-input-container">
                    <label for="ins-num">Instalment Number</label>
                    <input name="installmentNo"
                      type="text"
                      id="ins-num"
                      placeholder="Instalment Number"
                      readonly
                    />
                  </div>
                  <div class="modal-input-container">
                    <label for="ins-date">Next Instalment Date</label>
                    <input
                    name="installmentDate"
                      type="text"
                      id="ins-date"
                      placeholder="Next Instalment Date"
                      readonly
                    />
                  </div>
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
                  <div class="modal-footer">
                <button
                  type="button"
                  class="austhir-btn submit-btn austhir-alt-btn"
                  data-bs-dismiss="modal"
                >
                  <i class="fas fa-ban"></i> Close
                </button>
                <button type="submit" class="austhir-btn submit-btn" name="payEMI">
                  Save changes
                </button>
              </div>
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
    <!-- custom js  -->
    <script src="js/user-profile.js"></script>
    <script src="js/header.js"></script>
  </body>
</html>
