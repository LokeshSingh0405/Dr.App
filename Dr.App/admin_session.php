   <?php
    include('dbconn.php');
    include('admin_p.php');

if ($_SESSION)
{   
    if ($_SESSION['role'] == 'patient')
        header('location:user_session.php');
    elseif ($_SESSION['role'] == 'doctor')
        header('location:doctor_session.php');
   // echo'Welcome ' . $_SESSION['name'];
}
else
{
    session_destroy();
    echo 'Something went wrong please login again';
}
?>
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DocApp</title>
</head>
<body>

<!-- Navebar -->
<header>
    <?php include('navbar.php');?>
</header>

<?php 
    include('dbconn.php');
    $date = date('Y-m-d');
    $sql = "SELECT * FROM doc_reg_req";
	$result = mysqli_query($connect,$sql);
	$count = mysqli_num_rows($result); 
?>

  <!-- Doctor Registrattion Request Display and Action -->
  <?php 
  if($count>=1){ 
?>
<div class="container text-center">
    <div class="d-grid gap-2 col-6 mx-auto my-4">
        <h3>Doctor Registration Requests</h3>
    </div>
</div>
<div class="container">
  <table class="table table-hover table-striped">
  <thead>
    <tr>
      <th scope="col">S.No</th>
      <th scope="col">Patient Name</th>
      <th scope="col">Mail</th>
      <th scope="col">Contact</th>
      <th scope="col">Local Address</th>
      <th scope="col">Clinic Address</th>
      <th scope="col">Specialist</th>
      <th scope="col">License No.</th>
      <th scope="col" colspan="2">Choose an Action</th>

    </tr>
  </thead>
  <?php 
  $c=1; 
  while($row=mysqli_fetch_array($result)){ 
      ?>
  <tbody>
    <tr>
      <th scope="row"><?php echo $c ; ?></th>
      <td><?php echo $row['d_name'] ; ?></td>
      <td><?php echo $row['d_mail'] ; ?></td>
      <td><?php echo $row['d_contact'] ; ?></td>
      <td><?php echo $row['d_local_address'] ; ?></td>
      <td><?php echo $row['d_clinic_address'] ; ?></td>
      <td><?php echo $row['d_specialist'] ; ?></td>
      <td><?php echo $row['license_no'] ; ?></td>
      <td><a href="accept.php?doc_req_id=<?php echo $row['d_req_id'] ?>">Accept</a></td>
      <td><a href="decline.php?doc_req_id=<?php echo $row['d_req_id'] ?>">Decline</a></td>

    </tr>
    </tbody>
    <?php $c=$c + 1; } 
     ?>
</table>
<?php }else{
?>

  <!--If No Request are Available-->

<div class="container text-center">
    <div class="d-grid gap-2 col-6 mx-auto my-4">
        <h3>No Requests Available</h3>
    </div>
</div>
<div class="container">
  <table class="table table-hover table-striped">
  <thead>
    <tr>
      <th scope="col">S.No</th>
      <th scope="col">Doctor Name</th>
      <th scope="col">Patient Name</th>
      <th scope="col">Date</th>
      <th scope="col">Time</th>
      <th scope="col">Booking ID</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"></th>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    </tbody>
    
</table>

<?php 
}
        
?>
</div>
<!-- footer -->
  <footer>
    <?php include('footer.php');?>
</footer> 
</body>
</html>
