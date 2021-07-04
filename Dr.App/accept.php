<?php if(!isset($_SESSION)){
	session_start();
	}  

    $doc_req__id = isset($_GET['doc_req_id'])?$_GET['doc_req_id']:"";
    echo $doc_req__id;

    include('dbconn.php');
    $date = date('Y-m-d');
    $sql = "SELECT * FROM doc_reg_req WHERE d_req_id = '$doc_req__id'";
	$result = mysqli_query($connect,$sql);
	$count = mysqli_num_rows($result); 
    $row=mysqli_fetch_array($result);

    if($count==1){
        $d_mail=$row['d_mail'];
        $d_name=$row['d_name'];
        $d_password=$row['d_password'];
        $d_address=$row['d_local_address'];
        $d_clinic_address=$row['d_clinic_address'];
        $d_contact=$row['d_contact'];
        $d_specialist=$row['d_specialist'];
        $d_licence_no=$row['license_no'];

        $sql_2="INSERT INTO doc_info (d_req_id,d_mail,d_name,d_password,d_address,d_clinic_address,d_contact,d_specialist,licence_no)
        VALUES ('$doc_req__id','$d_mail','$d_name','$d_password','$d_address','$d_clinic_address','$d_contact','$d_specialist','$d_licence_no')";
        
        $delete_sql="DELETE FROM doc_reg_req WHERE d_req_id = '$doc_req__id'";
    
        if ($connect->query($sql_2) === TRUE) {
            if ($connect->query($delete_sql) === TRUE) {
                echo "<script>alert('Doctor Added Succesfully!');</script>";
                header('location:admin_session.php');
            }
           
        } else {
            echo "<script>alert('There was an Error. Please Try Again !')<script>";
                header('location:admin_session.php');
        }
      
        $connect->close();
}
?>