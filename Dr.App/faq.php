<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DocApp | FAQs</title>
</head>
<body>
<header>
    <?php include('navbar.php');?>
</header>
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
        
        <li class="breadcrumb-item active" aria-current="page">FAQs</li>    
    </ol>
  </nav>

<!-- main content -->
<div class="container">
<p><b>Q. How to Book Appointment</b></p>
    <div class="text-break"><p><b>Ans. </b>To book an appointment,you must need to login first. After Login you can search from varienty of doctors from the search bar provided on the top. Type the name you want to search and press 'enter' or click the Magnify Icon. It will show some result. Choose the apropriate doctor and click on 'Book Appointment' . Fill the necessary details and then click on 'Book' button to cogirm your booking</p></div>
<p><b>Q. How to Search for Doctor</b></p>
    <div class=""><p><b>Ans. </b>You can search from varienty of doctors from the search bar. To Search for a doctor go to search bar provided on the top of the page. Type the name you want to search and press 'enter' or click the Magnify Icon.</p></div>
<p><b>Q. How to Check my Booking History</b></p>
    <div class=""><p><b>Ans. </b>To Check your Booking History login to your account, click on your name on top right. It will box with diffrent option. Click on 'My Booking History' to view your booking History </p></div>
</div>

<footer>
    <?php include('footer.php');?>
</footer>
</body>
</html>