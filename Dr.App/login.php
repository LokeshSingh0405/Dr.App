<?php
session_start();
session_unset();
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>DocApp | Login</title>
  
</head>
<body>
    <header>
    <?php include('navbar.php');?>
  </header>

  <!-- Breadcrumb -->
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Login Catagory</li>    
    </ol>
  </nav>

<!-- headings -->
    <div class="container text-center">
        <div class="mx-auto">
            <h1>Please Choose a Catagory</h1>
        </div>
    </div>
<div class="container text-center my-4">
    <div class="mx-auto ">
        <h3>Login As..</h3>
    </div>
</div>
<!-- Catagory -->
<div class="container px-4">
  <div class="row gx-5">
    <div class="col">
     <div class="p-3 border bg-light text-center"><b><a data-toggle="modal" href="#loginModalP" ><h5>Patient<i class="bi bi-box-arrow-in-right" style="font-size: 1.25rem;"></i></h5></a></b></div>
    </div>
    <div class="col">
    <div class="p-3 border bg-light text-center"><b><a data-toggle="modal" href="#loginModalD" ><h5>Doctor <i class="bi bi-box-arrow-in-right" style="font-size: 1.25rem;"></i></h5></a></b></div>
    </div>
  </div>
</div>
		
<!-- Login Model Patient-->
<div id="loginModalP" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg" role="content">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Patient Login </h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form method="post" action="plogin_process.php">
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
                  <input class="form-check-input" type="checkbox">
                  <label class="form-check-label"> Remember me
                  </label>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-check">
                 <p>Not a member ? <a href="register.php">Join us</a></p> 
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

<!-- Login Model Doctor-->
  <div id="loginModalD" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg" role="content">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Doctor Login </h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form method="post" action="dlogin_process.php">
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
                  <input class="form-check-input" type="checkbox">
                  <label class="form-check-label"> Remember me
                  </label>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-check">
                 <p>Not a member ? <a href="register.php">Join us</a></p>
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
<footer>
    <?php include('footer.php');?>
</footer> 
</body>
</html>