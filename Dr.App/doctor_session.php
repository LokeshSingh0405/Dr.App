<?php
session_start();
    include('dbconn.php');

if ($_SESSION)
{   
    if ($_SESSION['role'] == 'patient')
        header('location:user_session.php');
    elseif ($_SESSION['role'] == 'admin')
        header('location:admin_session.php');
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
    <title>Docapp</title>
</head>
<body>
<!-- Navebar -->
<header>
    <?php include('navbar.php');?>
</header>

<?php 
    include('dbconn.php');
    $date = date('Y-m-d');
    $doc_id = $_SESSION['id'];
    $sql = " SELECT * FROM booking_request WHERE b_date = '$date' and d_id = '$doc_id' ";
	$result = mysqli_query($connect,$sql);
	$count = mysqli_num_rows($result); 
?>

  <!-- My Appointments Details Table if appointment available today -->
  <?php 
  if($count>=1){ 
?>
<div class="container text-center">
    <div class="d-grid gap-2 col-6 mx-auto my-4">
        <h3>Today's Appointments</h3>
    </div>
</div>
<div class="container">
  <table class="table table-hover table-striped">
  <thead>
    <tr>
      <th scope="col">S.No</th>
      <th scope="col">Patient Name</th>
      <th scope="col">Date</th>
      <th scope="col">Time</th>
      <th scope="col">Booking ID</th>
    </tr>
  </thead>
  <?php 
  $c=1; 
  while($row=mysqli_fetch_array($result)){ ?>
  <tbody>
    <tr>
      <th scope="row"><?php echo $c ; ?></th>
      <td><?php echo $row['p_name'] ; ?></td>
      <td><?php echo $row['b_date'] ; ?></td>
      <td><?php echo $row['b_time'] ; ?></td>
      <td><?php echo $row['b_id'] ; ?></td>
    </tr>
    </tbody>
    <?php $c=$c + 1; } 
     ?>
</table>
<?php }else{
?>

  <!-- My Appointment Details Table if no appointment available-->

<div class="container text-center">
    <div class="d-grid gap-2 col-6 mx-auto my-4">
        <h3>No Appointment Today</h3>
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
<!-- Footer -->
<footer>
    <?php include('footer.php');?>
</footer>
</body>
</html>