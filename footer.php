
  <!-- Modal -->
  <div class="modal fade" id="login" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
         <div class="modal-close">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         
        </div>
        <div class="modal-body">
            <div class="flip-container">
                <div class="flipper" id="flipper">
                    <div class="front">
                        <h1 class="title">Login</h1>
                        <form>
                                    <input type="text" placeholder="Username" />
                                    <input type="password" placeholder="Password" />
                                    <h6><a href="forgot.php">Forget password?</a></h6>
                                    <button type="button" class="login-btn">Login</button>
                        </form>
                        <a class="flipbutton" id="loginButton" href="#">Create An Account</a>
                    </div>
                    
                    <div class="back">
                        <h1 class="title">Register</h1>
                        <form>
                            <div class="row gx-2">
                                <div class="col-md-6">
                                    <input type="text" placeholder="First Name" />
                                </div>
                                <div class="col-md-6">
                                    <input type="text" placeholder="Last Name" />
                                </div>
                                <div class="col-md-12">
                                    <input type="email" placeholder="Email" />
                                </div>
                                <div class="col-md-6">
                                    <input type="password" placeholder="Password" />
                                </div>
                                <div class="col-md-6">
                                    <input type="password" placeholder="Confirm Password" />
                                </div>
                                <div class="col-md-12">
                                    <input type="text" placeholder="Address" />
                                </div>
                                <div class="col-md-6">
                                    <input type="text" placeholder="City/Emirate" />
                                </div>
                                <div class="col-md-6">
                                    <input type="text" placeholder="State/Country" />
                                </div>
                                <div class="col-md-6">
                                    <input type="text" placeholder="Zip Code" />
                                </div>
                                <div class="col-md-6">
                                    <input type="text" placeholder="phone" />
                                </div>
                                <div class="col-md-12">
                                    <button type="button" class="login-btn">Sign Up</button>
                                </div>
                             
                            </div>
                               
                               
                        </form>
                        <a class="flipbutton" id="registerButton" href="#">Already has an account</a>
                    </div>
                </div>
                </div>
        </div>
       
      </div>
    </div>
  </div>


<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-2 col-6" data-aos="fade-up" data-aos-duration="1000">
                <div class="footer-logo">
                    <img src="img/logo.png" alt="" class="footer-img">
                    <select name='options[212]' class="form-control">
                        <option value='option-1' data-src="img/uae.png">UAE</option>
                        <!-- <option value='option-2' data-src="img/usa.png">USA</option> -->
                      </select> 
                </div>
            </div>
            <div class="col-md-2 col-6" data-aos="fade-up" data-aos-duration="1000">
                <div class="footer-links">
                    <h5>Get to Know Us</h5>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about.php">About Us</a></li>
                        <li><a href="product.php">Our Stores</a></li>
                        <!-- <li><a href="#">CSR</a></li> -->
                        <li><a href="blog.php">Blog</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-6" data-aos="fade-up" data-aos-duration="1000">
                <div class="footer-links">
                    <h5>Rizan Assurance</h5>
                    <ul>
                        <li>Lifetime Product Service </li>
                        <li>14 Days Return</li>
                        <li>Only Certified Jewellery</li>
                        <li>Product Detail Pricing</li>
                        <li>Easy Exchange</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-2 col-6" data-aos="fade-up" data-aos-duration="1000">
                <div class="footer-links">
                    <h5>Policies</h5>
                    <ul>
                        <li><a href="refund-policy.php">Refund Policy</a></li>
                        <li><a href="shipping-policy.php">Shipping Policy</a></li>
                        <li><a href="cancellation-policy.php">Cancellation Policy</a></li>
                        <li><a href="privacy-policy.php">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-2 col-6" data-aos="fade-up" data-aos-duration="1000">
                <div class="footer-links">
                    <h5>Customer Service</h5>
                    <ul>
                        <li><a href="tel:912262300916">+91 22 62300916 /</a></li>
                        <li><a href="tel:919167780916">+91 9167780916</a></li>
                        <li class="mt-25">For online queries:</li>
                        <li><a href="mailto:sales@rizanjewellery.com">sales@rizanjewellery.com</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="copyright">
                    <p>Copyright © 2023 <a href="#">Rizan Jewllery</a>. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </div>
</footer>

<script>
        var loginButton = document.getElementById("loginButton");
        var registerButton = document.getElementById("registerButton");

        loginButton.onclick = function () {
            document.querySelector("#flipper").classList.toggle("flip");
        }

        registerButton.onclick = function () {
            document.querySelector("#flipper").classList.toggle("flip");
        }
    </script>