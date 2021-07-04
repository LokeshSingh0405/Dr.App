<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-smooth-scroll/1.5.5/jquery.smooth-scroll.min.js"></script>
    <link rel="stylesheet" href="styles.css">
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
        
        <li class="breadcrumb-item active" aria-current="page">About</li>    
    </ol>
  </nav>
  <div class="container text-center">
        <div class="d-grid gap-2 col-6 mx-auto">
            <h2>About</h2>
        </div>
    </div>
    
    <div class="container">
        <p>Life is becoming too busy to get medical appointments in person and to maintain a proper health care. The main idea of this work is to provide ease and comfort to patients while taking appointment from doctors and it also resolves the problems that the patients has to face while making an appointment This website is a smart Doctors appointment booking system that provides patients or any user an easy way of booking a doctor’s appointment online. This web based application overcomes the issue of managing and booking appointments according to user’s choice or demands. The task sometimes becomes very tedious for the compounder or doctor himself in manually allotting appointments for the users as per their availability. Hence this project offers an effective solution where users can view various booking slots available and select the preferred date and time. This system also allows users to cancel their booking anytime. </p>
        
        <p>Our project aims at Business process automation, i.e. we have tried to computerize various processes of Doctors Appointment System. In computer system the person has to fill the various forms number of copies of the forms can be easily generated at a time. In computer system, it is not necessary to create the manifest but we can directly print it, which saves our time. To assist the staff in capturing the effort spent on their respective working areas. To utilize resources in an efficient manner by increasing their Productivity through automation. The system generates types of information that can be used for various purposes. The system satisfy the user requirement. It would be easy to understand by the user and operator and will be easy to operate. The system will have a good user interface and can be expandable.</p>

        
        <p><b>For any query you can <a href="contact.php">contact</a> us anytime. Thankyou for using our service.</b></p><br>
            <p>This is a Minor Project Created By: Alby, Ajay, Gaurank for SD Bansal College of Technology,Indore</p>

    </div>
    
		<footer>
            <?php include('footer.php');?>
        </footer>
</body>
</html>