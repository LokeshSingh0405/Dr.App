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
<!-- Breadcrumb -->
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
    <?php 
    if ($_SESSION)
    {   
        if ($_SESSION['role'] == 'admin')
            echo '<li class="breadcrumb-item"><a href="admin_session.php">Home</a></li>';
        elseif ($_SESSION['role'] == 'doctor')
          echo '<li class="breadcrumb-item"><a href="doctor_session.php">Home</a></li>';
        elseif ($_SESSION['role'] == 'patient')
          echo '<li class="breadcrumb-item"><a href="user_session.php">Home</a></li>';
    }
    else
    {
        echo '<li class="breadcrumb-item"><a href="index.php">Home</a></li>';
    }
    ?>
        
        <li class="breadcrumb-item active" aria-current="page">Customer Details</li>    
    </ol>
  </nav>
<?php 
    include('dbconn.php');
    $date = date('Y-m-d');
    $sql = "SELECT * FROM customer_info";
	$result = mysqli_query($connect,$sql);
	$count = mysqli_num_rows($result); 
?>

  <!-- Doctor Registrattion Request Display and Action -->
  <?php 
  if($count>=1){ 
?>
<div class="container text-center">
    <div class="d-grid gap-2 col-6 mx-auto my-4">
        <h3>Customer Details</h3>
    </div>
</div>
<div class="container">
  <table class="table table-hover table-striped">
  <thead>
    <tr>
      <th scope="col">S.No</th>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Mail</th>
      <th scope="col">Contact</th>
      <th scope="col">Gender</th>
      <th scope="col">Blood Grp.</th>

    </tr>
  </thead>
  <?php 
  $c=1; 
  while($row=mysqli_fetch_array($result)){ 
      ?>
  <tbody>
    <tr>
      <th scope="row"><?php echo $c ; ?></th>
      <td><?php echo $row['cu_id'] ; ?></td>
      <td><?php echo $row['cu_name'] ; ?></td>
      <td><?php echo $row['cu_mail'] ; ?></td>
      <td><?php echo $row['cu_contact'] ; ?></td>
      <td><?php echo $row['cu_gender'] ; ?></td>
      <td><?php echo $row['cu_blood'] ; ?></td>

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
        <h3>No Customer Details Found</h3>
    </div>
</div>
<div class="container">
  <table class="table table-hover table-striped">
  <thead>
    <tr>
    <th scope="col">S.No</th>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Mail</th>
      <th scope="col">Contact</th>
      <th scope="col">Gender</th>
      <th scope="col">Blood Grp.</th>
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
      <td></td>

    </tr>
    </tbody>
    
</table>

<?php 
}
        
?>
</div>
  <footer>
    <?php include('footer.php');?>
</footer> 
</body>
</html>
