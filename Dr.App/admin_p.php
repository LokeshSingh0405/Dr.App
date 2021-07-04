<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Doccapp</title>
</head>
<body>

    <?php
    


if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    include'dbconn.php';
    $email    = $_POST['email'];
    $password = $_POST['password'];
    
    $query = "SELECT * FROM admin WHERE a_email ='$email' AND a_password = '$password'";
    $run_query = mysqli_query($connect,$query);
    $num_row = mysqli_num_rows($run_query);

    if($num_row == 1)
    {
        $result = mysqli_fetch_array($run_query,MYSQLI_ASSOC);
        $admin_name = $result['a_name'];
        $_SESSION['name'] = $result['a_name'];
        $_SESSION['role'] = $result['role'];
        header('location:admin_session.php');
    }
    else
    {
			echo  '<div class="feedback_result_n">
                    <h2>Invalid Email/Password.</h2>
                </div>';    }
}

    ?>

</body>
</html>