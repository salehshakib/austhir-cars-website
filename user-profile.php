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
      <?php include'header.php'; ?>
    </header>
    <!-- header end -->

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
                    <td>Milhan Joardar Aumi</td>
                  </tr>
                  <tr>
                    <th scope="row">Email</th>
                    <td>mjaumi2864@gmail.com</td>
                  </tr>
                  <tr>
                    <th scope="row">Phone Number</th>
                    <td>01788744803</td>
                  </tr>
                  <tr>
                    <th scope="row">NID</th>
                    <td>88554477120526</td>
                  </tr>
                  <tr>
                    <th scope="row">Address</th>
                    <td>B-15, G-4, Motijheel, A.G.B colony, Dhaka-1000</td>
                  </tr>
                  <tr>
                    <th scope="row">Passport</th>
                    <td>C 18265405</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <!-- user info edit form -->
            <div id="user-edit-form" class="d-none">
              <form action="">
                <div class="input-container">
                  <input type="text" placeholder="First Name" />
                  <input type="text" placeholder="last Name" />
                </div>
                <div class="input-container">
                  <input type="text" placeholder="Phone Number" />
                  <input type="text" placeholder="NID Number" />
                </div>
                <div class="input-container">
                  <input type="text" placeholder="Passport Number" />
                </div>
                <div class="input-container">
                  <textarea
                    name=""
                    id=""
                    cols="30"
                    rows="10"
                    placeholder="Type Your Address..."
                  ></textarea>
                </div>
                <div class="submit-btn-container">
                  <button
                    onclick="toggleUserInfoEditForm()"
                    type="button"
                    class="austhir-btn submit-btn austhir-alt-btn"
                  >
                    <i class="fas fa-ban"></i> Cancel
                  </button>
                  <button type="submit" class="austhir-btn submit-btn">
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
              <h1 class="no-data-msg">No Transaction Data!</h1>
              <table class="table austhir-user-table log-table d-none">
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
                  <tr>
                    <th scope="row">1</th>
                    <td>1232454510</td>
                    <td>14654410324012348</td>
                    <td>C-1012</td>
                    <td>CASH</td>
                  </tr>
                  <tr>
                    <th scope="row">1</th>
                    <td>1232454510</td>
                    <td>14654410324012348</td>
                    <td>C-1012</td>
                    <td>CASH</td>
                  </tr>
                  <tr>
                    <th scope="row">1</th>
                    <td>1232454510</td>
                    <td>14654410324012348</td>
                    <td>C-1012</td>
                    <td>CASH</td>
                  </tr>
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
              <h1 class="no-data-msg">No EMI Data!</h1>
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
                  <tr>
                    <th scope="row">1</th>
                    <td class="install-id">1232454510</td>
                    <td class="transac-id">12324123545413</td>
                    <td>12</td>
                    <td class="paid-install">1</td>
                    <td class="next-ins-date">17-6-2022</td>
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
                  <tr>
                    <th scope="row">1</th>
                    <td class="install-id">1232454511</td>
                    <td class="transac-id">12324123545414</td>
                    <td>12</td>
                    <td class="paid-install">2</td>
                    <td class="next-ins-date">28-2-2022</td>
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
                  <tr>
                    <th scope="row">1</th>
                    <td class="install-id">1232454512</td>
                    <td class="transac-id">12324123545415</td>
                    <td>12</td>
                    <td class="paid-install">3</td>
                    <td class="next-ins-date">14-3-2022</td>
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
                <form action="">
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
                    <input
                      type="text"
                      id="tran-id"
                      placeholder="Transaction ID"
                      readonly
                    />
                  </div>
                  <div class="modal-input-container">
                    <label for="ins-num">Instalment Number</label>
                    <input
                      type="text"
                      id="ins-num"
                      placeholder="Instalment Number"
                      readonly
                    />
                  </div>
                  <div class="modal-input-container">
                    <label for="ins-date">Next Instalment Date</label>
                    <input
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
                </form>
              </div>
              <div class="modal-footer">
                <button
                  type="button"
                  class="austhir-btn submit-btn austhir-alt-btn"
                  data-bs-dismiss="modal"
                >
                  <i class="fas fa-ban"></i> Close
                </button>
                <button type="submit" class="austhir-btn submit-btn">
                  Save changes
                </button>
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
