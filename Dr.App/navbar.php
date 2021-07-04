<?php
    if(!isset($_SESSION)) 
    {   
        session_start(); 
    } 
    $timezone = date_default_timezone_set('Asia/Kolkata');

?>
<link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/headers/">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
  <header class="p-3 mb-3 border-bottom">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
      <img class="d-flex align-items-center mb-2 mr-3" src="logoIcon2.png" alt="Bootstrap" width="80" height="40">
        <!-- <a href="" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">DocApp</a> -->

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
        <?php if ($_SESSION)
            {
              if ($_SESSION['role'] == 'patient')
                echo '<li><a href="user_session.php" class="nav-link px-2 link-dark">Home</a></li>';
              elseif ($_SESSION['role'] == 'doctor')
                echo '<li><a href="doctor_session.php" class="nav-link px-2 link-dark">Home</a></li>';
              elseif ($_SESSION['role'] == 'admin')
                echo '<li><a href="admin_session.php" class="nav-link px-2 link-dark">Home</a></li>';
              else
                echo '<li><a href="index.php" class="nav-link px-2 link-dark">Home</a></li>';
            } else{
              echo '<li><a href="index.php" class="nav-link px-2 link-dark">Home</a></li>';
            }

        ?>
          
          <?php if ($_SESSION)
              { ?>
          <?php } else {?>
          <li><a href="#loginModalAdmin" data-toggle="modal" class="nav-link px-2 link-dark">Admin</a></li>
          <?php } ?>
          <li><a href="contact.php" class="nav-link px-2 link-dark">Contact</a></li>
          <li><a href="faq.php" class="nav-link px-2 link-dark">FAQs</a></li>
          <li><a href="about.php" class="nav-link px-2 link-dark">About</a></li>
        </ul>

          <!-- Search bar -->
        <form class="col-12 col-lg-4 mb-6 mb-lg-0 " action="search.php" method="get">
        <div class="input-group">
          <input type="search" class="form-control" name="searchElement" placeholder="Search..." aria-label="Search" required>
          <div class="border">
          <button type="submit" class="btn btn-default form-control mt-1"><i class="bi bi-search"></i></button>
          </div>
          </div>
        </form>
<?php  if ($_SESSION)
  { ?>

  <div class="dropdown text-end ml-auto">
          <a href="#" class="d-block nav-link px-2 link-dark text-decoration-none dropdown-toggle bi bi-person-fill" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
          <?php if ($_SESSION['role'] == 'doctor'){ echo "Dr. " . $_SESSION['name']; }else{echo " " . $_SESSION['name'];}?>
          </a>
          <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
            <!-- <li><a class="dropdown-item" href="#">Settings</a></li> -->
            <?php if ($_SESSION['role'] == 'patient') {?>
            <li><a class="dropdown-item" href="myAppointmentsP.php">My Booking History</a></li>
            <?php }elseif ($_SESSION['role'] == 'admin') {?>
            <li><a class="dropdown-item" href="customerDetails.php">Customer Details</a></li>
            <li><a class="dropdown-item" href="doctorDetails.php">Doctors Details</a></li>
            <li><a class="dropdown-item" href="bookingDetails.php">Booking Details</a></li>
            <li><a class="dropdown-item" href="admin_session.php">Doctor Booking Requests</a></li>
             <?php }elseif ($_SESSION['role'] == 'doctor') {?>
             <li><a class="dropdown-item" href="myAppointmentsD.php">Today's Appointments</a></li>
             <li><a class="dropdown-item" href="appointmentHistory.php">Appointment History</a></li><?php } ?>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="logout.php">Sign out</a></li>
          </ul>
        </div>

<?php } else {?>
        <div class="text-end ml-auto">
        <a class="btn btn-outline-primary me-2" href="login.php" role="button">Login</a>
        <a class="btn btn-outline-primary me-2" href="register.php" role="button">Register</a>
      </div>
        <?php } ?>

      </div>
    </div>
  </header>

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
              <div class="col-sm-6">
                <div class="form-check">
                  <!-- Empty Block -->
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-check">
                 <!-- Empty Block -->
                </div>
              </div>
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