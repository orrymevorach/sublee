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

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

</head>

<body>

  <!-- Fixed navbar -->
  <div class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-left">
          <li><img class="img-responsive" src="img/icons8-home-50.png" alt=""></li>
          <li><a href="#howitworks" class="smoothscroll">Sublee</a></li>
        </ul>
      </div> <!-- Closing Navbar Header -->
        
      </div> <!-- Closing Container -->
      <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#howitworks" class="smoothscroll"><b>How It Works</b></a></li>
          <li><a href="#tenants" class="smoothscroll"><b>Tenants</b></a></li>
          <li><a href="#renters" class="smoothscroll"><b>Renters</b></a></li>
          <li><a href="#aboutus" class="smoothscroll"><b>About Us</b></a></li>
        </ul>
      </div> <!--/.nav-collapse -->
    </div> <!-- Closing Container -->
  </div> <!-- Closing Navbar -->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <header class="clearfix" id="topofpage">
          
        <div class="left">
          <h1>Subletting,<br/>
          simplified.</h1>
          <h3>Sublee makes getting out of your lease or into a sublet, easy. </br></br>
            Whether it’s a new job in a new city, a 6-month back packing trip across the globe, or a new condo you’ve set your sights on – don’t let a contract stop you from life’s journey </br>
          </h3> 

          <button type="submit" data-toggle="modal" data-target="#exampleModal">Start my sublet</button>
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
  

  <!-- Carousel Section -->
  <section>
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
          <li data-target="#carousel-example-generic" data-slide-to="2"></li>

          <li data-target="#carousel-example-generic" data-slide-to="3"></li>
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

          <div class="item">
            <img src="img/7fc1b709383a42d0022bb3598a41e870.jpg" alt="...">
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

  </section> <!-- Closing Carousel Section -->

  <!-- How It Works Section -->
  <div class="container" id="howitworks">
    <div class="col-lg-6 col-lg-offset-3">
      <div class="row mt centered">
        <h1>How It Works</h1>
      </div>
    </div>
    <div class="col-lg-12">
      <h3>Sublee is designed to streamline the subletting process, taking you from apartment search to close within one day</h3>
    </div>
  </div> <!-- Closing Conatiner -->

  <!-- Icons -->
  <div class="row mt centered">
    <div class="col-lg-2 col-lg-offset-1">
      <img src="img/Picture1.png" width="180" alt="">
      <h4>Search our marketplace </br>of listings</h4>
      
    </div>
    <!--/col-lg-4 -->
    <div class="col-lg-2">
      <img src="img/Connect with tenants (how it works).png" width="180" alt="">
      <h4>Connect with </br> interested tenants</h4>
      
    </div>

    <div class="col-lg-2">
      <img src="img/Profile approval (how it works).png" width="180" alt="">
      <h4>Get verified</br> & approved</h4>
      
    </div>
    <div class="col-lg-2">
      <img src="img/handshake (how it works).png" width="180" alt="">
      <h4>Agree to terms  </br>& sign</h4>
      
    </div>
    <div class="col-lg-2">
      <img src="img/make payment (how it works).png" width="180" alt="">
      <h4>Submit payment </br> & relax </h4>
    
    </div>
    
  </div> <!-- /row Closing Icons-->

  <!-- Opening Tenants -->
  <div class="container" id="tenants">
    <div class="row mt centered">
      <div class="col-lg-12">
        <h2>Subletting your apartment shouldn’t be complicated, </br>so we’ve built a product with you in mind</h2>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-2 col-lg-offset-1">
        <img src="img/Lead_generation.png" width="180">
      </div>
      <p class="text">Apartment lead generation; we’ll make sure people notice your place</p>
    </div> 

    <div class="row">  
      <div class="col-lg-2 col-lg-offset-1">
        <img  src="img/Verification.png" width="180">
      </div>
      <p class="text">Tenant Background Verification; our team will do the homework for you</p>
    </div>

    <div class="row">
      <div class="col-lg-2 col-lg-offset-1">
        <img src="img/contracts.png" width="180">
      </div>
      <p class="text">Customized Lease Contracts; protective over that new paint job? Include the clause in the contract</p>
    </div>

    <div class="row">
      <div class="col-lg-2 col-lg-offset-1">
        <img src="img/payhandle.png" width="180">
        </div>
      <p class="text">Payment Handling; worried about organizing  payment? We’ll make sure everyone get’s their cake<p>
    </div>
    
    <div class="row mt centered"> 
      <button type="submit" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#exampleModal">Post my lease</button>
    </div>
  </div> <!-- Closing Tenants Container  -->

  <!-- Renters Section -->
  <!-- Renters Heading Text -->
  <div class="container" id="renters">

    <div class="row mt centered">
      <div class="col-lg-12">
        <h2>Stay a while - actually, stay for however long you want</h2>
        <h3>find the right lease, for the right length of time</h3>
      </div>
    </div>
        
    <div class="col-lg-offset-8">
      <h3 class="text">Benefits:</h3>
    </div>
  </div> <!-- Closing Container + Renters Heading Text-->

  <!-- Icons -->
  <div class="row">

    <div class="col-lg-offset-7">
      <p class="text">Short-term leasing options to fit your life’s plans</p>
      <img src="img/short-term contracts.png" width="180">
    </div>

    <div class="col-lg-offset-7">
      <p class="text">Automated payments</p>
      <img  src="img/auto payment.png" width="180">
    </div>

    <div class="col-lg-offset-7">
      <p class="text">Lease from anywhere; can’t visit the apartment before signing? Don’t worry – if we can vet you, you’re in.</p>
      <img src="img/lease from anywhere.png" width="180">
    </div>

  </div> <!-- Closing Row of Icons -->


  <!-- Start Sublet Button -->
  <div class="container">
    <div class="row mt centered">
      <div class="col-lg-6 col-lg-offset-3">
        <button type="submit" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#exampleModal">Start my sublet</button>
      </div>
    </div>
  </div> <!-- Closing Button Container -->

  <!-- About Us -->
  <div class="container" id="aboutus">
    <div class="row mt centered">
      <div class="col-lg-12">
        <h1>About us</h1>
      </div>
    </div>

    <div class="col-lg-6 col-lg-offset-3">
      <h3>Sublee is designed to democratize the Canadian leasing process. Let’s face it, long- </br>term commitments like 12 month leases don’t work for everyone. Sublee is here to lift </br>the constraints on year long leases enabling renters to find flexible, short-term,</br> market rate options. Our team is excited to bring Canadians the flexible apartment</br> living you deserve.</h3>
    </div>
   
  </div> <!-- Closing About Us Container -->


  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/php-mail-form/validate.js"></script>
  <script src="lib/easing/easing.min.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>
