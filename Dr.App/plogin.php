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
    <?php include('navbar.php');?>
</header>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item"><a href="login.php">Catagory</a></li>
        <li class="breadcrumb-item active" aria-current="page">Patient Login</li>    
    </ol>
</nav>
<div class="container text-center">
    <div class="d-grid gap-2 col-6 mx-auto">
        <h1>Patient Login</h1>
    </div>
</div>
<div class="container">
<div class="login-form">
    <form action="/examples/actions/confirmation.php" method="post">
        <h2 class="text-center">Log in</h2>       
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Username" required="required">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" placeholder="Password" required="required">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Log in</button>
        </div>
        <div class="clearfix">
            <label class="float-left form-check-label"><input type="checkbox"> Remember me</label>
            <a href="#" class="float-right">Forgot Password?</a>
        </div>        
    </form>
    <p class="text-center"><a href="#">Create an Account</a></p>
</div>
</div>

        <form method="post" action="plogin_process.php">
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
