<?php
    session_start();
    include('dbconn.php');

if ($_SESSION)
{   
    if ($_SESSION['role'] == 'admin')
        header('location:admin_session.php');
    elseif ($_SESSION['role'] == 'doctor')
        header('location:doctor_session.php');
}
else
{
    session_destroy();
    
}
//<!-- result -->
	$doc_id = isset($_GET['doc_id'])?$_GET['doc_id']:"";
	      $sql = "SELECT * FROM doc_info WHERE d_id='$doc_id'";
        $run_sql = mysqli_query($connect,$sql);
        $num_row = mysqli_num_rows($run_sql);
        if($num_row == 1)
        {
          $result = mysqli_fetch_array($run_sql,MYSQLI_ASSOC);
          $doc_name = $result['d_name'];
          
        }
        $connect->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DocApp | Book</title>
</head>
<body>
<!-- header navbar -->
<header>
    <?php include('navbar.php');?>
</header>
<!-- main content -->
<section class=" p-4 d-flex justify-content-center mb-4">
      <form id="contact-form" class="text-center" style="width: 100%; max-width: 500px" method="post" action="">
      
      <div class="container text-center ">
          <div class="d-grid gap-2 col-8 mx-auto mb-4">
            <h2>Book Appointment</h2>
           </div>
          </div>
        <!-- Name info -->
        <div class="form-outline mb-2">
          <label class="d-flex p-2" for="exampleInputEmail3">Booker Name</label>
                <input class="form-control form-control-sm mr-1" id="contactname" name="name"
                  placeholder="" value="<?php echo $_SESSION['name']; ?>" readonly>
        <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div><div class="form-notch-middle" style="width: 42.4px;"></div><div class="form-notch-trailing"></div></div></div>

        <!-- Email info -->
        <div class="form-outline mb-2">
          <label class="d-flex p-2" for="exampleInputEmail3">Booker Email</label>
                <input type="email" class="form-control form-control-sm mr-1" id="contactemail" name="email"
                placeholder="" value="<?php echo $_SESSION['email']; ?>" readonly>
        <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div><div class="form-notch-middle" style="width: 88.8px;"></div><div class="form-notch-trailing"></div></div></div>
        
        <!-- Booking Doc info -->
        <div class="form-outline mb-2">
          <label class="d-flex p-2" for="exampleInputEmail3">Booking Appointment with</label>
                <input class="form-control form-control-sm mr-1" id="contactemail" name="doc_name"
                placeholder="" value="<?php echo 'Dr. ' .  $doc_name ?>" readonly>
        <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div><div class="form-notch-middle" style="width: 88.8px;"></div><div class="form-notch-trailing"></div></div></div>

        <!-- Patient Name input -->
        <div class="form-outline mb-2">
          <label class="d-flex p-2" for="exampleInputEmail3">Patient Name</label>
                <input type="text" class="form-control form-control-sm mr-1" id="contactname" name="p_name"
                  placeholder="" required>
        <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div><div class="form-notch-middle" style="width: 42.4px;"></div><div class="form-notch-trailing"></div></div></div>


        <!-- Date input -->
        <div class="form-outline mb-4">
          <label class="d-flex p-2" for="exampleInputEmail3"> Select Date</label>
                <input type="date" class="form-control form-control-sm mr-1" id="contactemail" name="b_date"
                  placeholder="Select Date" required>
        <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div><div class="form-notch-middle" style="width: 88.8px;"></div><div class="form-notch-trailing"></div></div></div>

        <!-- Time input -->
        <div class="form-outline mb-4">
          <label class="d-flex p-2" for="exampleInputEmail3"> Select Time</label>
            <select class="form-control form-control-sm mr-1" aria-label="Default select example" name="b_time" required>
              <option selected disabled>Open this select menu</option>
              <option value="10:00">10:00 AM (Morning)</option>
              <option value="11:00">11:00 AM</option>
              <option value="12:00">12:00 PM (Afternoon)</option>
              <option value="05:00">05:00 PM </option>
              <option value="06:00">06:00 PM (Evening)</option>
              <option value="07:00">07:00 PM </option>
            </select>
        <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div><div class="form-notch-middle" style="width: 88.8px;"></div><div class="form-notch-trailing"></div></div></div>


        <!-- Submit button -->
        <button name="submit" type="submit" class="btn btn-primary btn-block mb-4" >Book Appointment</button>
      </form>
    </section> 

    			<!-- 	booking info-->	
			<!-- confirming booking -->
      <?php
    include('dbconn.php');

  if(isset($_POST['submit'])){
  
  $c_name = $_SESSION['name'];
  $c_id   = $_SESSION['id'];
  $p_name = $_POST["p_name"];
  $b_date = $_POST["b_date"];
  $b_time = $_POST["b_time"];



  $sql = "INSERT INTO booking_request (d_id,d_name,cu_id,cu_name,p_name,b_date,b_time)
  VALUES ('$doc_id','$doc_name','$c_id','$c_name','$p_name','$b_date','$b_time')";

  if ($connect->query($sql) === TRUE) {
      echo "<script>alert('Your booking has been accepted!');</script>";
  } else {
      echo "<script>alert('There was an Error. Please Try Again !')<script>";
  }

  $connect->close();
}
?> 

<!-- footer -->
<footer>
  <?php include('footer.php');?>
</footer>

</body>
</html>