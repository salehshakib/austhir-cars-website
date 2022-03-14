<!-- navbar -->
      <nav id="austhir-nav" class="navbar navbar-expand-lg py-0">
        <div id="nav-bar" class="container-fluid">
          <a class="navbar-brand austhir-nav-link" href="admin-home.php">
            <img
              src="images/logo.png"
              alt=""
              width="90"
              height="90"
              class="d-inline-block align-text-top"
          /></a>

               <!-- user session info-->
              <?php if(isset($_SESSION['adminName'])){ ?>
                  <div id="user-session-info-container" class="me-4">
                    <div id="user-session-info" class="d-flex align-items-center">
                      <p class="austhir-nav-link me-2 mb-0"><?php echo $_SESSION['adminName'] ?></p>
                      <span class="user-image"><i class="fas fa-user"></i></span>
                      <span id="session-left-angle" class="ms-2 austhir-nav-link"><i class="fas fa-chevron-left"></i></span>
                    </div>
                    <div id="session-dropdown" class="user-session-menu d-none">
                      <ul>
                        <!-- <li><a class="austhir-nav-link session-link" href="user-profile.php"><i class="fas fa-user"></i> Profile</a></li> -->
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
        </div>
      </nav>