<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Docapp</title>
</head>
<body>

<?php include('navbar.php');?>
    
<?php
include "dbconn.php";
if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $email = $_POST['email'];
        $name  = $_POST['name'];
        $feedback = $_POST['feedback'];
        
    $fsql   = "INSERT INTO feedback(f_name,f_email,f_feedback) VALUES ('$name','$email','$feedback')";
    $r_fsql = mysqli_query($connect,$fsql);
    
    if ($connect->query($fsql) === TRUE) 
    {   
//        echo "Feedback succesfully Submitted";
        echo '  <div class="feedback_result_p">
                    <h2>Your Feedback is sucessfully Saved.</h2>
                    <h2>Thanks for the Feedback.</h2>
                </div>';
    }
    else
    {
//        echo "Error: " . $fsql . "<br>" . $connect->error;
        echo '  <div class="feedback_result_n">
                    <h2>Something went wrong.</h2>
                    <h2>Please try again later.</h2>
                </div>';
    }
    mysqli_close($connect);
    }
    
?>
    
		<footer>
            <?php include('footer.php');?>
        </footer>
</body>
</html>
