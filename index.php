<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>- Sublee -</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

</head>

<body>

  <!-- Fixed navbar -->
  <div class="nav clearfix">
    <div class="nav-left">
      <img class="img-responsive" src="img/icons8-home-50.png" alt="">
      <a href="#topofpage" class="smoothscroll">Sublee</a>
    </div>
        
    <div class="nav-right">
      <ul>
        <li><a href="#aboutus" class="smoothscroll"><b>About Us</b></a></li>
        <li><a href="#howitworks" class="smoothscroll"><b>How It Works</b></a></li>
        <li><a href="#tenants" class="smoothscroll"><b>Current Tenants</b></a></li>
        <li><a href="#renters" class="smoothscroll"><b>Sublet Seekers</b></a></li>
      </ul>
    </div>
  </div> <!-- Closing Navbar -->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <!-- Opening Header -->
  <header class="clearfix" id="topofpage">
          
    <div class="left">
      <h1>Subletting,<br/>
      simplified.</h1>
      <h3>Sublee makes getting out of your lease or into a sublet, easy. </br></br>
        Whether it’s a new job in a new city, a 6-month back packing trip across the globe, or a new condo you’ve set your sights on – don’t let a contract stop you from life’s journey </br>
      </h3> 

      <button type="submit" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#exampleModal">Start my sublet</button>
    </div> <!-- Closing Left -->

    <div class="right">
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
    
    <!-- Text Container -->
    <div class="text-container">
      <h1>About us</h1>

      <h3>Sublee is designed to democratize the Canadian leasing process. Let’s face it, long-term commitments like 12 month leases don’t work for everyone. Sublee is here to lift the constraints on year long leases enabling renters to find flexible, short-term, market rate options. Our team is excited to bring Canadians the flexible apartment living you deserve.</h3>
    </div> <!-- Closing Text Container -->

    <!-- Black Screen -->
    <div class="black-screen"></div>
  </section> <!-- Closing About Us Container -->
  
  <!-- How It Works Section -->
  <section id="howitworks" class="howitworks">
    <div class="heading">
      <h1>How It Works</h1>
      <h2>Sublee is designed to streamline the subletting process, taking you from apartment search to close within one day</h2>
    </div> <!-- Closing Conatiner -->

    <!-- Icons -->
    <div class="icons-container">
      
      <div class="icon icon-first">
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
      </div>
      
    </div> <!-- /row Closing Icons-->
  </section> <!-- Closing How It Works -->

  

  <!-- Opening Tenants -->
  <section id="tenants" class="tenants">
    <h1>Current Tenants</h1>
    <div class="row centered">
      <div class="col-lg-12">
        <h2>Subletting your apartment shouldn’t be complicated, so we’ve built a product with you in mind</h2>
      </div>
    </div>
    <div class="tenants-icon-container">
      <div class="tenants-left">
        <div class="tenants-box tenants-box-1">
          <img src="img/Lead_generation.png" width="180">
          <p class="text">Apartment lead generation; we’ll make sure people notice your place</p>
        </div> 
    
        
        <div class="tenants-box tenants-box-2">
          <img  src="img/Verification.png" width="180">
          <p class="text">Tenant Background Verification; our team will do the homework for you</p>
        </div>
      </div>
  
      <div class="tenants-right">
        <div class="tenants-box tenants-box-3">
          <img src="img/contracts.png" width="180">
          <p class="text">Customized Lease Contracts; protective over that new paint job? Include the clause in the contract</p>
        </div>
    
        <div class="tenants-box tenants-box-4">
          <img src="img/payhandle.png" width="180">
          <p class="text">Payment Handling; worried about organizing  payment? We’ll make sure everyone get’s their cake<p>
        </div>
      </div>
    </div> <!-- Closing Tenants Icons -->
    
    <div class="row mt centered"> 
      <button type="submit" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#exampleModal">Post my lease</button>
    </div>
  </section> <!-- Closing Tenants  -->

  <!-- Renters Section -->
  <!-- Renters Heading Text -->
  <section id="renters">

    <div class="row centered renters-heading">
      <h1>Sublet Seekers</h1>  
      <h2>Stay a while - actually, stay for however long you want</h2>
      <h3>find the right lease, for the right length of time</h3>
    </div>
    
    <div class="renters-main-container">
      <div class="renters-left">
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
      
      <div class="renters-right">
        <h3 class="text centered">Benefits:</h3>

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

    </div>
  </section> <!-- CLosing Renters -->

  


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
