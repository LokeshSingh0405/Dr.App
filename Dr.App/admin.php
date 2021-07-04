<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-smooth-scroll/1.5.5/jquery.smooth-scroll.min.js"></script>
    <link rel="stylesheet" href="styles.css">
    <style>
        
    </style>
</head>
<body>
    <header>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
    <div class="navbar">
      <ul class="navbar-container">
        <li style="color:black;"><a class="left-underline nav-button brand-logo">DocsApp</a></li>
        <li class="nav-item active"><a href="index.php" class="left-underline nav-button" data-scroll>Home</a></li>
      </ul>
    </div>
    </header><br><br><br>
    <?php include('back.php');?>

       
       
    <div class="headings">
        <h1>Admin LOGIN</h1>
    </div>
        <form method="post" action="admin_p.php">
           <ul class="form_no_bullet">
                <li class="form_li_pad"><input name="email" type="email" class="form-input" placeholder="Email" required></li>
                <li class="form_li_pad"><input name="password" type="password" class="form-input" placeholder="Password" required></li>
                <li class="form_li_pad" id="form_button"><button type="submit" >Login</button></li>
            </ul>        
        </form>
		<footer>
            <?php include('footer.php');?>
        </footer>
</body>
</html>
