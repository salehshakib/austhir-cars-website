 <!-- navbar -->
      <nav class="navbar navbar-expand-lg py-0">
        <div id="nav-bar" class="container-fluid">
          <a class="navbar-brand austhir-nav-link" href="index.php">
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

              <!-- user session info-->
              <?php if(isset($_SESSION['name'])){ ?>
                  <div id="user-session-info-container" class="me-4">
                    <div id="user-session-info" class="d-flex align-items-center">
                      <p class="austhir-nav-link me-2 mb-0"><?php echo $_SESSION['name'] ?></p>
                      <span class="user-image"><i class="fas fa-user"></i></span>
                      <span id="session-left-angle" class="ms-2 austhir-nav-link"><i class="fas fa-chevron-left"></i></span>
                    </div>
                    <div id="session-dropdown" class="user-session-menu d-none">
                      <ul>
                        <li><a class="austhir-nav-link session-link" href="user-profile.php"><i class="fas fa-user"></i> Profile</a></li>
                        <li><a class="austhir-nav-link session-link" href="logout.php"><i class="fas fa-sign-out-alt"></i> Log Out</a></li>
                      </ul>
                    </div>
                  </div>
                <?php } 
                
                else{ ?> 
                  <ul class="navbar-nav me-0 me-lg-4 mb-2 mb-lg-0">
                      <li
                        class="nav-item log-sign-nav-item d-flex align-items-center"
                      >
                        <i class="d-none d-lg-block far fa-user me-2"></i>
                        <a class="nav-link austhir-nav-link" href="login-register.php">Log In</a>
                      </li>
                      <li class="nav-item log-sign-nav-item">
                        <a class="nav-link austhir-nav-link" href="login-register.php">Sign Up</a>
                      </li>
                  </ul>
                </div>
            <?php } ?> 
          </div>
        </div>
      </nav>