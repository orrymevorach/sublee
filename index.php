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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script>
    function validate(){
	       if( $('.chkbx:checked').length < 1) {
                    $("#selchk").show();
                    return false;
                  }
          else {
			 }
    }
  </script>

</head>

<body>

  <!-- Fixed navbar -->
  <div class="logo-top-container">
    <img src="img/icons8-home-100.png" alt="Sublee Icon" class="logo-top">
  </div>
  <nav class="nav clearfix">
    <div class="nav-hamburger-container">
      <i class="fas fa-bars nav-hamburger"></i>
    </div>
    <div class="nav-left">
      <a href="#topofpage" class="smoothscroll">Sublee</a>
    </div>

    <div class="nav-right">
      <ul>
        <li><a href="#aboutus" class="smoothscroll">About Us</a></li>
        <li><a href="#howitworks" class="smoothscroll">How It Works</a></li>
        <li><a href="#tenants" class="smoothscroll">Current Tenants</a></li>
        <li><a href="#seekers" class="smoothscroll">Sublease Seekers</a></li>
        <li class="get-started"><a data-toggle="modal" data-target="#exampleModal">Get Started</a></li>
      </ul>
    </div>
  </nav> <!-- Closing Navbar -->



  <!-- Opening Header -->
  <div class="header-mobile">
    <img src="img/icons8-home-500.png" alt="Sublee Logo" class="mobile-logo">
    <a href="#topofpage" class="smoothscroll">
      <i class="fas fa-angle-down"></i>
    </a>

  </div>
  <header class="clearfix" id="topofpage">

    <div class="header-left">
      <h1>Subletting,<br/>
      simplified.</h1>
      <h3>Sublee makes getting out of your lease or into a sublet, easy.
        Whether it’s a new job in a new city, a 6-month back packing trip across the globe, or a new condo you’ve set your sights on – don’t let a contract stop you from life’s journey.
      </h3>

      <a href="#howitworks" class="smoothscroll">
        <button type="submit" class="btn btn-warning btn-lg header-button">Learn more</button>
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

            <form method="post" action="mailSend.php" onSubmit="return validate();" >

              <!-- Form -->
              <div class="row row1">
                <div class="col col1">
                  <label for="inputPassword4">First Name <span class="contact-form-required">*required</span></label>
                  <input type="text" name="fname" class="form-control" id="inputPassword4" placeholder="First Name"
                         required>
                </div>
                <div class="col col2">
                  <label for="inputPassword4">Last Name</label>
                  <input type="text" name="lname" class="form-control" id="inputPassword4" placeholder="Last Name">
                </div>
                  <div class="col col3">
                  <label for="inputEmail4">Email <span class="contact-form-required">*required</span></label>
                  <input type="email" name="mail" class="form-control" id="inputEmail4" placeholder="Email" required>
                </div>
              </div> <!-- Closing Form Row -->

              <div class="row row2">
                <div class="col col1">
                  <label for="inputCity">City</label>
                  <input type="text" name="city" class="form-control" id="inputCity">
                </div>
                <div class="col col2">
                  <label for="inputProvince">Province</label>
                  <select id="inputProvince" name="province" class="form-control">
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
                <div class="col col3"></div>

              </div> <!-- Closing Form Row -->

              <div class="row row3">
                <div class="col col1">
                  <label for="exampleTextarea">Tell us how we can help you.</label>
                  <textarea class="form-control" name="msg" id="exampleTextarea" rows="3"></textarea>
                </div>

                <div class="col col2">

                  <div class="form-check">
                    <label>Please Select One <span class="contact-form-required">*required</span></label>
                    <p style="color:#FF0000;display:none;font-weight:600;" id="selchk">Please select 1 of the following options</p>
                    <label class="LCL">
                      <input type="checkbox" name="current_lease" class="form-check-input chkbx">
                      I am trying to get out of my current lease.
                    </label>
                  </div>

                  <div class="form-check">
                    <label class="STL">
                      <input type="checkbox" name="short_lease" class="form-check-input chkbx">
                      I am looking for a short-term lease.
                    </label>
                  </div>

                  <div class="form-check">
                    <label class="LPM">
                      <input type="checkbox" name="property_m" class="form-check-input chkbx">
                      I am a landlord/property manager.
                    </label>
                  </div>
                </div>
                <div class="col col3"></div>

              </div> <!-- Closing Form Row -->

              <div class="row row4">
                <div class="col col1">
                  <button type="submit" class="btn btn-primary btn-lg" name="submit">Submit</button>
                </div>
              </div>
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
      <h2>Sublee streamlines the subletting process, taking you from listing search to close in one day.</h2>
      <!-- <h2>Sublee is designed to streamline the subletting process, taking you from apartment search to close within one day</h2> -->

      <!-- Icons -->
      <div class="icons-container">
        <div class="icons-mobile">
          <img src="img/icon-marketplace.png" alt="">
          <img src="img/icon-chat-bubbles.png" alt="">
          <img src="img/Profile approval (how it works).png" alt="">
          <img src="img/handshake (how it works).png" alt="">
          <img src="img/make payment (how it works).png" alt="">
        </div>

        <div class="icons-column icons-column1">
          <div class="heading">
            <h2>Moving In?</h2>
            <i class="fas fa-bars howitworks-hamburger"></i>
          </div>
          <ul class="moving-in-list">
            <li><p class="text bold">Browse Marketplace of Listings</p></li>
            <li><p class="text bold">Connect with Current Tenants</p></li>
            <li><p class="text bold">Get Verified & Approved</p></li>
            <li><p class="text bold">Agree to Terms & Sign</p></li>
            <li><p class="text bold">Submit Payment & Relax</p></li>
          </ul>
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
          <div class="heading">
            <h2>Moving Out?</h2>
            <i class="fas fa-bars howitworks-hamburger"></i>
          </div>
          <ul class="moving-out-list">
            <li><p class="text bold">Post Your Lease to Our Marketplace</p></li>
            <li><p class="text bold">Connect with Potential Subtenants</p></li>
            <li><p class="text bold">Verify the Incoming Tenant</p></li>
            <li><p class="text bold">Customize Contract & Sign</p></li>
            <li><p class="text bold">Let Us Handle the Payment</p></li>
          </ul>
        </div>

      </div> <!-- /row Closing Icons-->

      <button type="submit" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#exampleModal">Get started</button>


    </div>

  </section> <!-- Closing How It Works -->

  <!-- Opening Tenants -->
  <section id="tenants" class="tenants">
    <div class="wrapper">
      <h1>Current Tenants</h1>
      <h2>Subletting your apartment shouldn’t be difficult, so we built a product to make your
