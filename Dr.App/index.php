<?php
session_start();
session_unset();
session_destroy();
?>
<html>
  <head>
    <title>DocsApp</title>
  
  </head>

  <header>
    <?php include('navbar.php');?>
  </header>
  <body>


<!-- main content -->
<section class="pt-4 pt-md-11">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-12 col-md-5 col-lg-6 order-md-2">

            <!-- Image -->
            <img src="main1.png" class="img-fluid mw-md-150 mw-lg-130 mb-6 mb-md-0 aos-init aos-animate" alt="..." data-aos="fade-up" data-aos-delay="100">

          </div>
          <div class="col-12 col-md-7 col-lg-6 order-md-1 aos-init aos-animate" data-aos="fade-up">

            <!-- Heading -->
            <h1 class=" text-center text-md-start">
              Welcome to <span class="text-primary">DocApp</span>
              
            </h1>

            <!-- Text -->
            <p class="lead text-center text-md-start text-muted mb-6 mb-lg-8">
              Now Booking Appointment online is as simple as that. Join us and start Booking your Appointments.
            </p>

            <!-- Buttons -->
            <div class="text-center text-md-start">
              <a href="register.php" class="btn btn-primary shadow lift me-1">
                Join Us! <i class="fe fe-arrow-right d-none d-md-inline ms-3"></i>
              </a>
            </div>
            <p class="lead text-center text-md-start text-muted mb-6 mb-lg-8 mt-3">
              Check out below links for COVID-19 related details. 
            </p>
            <div class="text-center text-md-start mt-4">
            <a href="https://www.mohfw.gov.in/" class="btn btn-primary-soft lift" target="_blank">
                COVID-19 Details
              </a>
              <a href="https://www.cowin.gov.in/" class="btn btn-primary-soft lift" target="_blank">
               COVID-19 Vaccin Details
              </a>
            </div>


          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </section>


<!-- Popular Search  -->
<div class="container text-center">
    <div class="d-grid gap-2 col-6 mx-auto my-4">
        <h3>Popular Search</h3>
    </div>
</div>

<div class="container">
<div class="row">
<?php 
include'dbconn.php';
$sql = "SELECT * FROM doc_info ";
$result = mysqli_query($connect,$sql);
$count = mysqli_num_rows($result);
$c=1; 
while($row=mysqli_fetch_array($result) and $c<=6){

  $doc_name = $row['d_name'];
  $doc_mail = $row['d_mail'];
  $doc_c_add = $row['d_clinic_address'];
  $doc_contact = $row['d_contact'];
  $doc_specialist = $row['d_specialist'];
  $doc_id = $row['d_id'];
?>
  <div class="card mx-4 mx-auto mb-4" style="width: 20rem;">
    <div class="card-body">
      <img src="docIcon.png" class="card-img-top" alt="image" width="180" height="220">
        <h5 class="card-title"> Dr. <?php echo $row['d_name'] ; ?> </h5>
        <h6 class="card-subtitle mb-2 text-muted"><?php echo $row['d_specialist'] ; ?></h6>

        <a href="moreDetails.php?doc_id=<?php echo $doc_id ?>" class="">More Details >></a>

    </div>
</div>
      <?php $c= $c + 1; } ?>
    </div>
</div>

<footer>
  <?php include('footer.php');?>
</footer>
<!-- Login Model Admin -->
<div id="loginModalAdmin" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg" role="content">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Admin Login </h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form method="post" action="admin_p.php">
            <div class="form-row">
              <div class="form-group col-sm-6">
                <label class="sr-only" for="exampleInputEmail3">Email address</label>
                <input type="email" class="form-control form-control-sm mr-1" id="exampleInputEmail3"
                  placeholder="Email" name="email">
              </div>
              <div class="form-group col-sm-6">
                <label class="sr-only" for="exampleInputPassword3">Password</label>
                <input type="password" class="form-control form-control-sm mr-1" id="exampleInputPassword3"
                  placeholder="Password" name="password">
              </div>
            <div class="form-row">
              <button type="button" class="btn btn-secondary btn-sm ml-auto" data-dismiss="modal">Cancel</button>
              <button type="submit" class="btn btn-primary btn-sm ml-1">Sign in</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  </body>
</html>

