<?php


$con = mysqli_connect("localhost", "root", "", "store") or die(mysqli_error($con));
session_start();

if(isset($_POST['submit']))
{
 $name = mysqli_real_escape_string($con,$_POST['name']);
 $email = mysqli_real_escape_string($con,$_POST['email']);
 $password =mysqli_real_escape_string($con, $_POST['password']);
 $contact =mysqli_real_escape_string($con, $_POST['contact']);
 $city = mysqli_real_escape_string($con,$_POST['city']);
 $address = mysqli_real_escape_string($con,$_POST['address']);
///////////////////////////////////////////////////////
 $select_query="select * from users where email='$email'";
 $select_query_result=mysqli_query($con,$select_query) or die(mysqli_error($con));
 $total_rows_fetched=mysqli_num_rows($select_query_result);
 $password=md5($password);
//////////////////////////////////////////////////
if($total_rows_fetched==0){
   
    $user_registration_query = "insert into users(name,email,password,contact,city,address) values ('$name', '$email', '$password', '$contact','$city','$address')";
    $user_registration_submit = mysqli_query($con, $user_registration_query) or die(mysqli_error($con));  
    $_SESSION['email']=$email;
$_SESSION['name']=$name;
$_SESSION['password']=$password;
$_SESSION['contact']=$contact;
$_SESSION['message']="you are successfully signed in";
$_SESSION['id']=mysqli_insert_id($con);
//echo "<center>User Successfully inserted.<br><br>";
header("location:index2.php");  

}
else{

	echo "There is already an account with the id.....Try with another one!!";
}

}
?>
 <!-- <a href="index.php"><?php //echo "Continue Shopping..!!</center>"; ?></a> -->








     
   
  