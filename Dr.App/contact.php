<?php
// include"dbconn.php";
// $sql="SELECT * FROM contact WHERE contact_id='1'";
// $sql_run=mysqli_query($connect,$sql);
// $num_row=mysqli_num_rows($sql_run);
// if($num_row == 1)
//     {
//         $result = mysqli_fetch_array($sql_run,MYSQLI_ASSOC);
//         $local = $result['local'];
//         $mobile = $result['mobile'];
//         $email1 = $result['email1'];
//         $email2 = $result['email2'];
//     echo "sucess";
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact</title>
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
        
        <li class="breadcrumb-item active" aria-current="page">Contact</li>    
    </ol>
  </nav>
  <section class=" p-4 d-flex justify-content-center mb-4">
      <form id="contact-form" class="text-center" style="width: 100%; max-width: 500px" method="post" action="contact_process.php">
        <h2>Contact us</h2>
        
        <?php if ($_SESSION)
{ ?>      
        <!-- Name input disable if session -->
        <div class="form-outline mb-4">
          <label class="sr-only" for="exampleInputEmail3">Name</label>
                <input type="text" class="form-control form-control-sm mr-1" id="contactname" name="name"
                  placeholder="Name" value="<?php echo $_SESSION['name']; ?>" readonly>
        <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div><div class="form-notch-middle" style="width: 42.4px;"></div><div class="form-notch-trailing"></div></div></div>
        
        <!-- Email input disable if session-->
        <div class="form-outline mb-4">
          <label class="sr-only" for="exampleInputEmail3">Email address</label>
                <input type="email" class="form-control form-control-sm mr-1" id="contactemail" name="email"
                  placeholder="Email" value="<?php echo $_SESSION['email']; ?>" readonly>
        <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div><div class="form-notch-middle" style="width: 88.8px;"></div><div class="form-notch-trailing"></div></div></div>

<?php } else {?>
        <!-- Name input if no session-->
        <div class="form-outline mb-4">
          <label class="sr-only" for="exampleInputEmail3">Name</label>
                <input type="text" class="form-control form-control-sm mr-1" id="contactname" name="name"
                  placeholder="Name" required>
        
        <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div><div class="form-notch-middle" style="width: 42.4px;"></div><div class="form-notch-trailing"></div></div></div>
        
        <!-- Email input if no session-->
        <div class="form-outline mb-4">
          <label class="sr-only" for="exampleInputEmail3">Email address</label>
                <input type="email" class="form-control form-control-sm mr-1" id="contactemail" name="email"
                  placeholder="Email" required>
        <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div><div class="form-notch-middle" style="width: 88.8px;"></div><div class="form-notch-trailing"></div></div></div>

<?php } ?>
        
        <!-- Message input -->
        <div class="form-outline mb-4">
          <label class="sr-only" for="exampleInputEmail3">Message</label>
                <textarea type="textarea" class="form-control form-control-sm mr-1" id="contactmessage"
                  placeholder="Message" name="feedback" rows="2" style="height:100%"; required></textarea>
        <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div><div class="form-notch-middle" style="width: 60px;"></div><div class="form-notch-trailing"></div></div></div>

        <!-- Submit button -->
        <button class="btn btn-primary btn-block mb-4">Send</button>
      </form>
    </section>    
            <!-- <form method="post" action="contact_process.php">
                <ul class="form_no_bullet">
                    <li class="form_li_pad"><input name="name" type="text" class="form-input" placeholder="Name" required></li>
                    <li class="form_li_pad"><input name="email" type="email" class="form-input" placeholder="Email" required></li>
                    <li class="form_li_pad"><textarea name="feedback" class="form-input" placeholder="Feedback" required></textarea></li><br><br><br>
                    <div class="form_li_pad" id="form_button">    
                        <button type="submit" >Submit</button>
                    </div>
                </ul>
            </form> -->

    <!-- <table class="cts">
         <tr>
             <th class="ctd">
				<div class="contact">
						<div class="contact-name">
							Phone :
						</div>
						<div class="contact-detail">
							Local: <?php echo "$local"; ?> <br>
							Mobile: <?php echo "$mobile"; ?>
						</div>
				</div> -->
                 <!-- /.contact -->
            <!-- </th>
             <th class="ctd">
				<div class="contact">
						<div class="contact-name">
							 Email :
						</div>
						<div class="contact-detail">
							
							   <?php echo "$email1"; ?><br>
							   <?php echo "$email2"; ?>

						</div> -->
				</div> <!-- /.contact --></th>
              </tr>
    </table>
		<footer>
            <?php include('footer.php');?>
        </footer>
</body>
</html>
