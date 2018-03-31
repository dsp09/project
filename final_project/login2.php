<?php
$con = mysqli_connect("localhost", "root", "" , "store" ) or die(mysqli_error($con));
if(isset($_POST['button'])){



$email = mysqli_real_escape_string($con,$_POST['email']);
$password =mysqli_real_escape_string($con, $_POST['password']);

$password1=md5($password);

	$sql="SELECT * FROM users WHERE email='$email' AND password='$password1'";
	$result= mysqli_query($con,$sql);
	$row=mysqli_fetch_array($result);
	if(mysqli_num_rows($result)==1)
	{
		
        session_start();
        $_SESSION['id'] = $row['id'];
        $_SESSION['name']=$row['name'];
        $_SESSION['email']=$email;
        $_SESSION['password']=$password1;
        
        echo "successfully login";
		header("location:/final_project/index2.php");
	}
    else{
    	echo "Invalid password";
    }





}

?>