life a whole lot easier.</h2>

      <div class="tenants-main">
        <div class="tenants-column tenants-column1">
          <div class="col1">
            <img src="img/icon-apartment-lead-generation.png">
          </div>
          <div class="col2">
            <p class="text-header bold">Lead Generation</p>
          </div>
          <div class="col3">
            <p class="text-subheader">Our team will advertise your listing and make sure it gets the attention from renters that it deserves.</p>
          </div>



        </div>
        <div class="tenants-column tenants-column2">
          <div class="col1">
            <img  src="img/icon-verification.png">
          </div>
          <div class="col2">
            <p class="text-header bold">Subtenant Verification</p>
          </div>
          <div class="col3">
            <p class="text-subheader">We’ll pre-approve and background check potential subtenants for you.</p>
          </div>


        </div>
        <div class="tenants-column tenants-column3">
          <div class="col1">
            <img src="img/contracts.png">
          </div>
          <div class="col2">
            <p class="text-header bold">Customized Lease Contracts</p>
          </div>
          <div class="col3">
            <p class="text-subheader">Loving that new renovation you just did? Protect it with a customized lease contract.</p>
          </div>


        </div>
        <div class="tenants-column tenants-column4">
          <div class="col1">
            <img src="img/icon-handling.png">
          </div>
          <div class="col2">
            <p class="text-header bold">Seamless Rent Payments</p>
          </div>
          <div class="col3">
            <p class="text-subheader">Sublee will make sure you or your landlord get paid, in full, on-time, and without any hassle.<p>
          </div>


        </div>
      </div>

      <button type="submit" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#exampleModal">Post my lease</button>

    </div> <!-- CLosing Wrapper -->
  </section> <!-- Closing Tenants  -->

  <!-- seekers Section -->
  <!-- seekers Heading Text -->
  <section id="seekers" class="seekers">
    <div class="wrapper">
        <h1>Sublease Seekers</h1>
        <h2>Stay a while. Actually, stay as long as you’d like. Find the right lease for the right amount of time.</h2>


          <!-- Icons -->
          <div class="seekers-main">

            <div class="seekers-column seekers-column1">
              <div class="col1">
                <img src="img/short-term contracts.png">
              </div>
              <div class="col2">
                <p class="text-header bold">Leases That Fit Your Schedule</p>
              </div>
              <div class="col3">
                <p class="text-subheader">Find sublease options between 2 to 12 months.</p>
            </div>
              </div>



            <div class="seekers-column seekers-column2">
              <div class="col1">
                <img  src="img/auto payment.png">
              </div>
              <div class="col2">
                <p class="text-header bold">Rent Payments, Automatic</p>
              </div>
              <div class="col3">
                <p class="text-subheader">Use those hard-earned dollars and get some points. Set up automatic rent payments with your credit card or bank account. We’ll make sure the right person gets their cash.</p>
              </div>


            </div>

            <div class="seekers-column seekers-column3">
              <div class="col1">
                <img src="img/lease from anywhere.png">
              </div>
              <div class="col2">
                <p class="text-header bold">Get Approved From Anywhere</p>
              </div>
              <div class="col3">
                <p class="text-subheader">Can’t visit the apartment? Sublee will verify your profile, so you can sublease that apartment sight un-seen.</p>
              </div>


            </div>

          </div> <!-- Closing Icon Container -->
          <!-- Start Sublet Button -->
          <button type="submit" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#exampleModal">Find my sublease</button>

        </div> <!-- Closing Renter's Right -->

      </div> <!-- Closing seekers Main Container -->
    </div> <!-- Closing Wrapper -->
  </section> <!-- CLosing seekers -->

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
        <div class="black-screen"></div>
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

  <footer>
    <div class="footer-sublee">
      <img src="img/icons8-home-500-grey.png" alt="Sublee Icon">
      <p class="company">Sublee</p>
    </div>

      <div class="footer-location">
        <div class="footer-icon">
          <i class="fas fa-map-marker-alt"></i>
        </div>
        <div class="text-container">
          <p>Made in Toronto, Canada</p>
        </div>
      </div> <!-- Closing Footer-Middle -->

      <div class="footer-contact">
        <a href="#" data-toggle="modal" data-target="#exampleModal">
          <div class="footer-icon">
            <i class="far fa-envelope"></i>
          </div>
          <div class="text-container">
            <p>Contact Us</p>
          </div>
        </a>
      </div> <!-- Closing Footer Right -->

      <div class="footer-privacy">
        <div class="text-container">
          <p>Privacy Policy</p>
          <!-- <a href="https://termsfeed.com/privacy-policy/c2e776dc525b9b73875f3598df3f18be">Privacy Policy</a> -->
        </div>
      </div>

  </footer>

  <div class="privacy-policy-modal"> 
    <div class="overlay"> 
      <div class="privacy-modal-text"> 

        <!-- Close Modal Button -->
        <button type="button" class="close privacy-close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
        </button>  
        <div class="privacy-text-container">
          <h1>Our Privacy Policy</h1>
          <p>
            <h1>Privacy Policy</h1>

            <p>Effective date: November 27, 2018</p>

            <p>Sublee ("us", "we", or "our") operates the http://www.mysublee.com/ website (hereinafter referred to as the "Service").</p>

            <p>This page informs you of our policies regarding the collection, use and disclosure of personal data when you use our Service and the choices you have associated with that data.</p>

            <p>We use your data to provide and improve the Service. By using the Service, you agree to the collection and use of information in accordance with this policy. Unless otherwise defined in this Privacy Policy, the terms used in this Privacy Policy have the same meanings as in our Terms and Conditions, accessible from http://www.mysublee.com/</p>

            <h2>Definitions</h2>
            <ul>
              <li>
                  <p><strong>Service</strong></p>
                  <p>Service is the http://www.mysublee.com/ website operated by Sublee</p>
              </li>
              <li>
                  <p><strong>Personal Data</strong></p>
                  <p>Personal Data means data about a living individual who can be identified from those data (or from those and other information either in our possession or likely to come into our possession).</p>
              </li>
              <li>
                  <p><strong>Usage Data</strong></p>
                  <p>Usage Data is data collected automatically either generated by the use of the Service or from the Service infrastructure itself (for example, the duration of a page visit).</p>
              </li>
              <li>
                  <p><strong>Cookies</strong></p>
                  <p>Cookies are small files stored on your device (computer or mobile device).</p>
              </li>
            </ul>

            <h2>Information Collection and Use</h2>
            <p>We collect several different types of information for various purposes to provide and improve our Service to you.</p>

            <h3>Types of Data Collected</h3>

            <h4>Personal Data</h4>
            <p>While using our Service, we may ask you to provide us with certain personally identifiable information that can be used to contact or identify you ("Personal Data"). Personally identifiable information may include, but is not limited to:</p>

            <ul>
              <li>Email address</li>
              <li>First name and last name</li>        
              <li>Address, State, Province, ZIP/Postal code, City</li>    
              <li>Cookies and Usage Data</li>
            </ul>

            <p>We may use your Personal Data to contact you with newsletters, marketing or promotional materials and other information that may be of interest to you. You may opt out of receiving any, or all, of these communications from us by contacting us.</p>

            <h4>Usage Data</h4>

            <p>We may also collect information on how the Service is accessed and used ("Usage Data"). This Usage Data may include information such as your computer's Internet Protocol address (e.g. IP address), browser type, browser version, the pages of our Service that you visit, the time and date of your visit, the time spent on those pages, unique device identifiers and other diagnostic data.</p>


            <h4>Tracking & Cookies Data</h4>
            <p>We use cookies and similar tracking technologies to track the activity on our Service and we hold certain information.</p>
            <p>Cookies are files with a small amount of data which may include an anonymous unique identifier. Cookies are sent to your browser from a website and stored on your device. Other tracking technologies are also used such as beacons, tags and scripts to collect and track information and to improve and analyse our Service.</p>
            <p>You can instruct your browser to refuse all cookies or to indicate when a cookie is being sent. However, if you do not accept cookies, you may not be able to use some portions of our Service.</p>
            <p>Examples of Cookies we use:</p>
            <ul>
              <li><strong>Session Cookies.</strong> We use Session Cookies to operate our Service.</li>
              <li><strong>Preference Cookies.</strong> We use Preference Cookies to remember your preferences and various settings.</li>
              <li><strong>Security Cookies.</strong> We use Security Cookies for security purposes.</li>
            </ul>

            <h2>Use of Data</h2> 
            <p>Sublee uses the collected data for various purposes:</p>    
            <ul>
              <li>To provide and maintain our Service</li>
              <li>To notify you about changes to our Service</li>
              <li>To allow you to participate in interactive features of our Service when you choose to do so</li>
              <li>To provide customer support</li>
              <li>To gather analysis or valuable information so that we can improve our Service</li>
              <li>To monitor the usage of our Service</li>
              <li>To detect, prevent and address technical issues</li>
              <li>To provide you with news, special offers and general information about other goods, services and events which we offer that are similar to those that you have already purchased or enquired about unless you have opted not to receive such information</li>
            </ul>

            <h2>Transfer of Data</h2>
            <p>Your information, including Personal Data, may be transferred to — and maintained on — computers located outside of your state, province, country or other governmental jurisdiction where the data protection laws may differ from those of your jurisdiction.</p>
            <p>If you are located outside Canada and choose to provide information to us, please note that we transfer the data, including Personal Data, to Canada and process it there.</p>
            <p>Your consent to this Privacy Policy followed by your submission of such information represents your agreement to that transfer.</p>
            <p>Sublee will take all the steps reasonably necessary to ensure that your data is treated securely and in accordance with this Privacy Policy and no transfer of your Personal Data will take place to an organisation or a country unless there are adequate controls in place including the security of your data and other personal information.</p>

            <h2>Disclosure of Data</h2>


            <h3>Legal Requirements</h3>
            <p>Sublee may disclose your Personal Data in the good faith belief that such action is necessary to:</p>
            <ul>
              <li>To comply with a legal obligation</li>
              <li>To protect and defend the rights or property of Sublee</li>
              <li>To prevent or investigate possible wrongdoing in connection with the Service</li>
              <li>To protect the personal safety of users of the Service or the public</li>
              <li>To protect against legal liability</li>
            </ul>

            <h2>Security of Data</h2>
            <p>The security of your data is important to us but remember that no method of transmission over the Internet or method of electronic storage is 100% secure. While we strive to use commercially acceptable means to protect your Personal Data, we cannot guarantee its absolute security.</p>

            <h2>Service Providers</h2>
            <p>We may employ third party companies and individuals to facilitate our Service ("Service Providers"), provide the Service on our behalf, perform Service-related services or assist us in analysing how our Service is used.</p>
            <p>These third parties have access to your Personal Data only to perform these tasks on our behalf and are obligated not to disclose or use it for any other purpose.</p>

            <h2>Links to Other Sites</h2>
            <p>Our Service may contain links to other sites that are not operated by us. If you click a third party link, you will be directed to that third party's site. We strongly advise you to review the Privacy Policy of every site you visit.</p>
            <p>We have no control over and assume no responsibility for the content, privacy policies or practices of any third party sites or services.</p>


            <h2>Children's Privacy</h2>
            <p>Our Service does not address anyone under the age of 18 ("Children").</p>
            <p>We do not knowingly collect personally identifiable information from anyone under the age of 18. If you are a parent or guardian and you are aware that your Child has provided us with Personal Data, please contact us. If we become aware that we have collected Personal Data from children without verification of parental consent, we take steps to remove that information from our servers.</p>


            <h2>Changes to This Privacy Policy</h2>
            <p>We may update our Privacy Policy from time to time. We will notify you of any changes by posting the new Privacy Policy on this page.</p>
            <p>We will let you know via email and/or a prominent notice on our Service, prior to the change becoming effective and update the "effective date" at the top of this Privacy Policy.</p>
            <p>You are advised to review this Privacy Policy periodically for any changes. Changes to this Privacy Policy are effective when they are posted on this page.</p>

            <h2>Contact Us</h2>
            <p>If you have any questions about this Privacy Policy, please contact us:</p>
            <ul>
              <li>By email: startsublee@gmail.com</li>
            </ul>
          </p>

        </div> <!-- CLosing Text Container -->

        <!-- Close Modal Button -->
        <button class="btn btn-warning btn-lg privacy-close privacy-close-2">Close</button>
      </div> <!-- Closing Privacy Modal Text -->
    </div> <!-- Closing Overlay -->
  </div> <!-- Closing Privacy Policy Modal -->


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
