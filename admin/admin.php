<!DOCTYPE html>
<html>
<head>
	<title>Technical admin homepage</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--css link-->
	<link rel="icon" href="./logo_img/logo.png" type="image/x-icon">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/media.css">
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
				<a class="nav-link" href="../home/index.php">Home</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="admin.php">Admin</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="event.php">News</a>
			</li>
            <li class="nav-item">
                <a class="nav-link" href="faculty_member.php">Add</a>
            </li>
			<li class="nav-item">
                <a class="nav-link" href="f_edit.php">Modify</a>
            </li>
			<li class="nav-item">
                <a class="nav-link" href="f_read.php">Read</a>
            </li>
			<li class="nav-item">
                <a class="nav-link" href="f_delete.php">Delete</a>
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

	 <!-- Begin Page Content -->
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1>Welcome Admin!</h1>
                        </div>
                   
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary" name="u_submit">create</button>
                            <button type="submit" class="btn btn-primary" name="u_submit">update</button>
                            <button type="submit" class="btn btn-primary" name="u_submit">read</button>
                            <button type="reset" class="btn btn-danger">delete</button>
                        </div>

                    </form>
                    <!---form--->

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

<!--js link-->
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/script.js"></script>
<script src="https://kit.fontawesome.com/3b83a3096d.js" crossorigin="anonymous"></script>

</body>
</html>