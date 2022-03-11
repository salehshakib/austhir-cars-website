<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>AUSTHIR CARS | CUSTOMIZATION PAGE</title>
    <!-- bootstrap stylesheet -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <!-- custom stylesheet -->
    <link rel="stylesheet" href="css/customization-page.css" />
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
         <?php include'purchase-header.php'; ?>
    </header>
    <!-- header end -->

    <main>
      <!-- car genre selection section -->
      <section class="container pb-0">
        <h2 class="custom-title">
            Customize Your 
            <br>
            <span>Car Name</span>
        </h2>
      </section>

      <!-- mods section -->
      <section id="mods-section">
        <!-- colors section -->
        <section id="color-section" class="container">
          <h2 class="mods-section-title">Available Colors</h2>
          <div class="mods-container-5">
            <!-- color cards -->
            <div class="color-card selected" style="background-color: red">
              <p class="color-card-text">
                <span class="color-type">Stock Red</span>
                <br>
                <span class="color-price">৳00</span>
              </p>
            </div>
            <div class="color-card" style="background-color: blue">
              <p class="color-card-text">
                <span class="color-type">Blue</span>
                <br>
                <span class="color-price">৳10000</span>
              </p>
            </div>
            <div class="color-card" style="background-color: silver">
              <p class="color-card-text">
                <span class="color-type">Silver</span>
                <br>
                <span class="color-price">৳10000</span>
              </p>
            </div>
            <div class="color-card" style="background-color: white">
              <p class="color-card-text">
                <span class="color-type">White</span>
                <br>
                <span class="color-price">৳10000</span>
              </p>
            </div>
            <div class="color-card" style="background-color: black">
              <p class="color-card-text" style="color: white">
                <span class="color-type">Black</span>
                <br>
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
              class="tyre-card selected"
              style="
                background-image: url(images/Bridgestone.jpg);
                background-color: rgba(0, 0, 0, 0.4);
                background-size: cover;
                background-position: center;
                background-blend-mode: multiply;
              "
            >
              <p class="tyre-card-text" style="color: white">
                <span class="tyre-brand">Stock Tyre</span>
                <br>
                <span class="tyre-price">৳00</span>
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
                <br>
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
                <br>
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
                <br>
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
                <br>
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
              class="rim-card selected"
              style="
                background-image: url(images/stock-rim.jpg);
                background-color: rgba(0, 0, 0, 0.4);
                background-size: cover;
                background-position: center;
                background-blend-mode: multiply;
              "
            >
              <p class="rim-card-text text-center" style="color: white">
                <span class="rim-size">16"</span>
                <span class="rim-brand">Stock Rim</span>
                <br>
                <span class="rim-price">৳00</span>
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
                <br>
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
                <span class="rim-brand">Vossen</span>
                <br>
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
                <br>
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
                <br>
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
              class="light-card selected"
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
                <span class="light-brand">Stock Light</span>
                <br>
                <span class="light-price">৳00</span>
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
                <br>
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
                <br>
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
                <br>
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
                <br>
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
              class="tint-card selected"
              style="
                background-image: url(images/dyed-window-tint.jpg);
                background-color: rgba(0, 0, 0, 0.4);
                background-size: cover;
                background-position: center;
                background-blend-mode: multiply;
              "
            >
              <p class="tint-card-text text-center" style="color: white">
                <span class="tint-type">Stock Window Tint</span>
                <span class="tint-price">৳00</span>
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
                <br>
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
                <br>
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
                <br>
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
                    <tr>
                        <th scope="row">1</th>
                        <td id="car-id" class="prod-id">car prod id here</td>
                        <td id="car-name">car model here</td>
                        <td>Car</td>
                        <td id="car-brand">car brand here</td>
                        <td>-</td>
                        <td id="car-unit-price" class="unit-price">car price here</td>
                        <td>
                            <span class="quantity-btn quantity-minus-btn visually-hidden">-</span> 
                            <span class="quantity">-</span>  
                            <span class="quantity-btn quantity-plus-btn visually-hidden">+</span>
                        </td>
                        <td class="product-price">৳125000000</td>
                    </tr>
                     <tr id="color-row" class="table-row">
                        <th scope="row">2</th>
                        <td class="prod-id">M-1019</td>
                        <td>Stock Red Color</td>
                        <td>Color</td>
                        <td>-</td>
                        <td>-</td>
                        <td class="unit-price">৳00</td>
                        <td>
                            <span class="quantity-btn quantity-minus-btn visually-hidden">-</span> 
                            <span class="quantity">-</span>   
                            <span class="quantity-btn quantity-plus-btn visually-hidden">+</span>
                        </td>
                        <td class="product-price">৳00</td>
                    </tr>
                    <tr id="tyre-row" class="table-row">
                        <th scope="row">3</th>
                        <td class="prod-id">M-2029</td>
                        <td>Stock Tyre</td>
                        <td>Tyre</td>
                        <td>Stock Tyre</td>
                        <td>-</td>
                        <td class="unit-price">৳00</td>
                        <td>
                            <span class="quantity-btn quantity-minus-btn visually-hidden">-</span> 
                            <span class="quantity">4</span>  
                            <span class="quantity-btn quantity-plus-btn visually-hidden">+</span>
                        </td>
                        <td class="product-price">৳00</td>
                    </tr>
                    <tr id="rim-row" class="table-row">
                        <th scope="row">4</th>
                        <td class="prod-id">M-3039</td>
                        <td>Stock Rim</td>
                        <td>Rim</td>
                        <td>Stock Rim</td>
                        <td>16"</td>
                        <td class="unit-price">৳00</td>
                        <td>
                            <span class="quantity-btn quantity-minus-btn visually-hidden">-</span> 
                            <span class="quantity">4</span>  
                            <span class="quantity-btn quantity-plus-btn visually-hidden">+</span>
                        </td>
                        <td class="product-price">৳00</td>
                    </tr>
                    <tr id="light-row" class="table-row">
                        <th scope="row">5</th>
                        <td class="prod-id">M-4049</td>
                        <td>LED Stock Light</td>
                        <td>Light</td>
                        <td>Stock Light</td>
                        <td>-</td>
                        <td class="unit-price">৳00</td>
                        <td>
                            <span class="quantity-btn quantity-minus-btn visually-hidden">-</span> 
                            <span class="quantity">2</span>  
                            <span class="quantity-btn quantity-plus-btn visually-hidden">+</span>
                        </td>
                        <td class="product-price">৳00</td>
                    </tr>
                    <tr id="tint-row" class="table-row">
                        <th scope="row">6</th>
                        <td class="prod-id">M-5059</td>
                        <td>Stock Window Tint</td>
                        <td>Tint</td>
                        <td>car brand here</td>
                        <td>-</td>
                        <td class="unit-price">৳00</td>
                        <td>
                            <span class="quantity-btn quantity-minus-btn visually-hidden">-</span> 
                            <span class="quantity">-</span>  
                            <span class="quantity-btn quantity-plus-btn visually-hidden">+</span>
                        </td>
                        <td class="product-price">৳00</td>
                    </tr>
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
                    <input type="hidden" id="row-0-prod-id">
                    <input type="hidden" id="row-0-name">
                    <input type="hidden" id="row-0-type">
                    <input type="hidden" id="row-0-brand">
                    <input type="hidden" id="row-0-size">
                    <input type="hidden" id="row-0-unit-price">
                    <input type="hidden" id="row-0-quantity">
                    <input type="hidden" id="row-0-prod-price">

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

                    <div>
                        <h5 class="text-center mt-4">Payment Information</h5>
                        <div class=" mb-5">
                            <p class="m-0">Select your payment method: </p>
                            <div class="d-flex align-items-center">
                                <input type="radio" id="cash" class="me-1" name="cash-or-emi" value="cash" checked>
                                <label for="cash"><strong>Cash</strong></label>
                            </div>
                            <div class="d-flex align-items-center mt-1">
                                <input type="radio" id="emi" class="me-1" name="cash-or-emi" value="emi">
                                <label for="emi"><strong>EMI</strong></label>
                            </div>
                        </div>
                        <p>Total: <span id="total-amount"><strong>৳00</strong></span></p>
                        <div id="emi-info" class="d-none">
                            <p>EMI Down Payment: <span id="down-amount"><strong>৳00</strong></span></p>
                            <p>Paying Over Instalments: <span id="install-amount"><strong>৳00</strong></span></p>
                            <p>Total Instalments: <strong>12</strong></p>
                        </div>
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
    <script src="js/customization-page.js"></script>
    <script src="js/header.js"></script>
  </body>
</html>
