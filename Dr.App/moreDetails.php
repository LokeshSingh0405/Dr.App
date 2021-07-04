<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Doccapp</title>

</head>
<body>
<header>
    <?php include('navbar.php');?>
</header>
<?php 
include'dbconn.php';
$doc_id = isset($_GET['doc_id'])?$_GET['doc_id']:"";
$sql = "SELECT * FROM doc_info WHERE d_id='$doc_id'";
$run_sql = mysqli_query($connect,$sql);
$num_row = mysqli_num_rows($run_sql);


if($num_row == 1)
{
$result = mysqli_fetch_array($run_sql,MYSQLI_ASSOC);
$doc_name = ucfirst($result['d_name']);
$doc_mail = $result['d_mail'];
$doc_c_add = $result['d_clinic_address'];
$doc_contact = $result['d_contact'];
$doc_specialist = $result['d_specialist'];
$doc_id = $result['d_id'];
}
$connect->close();
?>
<!-- Main Content -->
<div class="container text-center">
    <div class="d-grid gap-2 col-6 mx-auto my-4">
        <h3>More Details</h3>
    </div>
</div>
<hr class="featurette-divider my-5">
<div class="container">
  <div class="row featurette">
  <div class="col-md-3 order-md-1">
      <img class="container rounded" src="docIcon.png">
    </div>
    <div class="col-md-6 order-md-2">
      <h2 class="featurette-heading"> Dr. <?php echo ucfirst($doc_name); ?></h2>
      <h4 class="text-muted"><?php echo $doc_specialist; ?> </h4>
      <table class="table">
      <tr>
      <th scope="row">Contact :</th>
      <td><?php echo $doc_contact; ?></td>
      </tr>
      <tr>
      <th scope="row">Mail :</th>
      <td><?php echo $doc_mail; ?></td>
      </tr>
      <tr>
      <th scope="row">Clinic Address :</th>
      <td><?php echo $doc_c_add; ?></td>
      </tr>
      </table>

      <?php 
         
         if ($_SESSION)
         {   
             if ($_SESSION['role'] == 'admin'){}
                 // echo '<button type="button" class="btn btn-primary" disabled>Please Login as patient to Book</button>';
             elseif ($_SESSION['role'] == 'doctor'){}
                 // echo '<button type="button" class="btn btn-primary" disabled>Please Login as patient to Book</button>';
           else {
             ?>
     <a href="appointment_book.php?doc_id=<?php echo $doc_id ?>" class="btn btn-primary btn-block mb-4 ">Book Appointment</a>
   <?php
   }
   }
   else{
   echo '<button type="button" class="btn btn-primary  btn-block mb-4" disabled>Please Login to Book</button>';
   }
   ?>
    </div>
  </div>
  </div>
  <hr class="featurette-divider my-5">
  <!-- Footer -->
<footer>
    <?php include('footer.php');?>
</footer>
</body>
</html>