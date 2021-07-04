   <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Docapp</title>
</head>
<body>
    <?php include('back.php');?>
   <?php
    session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    include'dbconn.php';
    $email    = $_POST['email'];
    $password = $_POST['password'];
    
    $query = "SELECT * FROM doc_info WHERE d_mail ='$email' AND d_password = '$password' AND admin_permission = 'G'";
    $query2 = "SELECT * FROM doc_reg_req WHERE d_mail ='$email' AND d_password = '$password'";
    
    $run_query = mysqli_query($connect,$query);
    $run_query2 = mysqli_query($connect,$query2);

    
    $num_row = mysqli_num_rows($run_query);
    $num_row2 = mysqli_num_rows($run_query2);

    if($num_row == 1)
    {
        $result = mysqli_fetch_array($run_query,MYSQLI_ASSOC);
        $session_name_check = $result['d_name'];
        $_SESSION['name'] = $result['d_name'];
        $_SESSION['id'] = $result['d_id'];
        $_SESSION['role'] = $result['role'];
        header('location:doctor_session.php');
    }
    elseif($num_row2 == 1)
    {
        echo '<div class="container text-center ">
        <div class="d-grid gap-2 col-8 mx-auto mb-4">
          <h4>You are not varified. Please contact admin or login after sometime</h4>
         </div>
        </div>';
    }
    
    else
    {
			echo  '<div class="container text-center ">
            <div class="d-grid gap-2 col-8 mx-auto mb-4">
              <h4>email or password do not match</h4>
             </div>
            </div>';    }
}
?>
		<footer>
            <?php include('footer.php');?>
        </footer>
</body>
</html>