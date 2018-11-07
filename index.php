<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>- Sublee -</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
  <link rel="icon" href="img/icons8-home-50.png" type="image/png">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700|Roboto+Slab:300,400,600,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

</head>

<body>

  <!-- Fixed navbar -->
  <nav class="nav clearfix">
    <div class="nav-left">
      <img src="img/icons8-home-100.png" alt="Sublee Icon">
      <a href="#topofpage" class="smoothscroll">Sublee</a>
    </div>
        
    <div class="nav-right">
      <ul>
        <li><a href="#aboutus" class="smoothscroll"><b>About Us</b></a></li>
        <li><a href="#howitworks" class="smoothscroll"><b>How It Works</b></a></li>
        <li><a href="#tenants" class="smoothscroll"><b>Current Tenants</b></a></li>
        <li><a href="#seekers" class="smoothscroll"><b>Sublet Seekers</b></a></li>
        <li><a data-toggle="modal" data-target="#exampleModal"><b>Get Started</b></a></li>
        

      </ul>
    </div>
  </nav> <!-- Closing Navbar -->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <!-- Opening Header -->
  <header class="clearfix" id="topofpage">
          
    <div class="header-left">
      <h1>Subletting,<br/>
      simplified.</h1>
      <h3>Sublee makes getting out of your lease or into a sublet, easy. 
        Whether it’s a new job in a new city, a 6-month back packing trip across the globe, or a new condo you’ve set your sights on – don’t let a contract stop you from life’s journey
      </h3> 

      <a href="#howitworks" class="smoothscroll">
        <button type="submit" class="btn btn-warning btn-lg">Learn More</button>
      </a>
    </div> <!-- Closing Left -->

    <div class="header-right">
      <img src="img/icons8-home-500.png" alt="Sublee Logo" class="header-logo">
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          
          <!-- Modal Header -->
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
            </button>
            <h2 class="modal-title" id="exampleModalLabel">Sign Up</br></h2>
          </div> <!-- Closing Modal Header -->
          
          <!-- Modal Body -->
          <div class="modal-body">
    
            <form method="post" action="dbcalls.php">

              <!-- Form -->
              <div class="form-row">
                <div class="form-group col-lg-4">
                  <label for="inputPassword4">First Name</label>
                  <input type="text" class="form-control" id="inputPassword4" placeholder="First Name">
                </div>
                <div class="form-group col-lg-4">
                  <label for="inputPassword4">Last Name</label>
                  <input type="text" class="form-control" id="inputPassword4" placeholder="Last Name">
                </div>
                    <div class="form-group col-lg-4">
                  <label for="inputEmail4">Email</label>
                  <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                  <small id="Email" class="form-text text-muted">We'll never share it with anyone</small>
                </div>
              </div> <!-- Closing Form Row -->
              
              <div class="form-row">
                <div class="form-group col-lg-4">
                  <label for="inputCity">City</label>
                  <input type="text" class="form-control" id="inputCity">
                </div>
                <div class="form-group col-lg-4">
                  <label for="inputProvince">Province</label>
                  <select id="inputProvince" class="form-control">
                    <option selected>Select</option>
                    <option>QC</option>
                    <option>ON</option>
                    <option>BC</option>
                    <option>AB</option>
                    <option>MB</option>
                    <option>SK</option>
                    <option>NS</option>
                    <option>NB</option>
                    <option>NL</option>
                    <option>PE</option>
                    <option>NT</option>
                    <option>YT</option>
                    <option>NU</option>
                  </select>
                </div> <!-- Closing Form Group -->
              
              </div> <!-- Closing Form Row -->

              <div class="form-row">
                <div class="form-group col-lg-12">
                  <label for="exampleTextarea">Tell us how we can help you.</label>
                <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
                </div>
              </div>
              

              <!-- Form Row -->
              <div class="form-row">  
                <div class="form-check">
                  <label class="LCL">
                    <input type="checkbox" class="form-check-input">
                    I am trying to get out of my current lease.
                  </label>
                </div>

                <div class="form-check">
                  <label class="STL">
                    <input type="checkbox" class="form-check-input">
                    I am looking for a short-term lease.
                  </label>
                </div>
              
                <div class="form-check">
                  <label class="LPM">
                    <input type="checkbox" class="form-check-input">
                    I am a landlord/property manager.
                  </label>
                </div>
              </div> <!-- Closing Form Row -->
            
              <button type="submit" class="btn btn-primary btn-lg" name="submit">Submit</button>
            </form> <!-- Closing Form -->
          </div> <!-- Closing Modal Body -->
        </div> <!-- Closing Modal Content -->
      </div>  <!-- Closing Modal Dialogue -->
    </div> <!-- Closing Modal Fade -->

  </header>

  <!-- About Us -->
  <section id="aboutus">
    <!-- Black Screen -->
    <div class="black-screen">
      <!-- Text Container -->
      <div class="text-container">
        <h1>About Us</h1>
        <h3>Sublee is designed to democratize the Canadian leasing process. Let’s face it, long-term commitments like 12 month leases don’t work for everyone. Sublee is here to lift the constraints on year long contracts enabling people to find flexible, short-term, market rate options, while providing current tenants the safety and peace of mind with subletting their apartment. Our team is excited to introduce Sublee, and to bring Canadians the flexible apartment living they deserve.
        </h3>
      </div> <!-- Closing Text Container -->
    </div>
  </section> <!-- Closing About Us Container -->
  
  <!-- How It Works Section -->
  <section id="howitworks" class="howitworks">
    <div class="wrapper">
      <h1>How It Works</h1>
      <h2>Sublee streamlines the subletting process, taking you from listing search to close in one day</h2>
      <!-- <h2>Sublee is designed to streamline the subletting process, taking you from apartment search to close within one day</h2> -->
  
      <!-- Icons -->
      <div class="icons-container">
        
        <div class="icons-column icons-column1">
          <h2>Moving In?</h2>
          <h4>Browse Marketplace of Listings</h4>
          <h4>Connect with Current Tenants</h4>
          <h4>Get Verified & Approved</h4>
          <h4>Agree To Terms & Sign</h4>
          <h4>Submit Payment and Relax</h4>
        </div>

        <div class="icons-column icons-column2">
          <h2></h2> <!-- Empty to create space at top -->
          <img src="img/icon-marketplace.png" alt="">
          <img src="img/icon-chat-bubbles.png" alt="">
          <img src="img/Profile approval (how it works).png" alt="">
          <img src="img/handshake (how it works).png" alt="">
          <img src="img/make payment (how it works).png" alt="">
        </div>

        <div class="icons-column icons-column3">
          <h2>Moving Out?</h2>
          <h4>Post Your Lease To Our Marketplace</h4>
          <h4>Connect With Potential Subtenants</h4>
          <h4>Verify the Incoming Tenant</h4>
          <h4>Customize Contract and Sign</h4>
          <h4>Let Us Handle the Payment</h4>
        </div>
        
        <!-- <div class="icon icon-first">
          <img src="img/Picture1.png" alt="">
          <h4>Search our marketplace </br>of listings</h4>
        </div>
  
        <i class="fas fa-arrow-circle-right arrow-right-1"></i>
        
        <div class="icon">
          <img src="img/Connect with tenants (how it works).png" alt="">
          <h4>Connect with </br> interested tenants</h4>
        </div>
  
        <i class="fas fa-arrow-circle-right arrow-right-2"></i>
  
        <div class="icon">
          <img src="img/Profile approval (how it works).png" alt="">
          <h4>Get verified</br> & approved</h4>
        </div>
  
        <i class="fas fa-arrow-circle-right arrow-right-3"></i>
        
        <div class="icon">
          <img src="img/handshake (how it works).png" alt="">
          <h4>Agree to terms  </br>& sign</h4>
        </div>
  
        <i class="fas fa-arrow-circle-right arrow-right-4"></i>
        
        <div class="icon">
          <img src="img/make payment (how it works).png" alt="">
          <h4>Submit payment </br> & relax </h4>
        </div> -->
        
      </div> <!-- /row Closing Icons-->

      <button type="submit" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#exampleModal">Get Started</button>


    </div>
    
  </section> <!-- Closing How It Works -->
  
  <section class="review">
    <div class="black-screen"></div>
  </section>

  <!-- Opening Tenants -->
  <section id="tenants" class="tenants">
    <div class="wrapper">
      <h1>Current Tenants</h1>
      <h2>Subletting your apartment shouldn’t be complicated, so we’ve built a product with you in mind</h2>
      <div class="tenants-main">
        <div class="tenants-left">
        
          <div class="tenants-column1">
            <img src="img/icon-apartment-lead-generation.png">
            <img  src="img/icon-verification.png">
            <img src="img/contracts.png">
            <img src="img/icon-handling.png">
          </div> <!-- Closing Tenants Left -->
          
          <div class="tenants-column2">
            <p class="text"><span class="bold">Apartment lead generation;</span> we’ll make sure people notice your place</p>
            <p class="text"><span class="bold">Tenant Background Verification;</span> our team will do the homework for you</p>
            <p class="text"><span class="bold">Customized Lease Contracts;</span> protective over that new paint job? Include the clause in the contract</p>
            <p class="text"><span class="bold">Payment Handling;</span> worried about organizing  payment? We’ll make sure everyone get’s their cake<p>
          </div> <!-- Closing Tenants Right -->
        
        </div> <!-- Closing Tenants Icon Container -->
        <div class="tenants-right">
            <!-- Carousel Section -->
          <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
              <li data-target="#carousel-example-generic" data-slide-to="1"></li>
              <li data-target="#carousel-example-generic" data-slide-to="2"></li>

            </ol>
          
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
              <div class="item active">
                <img src="img/kitchen-stove-sink-kitchen-counter-349749.jpeg" alt="...">
                <div class="carousel-caption">
                
                </div>
              </div>
              
              <div class="item">
                <img src="img/living-room-couch-interior-room-584399.jpeg" alt="...">
                <div class="carousel-caption">
                
                </div>
              </div>

              <div class="item">
                <img src="img/pexels-photo-1234462.jpeg" alt="...">
                <div class="carousel-caption">
                
                </div>
              </div>

            </div> <!-- Closing Carousel Inner -->
          
            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>

            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
  
          </div> <!-- Closing Carousel Main Div -->
          <button type="submit" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#exampleModal">Post my lease</button>
        </div> <!-- Closing Tenants Carousel Container -->
      </div> <!-- CLosing Tenants Main -->
      
      

    </div> <!-- CLosing Wrapper -->
  </section> <!-- Closing Tenants  -->

  <!-- seekers Section -->
  <!-- seekers Heading Text -->
  <section id="seekers">
    <div class="wrapper">
      <div class="seekers-heading">
        <h1>Sublet Seekers</h1>  
        <h2>Stay a while - actually, stay for however long you want</h2>
        <h3>find the right lease, for the right length of time</h3>
      </div>
      
      <div class="seekers-main-container">
        <div class="seekers-left">
          <!-- Carousel Section -->
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  
              </ol>
            
              <!-- Wrapper for slides -->
              <div class="carousel-inner" role="listbox">
                <div class="item active">
                  <img src="img/kitchen-stove-sink-kitchen-counter-349749.jpeg" alt="...">
                  <div class="carousel-caption">
                  
                  </div>
                </div>
                
                <div class="item">
                  <img src="img/living-room-couch-interior-room-584399.jpeg" alt="...">
                  <div class="carousel-caption">
                  
                  </div>
                </div>
  
                <div class="item">
                  <img src="img/pexels-photo-1234462.jpeg" alt="...">
                  <div class="carousel-caption">
                  
                  </div>
                </div>
  
              </div> <!-- Closing Carousel Inner -->
            
              <!-- Controls -->
              <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
  
              <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
  
          </div> <!-- Closing Carousel Main Div -->
        </div>
        
        <div class="seekers-right">
  
          <!-- Icons -->
          <div class="icon-container">
  
            <div class="icon icon-1">
              <img src="img/short-term contracts.png">
              <p class="text">
                <span class="bold">Short-term leasing options;</span> find lease options between 2-12 months
              </p>
            </div>
  
            <div class="icon icon-2">
              <img  src="img/auto payment.png">
              <p class="text">
                <span class="bold">Automated rent payments;</span> rip up those rent checks, we’ll send your payment to the appropriate party
              </p>
            </div>
  
            <div class="icon icon-3">
              <img src="img/lease from anywhere.png">
              <p class="text">
                <span class="bold">Get approved from anywhere;</span> can’t visit the apartment before signing? Don’t worry – if we can vet you, you’re in
              </p>
            </div>
  
          </div> <!-- Closing Icon Container -->
          <!-- Start Sublet Button -->
          <button type="submit" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#exampleModal">Find A Short Term Lease</button>
  
        </div> <!-- Closing Renter's Right -->
  
      </div> <!-- Closing seekers Main Container -->
    </div> <!-- Closing Wrapper -->
  </section> <!-- CLosing seekers -->

  <footer>
    <!-- Opening Footer Top w/ Grey Background -->
    <div class="footer-top">
      <div class="wrapper">

        <!-- Box 1 - Address -->
        <div class="footer-top-column footer-top-column1"> 
          <div class="footer-icon">
            <i class="fas fa-map-marker-alt"></i>
          </div>
          <div class="text-container">
            <p class="footer-top-text">123 Jasons Office Address, Toronto</p>
            <p class="footer-top-text">Canada, M9M1M1</p>
          </div>
        </div> <!-- Closing footer-top-column 1 -->
  
        <!-- Vertical Line Divider -->
        <div class="footer-divider footer-divider-left"></div>
  
        <!-- footer-top-column 2 Phone Number -->
        <a href="#">
          <div class="footer-top-column footer-top-column2"> 
            <div class="footer-icon">
              <i class="fas fa-mobile-alt"></i>
    
            </div>
            <div class="text-container">
              <p class="footer-top-text">+1 (800) 123 4567</p>
            </div>
          </div> 
        </a> <!-- Closing footer-top-column 2 -->
  
        <!-- Vertical Line Divider -->
        <div class="footer-divider footer-divider-right"></div>
  
        <!-- footer-top-column 3 Email -->
        <a href="#">
          <div class="footer-top-column footer-top-column3"> 
            <div class="footer-icon">
              <i class="far fa-envelope"></i>
            </div>
            <div class="text-container">
              <p class="footer-top-text">jason@sublee.com</p>
            </div>
          </div> 
        </a> <!-- Closing footer-top-column 3 -->
      </div> <!-- Closing Wrapper -->
    </div> <!-- Closing Footer Top -->

    <!-- Opening Footer Bottom w/ Green Background -->
    <div class="footer-bottom">
      <div class="wrapper">
        <div class="footer-left">
          <img src="img/icons8-home-50.png" alt="Sublee Icon">
          <p class="company">Sublee</p>
        </div>
        <h3>Copyright &copy; Sublee 2018</h3>
      </div>
    </div> <!-- Closing Footer Bottom -->

  </footer>


  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/php-mail-form/validate.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script defer src='https://use.fontawesome.com/releases/v5.0.10/js/all.js' integrity='sha384-slN8GvtUJGnv6ca26v8EzVaR9DC58QEwsIk9q1QXdCU8Yu8ck/tL/5szYlBbqmS+' crossorigin='anonymous'></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>
