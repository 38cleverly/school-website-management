

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
</head>
<body>
<section class="header" id="header">
		<i class="fas fa-bars fixed" onclick="openside()"></i>
		<img src="./logo_img/logo.png" class="fixed-logo">
		<div class="line-fixed">Chinhoyi Technical High School</div>
		<!--
		<button onclick="english()">English</button>
		<button onclick="bangla()">বাংলা</button>
	-->
	</section>

	<div class="sidenav" id="sidenav">
		<ul class="navbar-nav">
			<li class="nav-item">
				<a class="nav-link" href="../home/index.php">home</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="event.php">updates</a>
			</li>
			
            <li class="nav-item">
                <a class="nav-link" href="homepage.php">profile</a>
            </li>
			<li class="nav-item">
                <a class="nav-link" href="logout.php">logout</a>
            </li>
		</ul>
	</div>
<!--js link-->
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/script.js"></script>
<script src="https://kit.fontawesome.com/3b83a3096d.js" crossorigin="anonymous"></script>

    <div style="text-align:center; padding:15%;">
      <p  style="font-size:50px; font-weight:bold;">
       Hello  <?php 
       if(isset($_SESSION['email'])){
        $email=$_SESSION['email'];
        $query=mysqli_query($conn, "SELECT users.* FROM `users` WHERE users.email='$email'");
        while($row=mysqli_fetch_array($query)){
            echo $row['firstName'].' '.$row['lastName'];
        }
       }
       ?>
       :
      </p>
      <a href="logout.php">Logout</a>
    </div>
</body>
</html>