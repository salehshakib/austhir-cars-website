<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>AUSTHIR CARS | AFTER SALES SERVICE</title>
    <!-- bootstrap stylesheet -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <!-- custom stylesheet -->
    <link rel="stylesheet" href="css/dropdown.css" />
    <link rel="stylesheet" href="css/after-sales-page.css" />
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

    <main class="bg-white">
      <!-- after sales service section -->
      <section class="container">
        <div class="row row-cols-1">
          <h1 class="after-sales-title text-center">
            Welcome to <br />
            After Sales Service
          </h1>
          <p class="after-sales-text text-center">
            Please fill up the following form to share your problems.
          </p>
        </div>

        <!-- after sales form -->
        <div class="row row-cols-1">
          <div class="col p-0">
            <div class="after-sales-form">
              <form action="" class="w-100">
                <div class="d-block d-lg-flex justify-content-between">
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

                  <div class="form-field-container">
                    <input type="text" placeholder="Car's plate number" />
                  </div>
                </div>
                <textarea
                  name="problem-description"
                  id=""
                  cols="30"
                  rows="10"
                  placeholder="Describe your problem..."
                ></textarea>
                <div class="d-flex justify-content-center">
                  <button
                    class="austhir-btn austhir-submit-btn"
                    data-bs-toggle="modal"
                    data-bs-target="#exampleModal"
                    type="button"
                  >
                    Submit
                  </button>
                </div>
              </form>
            </div>
          </div>

          <!-- Modal -->
          <div
            class="modal fade"
            id="exampleModal"
            tabindex="-1"
            aria-labelledby="exampleModalLabel"
            aria-hidden="true"
          >
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">
                    Form submitted successfully
                  </h5>
                  <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Close"
                  ></button>
                </div>
                <div class="modal-body">
                  <p class="text-center">
                    Thank you for filling up this form, Your token number is
                    <br />
                    <span>507894</span>
                    <br />
                    We will let you know when your serial comes. Have a nice
                    day.
                  </p>
                </div>
                <div class="modal-footer">
                  <button
                    type="button"
                    class="austhir-btn austhir-modal-btn"
                    data-bs-dismiss="modal"
                    aria-label="Close"
                  >
                    Okay, Thank you.
                  </button>
                </div>
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
    <!-- custom js -->
    <script src="js/header.js"></script>
    <script src="js/dropdown.js"></script>
  </body>
</html>
