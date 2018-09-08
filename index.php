<?php
require_once 'vendor/autoload.php';

require_once 'FormHandler.php';?>
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
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- =======================================================
    Template Name: Flatty
    Template URL: https://templatemag.com/flatty-bootstrap-app-landing-page-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
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
        <a class="navbar-brand" href="#"><b>Sublee</b></a>
      </div>
      <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#" class="smoothscroll"><b>Sign in</b></a></li>

        </ul>
      </div>
      <!--/.nav-collapse -->
    </div>
  </div>

  <div id="headerwrap">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <h1>Making Subletting<br/>
					feel really easy.</h1>
          
           <div class="container-box rotated">
<button type="button" class="btn btn-info btn-lg turned-button" data-toggle="modal" data-target="#myModal">Sign Up!</button>
</div>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

<!-- Modal content-->
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">×</button>
<h4 class="modal-title">1/1 Personal Information</h4>
</div>
<div class="modal-body">

        <form role="form" method="post" id="reused_form" >
        <p>
            We will be sure to keep your data private. </br> You have our word.
        </p>

        <div class="form-group">
            <label for="name">
                Name:</label>
            <input type="text" class="form-control"
            id="name" name="name"   required maxlength="50">

        </div>
        <div class="form-group">
            <label for="email">
                Email:</label>
            <input type="email" class="form-control"
            id="email" name="email" required maxlength="50">
        </div>
        <div class="form-group">
            <label for="name">
                Role</label>
            <textarea class="form-control" type="textarea" name="message"
            id="message" placeholder="This should be tick box, tenante, landlord, both"
            maxlength="6000" rows="7"></textarea>
        </div>





        <button type="submit" class="btn btn-lg btn-success btn-block" id="btnContactUs">Submit</button>

    </form>
    <div id="success_message" style="width:100%; height:100%; display:none; ">
        <h3>Sent your message successfully!</h3>
    </div>
    <div id="error_message"
    style="width:100%; height:100%; display:none; ">
        <h3>Error</h3>
        Sorry there was an error sending your form.

    </div>
</div>

</div>

 </div>
</div>
        </div>
        <!-- /col-lg-6 -->

      </div>
      <!-- /row -->
    </div>
    <!-- /container -->
  </div>
  <!-- /headerwrap -->


  <div class="container">
    <div class="row mt centered">
      <div class="col-lg-6 col-lg-offset-3">
        <h1>How it works.</h1>
        <h3>Subletting is a pain in the ass. Let us help.</h3>
      </div>
    </div>
    <!-- /row -->

    <div class="row mt centered">
      <div class="col-lg-4">
        <img src="img/Dealio-300.png" width="180" alt="">
        <h4>1 - Tenants Finding Landlords </h4>
        <p>Some Text.</p>
      </div>
      <!--/col-lg-4 -->

      <div class="col-lg-4">
        <img src="img/QuickCash-300.png" width="180" alt="">
        <h4>2 - Landlords Finding Tenants </h4>
        <p>Some Text.</p>

      </div>
      <!--/col-lg-4 -->

      <div class="col-lg-4">
        <img src="img/Contract-300.png" width="180" alt="">
        <h4>3 - Reliable Contract Transferals</h4>
        <p>Some Text.</p>

      </div>
      <!--/col-lg-4 -->
    </div>
    <!-- /row -->
  </div>
  <!-- /container -->

  <div class="container">
  
  </div>
  <!-- /container -->

  <div class="container">
    <div class="row mt centered">
      <div class="col-lg-6 col-lg-offset-3">
        <h1>Too simple?</h1>
        <h3>Subletting was never supposed to be hard.<br/>
        Let us take care of the heavy lifting.</h3>
        <img src="img/Easy-400.png" width="300" alt="">
      </div>
    </div>
    <!-- /row -->

    

  <div class="container">
    
  </div>
  <!-- /container -->

  <div class="container">
    <div class="row mt centered">
      <div class="col-lg-6 col-lg-offset-3">
        <h1>Meet the Team.</h1>
        
      </div>
    </div>
    <!-- /row -->

    <div class="row mt centered">
      <div class="col-lg-4">
        <img class="img-circle" src="img/DS.jpg" width="140" alt="">
        <h4>Daniel Szwimer</h4>
        <p>Some Text.</p>
        </div>
      <!--/col-lg-4 -->

      <div class="col-lg-4">
        <img class="img-circle" src="img/JZ.jpg" width="140" alt="">
        <h4>Jason Zoltak</h4>
        <p>Some Text.</p>
        </div>
      <!--/col-lg-4 -->

      <div class="col-lg-4">
        <img class="img-circle" src="img/JD.jpg" width="140" alt="">
        <h4>Jon Drew</h4>
        <p>Some Text.</p>
       
      </div>
      <!--/col-lg-4 -->
    </div>
    <!-- /row -->
  </div>
  <!-- /container -->

  <div class="container">
   
  </div>
  <!-- /container -->



  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/php-mail-form/validate.js"></script>
  <script src="lib/easing/easing.min.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>





</body>
</html>
