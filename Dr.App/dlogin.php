<?php
session_start();
session_unset();
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        
    </style>
</head>
<body>
    <header>
    <?php include('navbar.php');?>
  </header>
    <?php include('back.php');?>
       
       
    <div class="headings">
        <h1>DOCTOR LOGIN</h1>
    </div>
        <form action="dlogin_process.php" method="post">
           <ul class="form_no_bullet">
                <li class="form_li_pad"><input name="email" type="email" class="form-input" placeholder="Email" required></li>
                <li class="form_li_pad"><input name="password" type="password" class="form-input" placeholder="Password" required></li>
            <li class="form_li_pad" id="form_button"><button type="submit" >Login</button></li>
            </ul>
               <div class="else_content">

                    <h3>Not A Member ?</h3>
                <div class="elsebtn">    
                    <a class="btnlink btn1" href="register.php"><h3>Sign Up Here</h3></a>
                </div> 
                </div>       
        </form>
		<footer>
            <?php include('footer.php');?>
        </footer>
</body>
</html>
