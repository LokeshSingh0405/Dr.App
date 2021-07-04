<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Docapp</title>
</head>
<body>
    <header>
    <?php

    //session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    include('dbconn.php');
    $email    = $_POST['email'];
    $password = $_POST['password'];
    
    $query = "SELECT * FROM customer_info WHERE cu_mail ='$email' AND cu_password = '$password' AND status = 'Active'";
    $run_query = mysqli_query($connect,$query);
    $num_row = mysqli_num_rows($run_query);

    if($num_row == 1)
    {
        $result = mysqli_fetch_array($run_query,MYSQLI_ASSOC);
        // $session_name_check = $result['cu_name'];
        $_SESSION['name'] = ucfirst($result['cu_name']);
        $_SESSION['email'] = $result['cu_mail'];
        $_SESSION['id']    = $result['cu_id'];
        $_SESSION['role'] = $result['role'];
        
        header('location:user_session.php');
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