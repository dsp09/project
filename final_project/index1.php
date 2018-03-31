


<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">
  

</style>
</head>
<body>


<!-- checking whether a user is logged in or not................-->

<?php
if(isset($_SESSION['id']))
{ 
  require 'login_header.php';
?>
<!--banner-->
<div class="banner">
  <div class="container">
      <div id="banner_content">
        <center><h1 style="color:white">Books are uniquely portable Magic</h1><br/>
        <a href="home.php" class="btn btn-danger btn-lg-active">Shop Now</a></center>
      </div>
  </div>
</div>
<!--end of banner-->

<div class="container">
     <?php 
         require 'login_body.php';
         require 'footer.php';
      ?>
</div>

<?php
  require 'login_modal.php ';
  }
 else{
        
  require 'logout_header.php';
 ?>
   



<!--banner-->

<div class="banner">
  <div class="container">
      <div id="banner_content">
        <center><h1 style="color:white">Books are uniquely portable Magic</h1><br/>
        <a href="signup.php" class="btn btn-danger btn-lg-active">Shop Now</a></center>
      </div>
  </div>
</div>
<!--end of banner-->

<div class="container">
     <?php 
         require 'logout_body.php';
         require 'footer.php';
      ?>
</div>

<?php
  require 'login_modal.php ';
  }
 ?>
</body>
</html>