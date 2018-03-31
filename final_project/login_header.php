
<!DOCTYPE HTML>
<html>
  <head>
    <title>Book Store</title>
    <link rel="stylesheet" href="script.css" type="text/css">
    <!--        Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <!--jQuery library--> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--Latest compiled and minified JavaScript--> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body >
 <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="#" class="navbar-brand"><strong><h4><center>Book Store</center></h4></strong></a>
          <br/>
    
          <div class="dropdown">
  <button class="dropbtn">Categories</button>
  <div class="dropdown-content">
    <a href="home.php">Arts & Photography</a>
    <a href="home.php">Children's Books</a>
    <a href="home.php">Entertainment</a>
     <a href="home.php">History</a> 
     <a href="home.php">Literature & Fiction</a>
      <a href="home.php">Science Books</a>
       <a href="home.php">Academics</a>
        <a href="home.php">Religion & Spirituality</a>
         <a href="home.php">Competition Books</a>
  </div>
</div></div>

        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-right ">
            
            <li><a href="cart.php"><strong><span class="glyphicon glyphicon-shopping-cart"></span>Cart</strong></a></li>
            <li><a href="settings.php"><strong><span class="  glyphicon glyphicon-list-alt"></span>Settings</strong></a></li>
            <li><a href="logout.php"><strong><span class="glyphicon glyphicon-log-in"></span>Logout</strong></a></li>

            <li><?php echo $_SESSION['name']?></li>
          
          </ul>
      </div>

      
  </div></nav>
  </body>
  </html>

