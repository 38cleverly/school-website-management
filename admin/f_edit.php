
<!DOCTYPE html>
<html>
<head>
	<title>Admin edit</title>
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

		<button onclick="english()">English</button>
		<button onclick="bangla()">বাংলা</button>
	
	</section>

	<div class="sidenav" id="sidenav">
		<ul class="navbar-nav">
			<li class="nav-item">
				<a class="nav-link" href="admin.php">Home</a>
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
<section class="user_data">
		<div class="container">
			<div class="row">
				<div class="col-lg-5">
					<!---form--->
					<h1 class="text-primary mt-3 mb-3">Edit your data here</h1>
					<form action="" method="post">
						<input type="hidden" value=""  class="form-control u_id" id="u_id" name="u_id" required>
						<!---name-->
						<div class="mb-3">
							<label for="u_name" class="form-label">Name</label>
							<input type="name" value="" class="form-control u_name" id="u_name" name="u_name" required>
						</div>
						<!--user email-->
						<div class="mb-3">
							<label for="u_email" class="form-label">title</label>
							<input type="email" value=""  class="form-control u_email" id="u_email" name="u_email" required>
						</div>
						<!--reset-->
						<div class="mb-3">
							<button type="submit" class="btn btn-primary" name="u_submit">Submit</button>
							<button type="reset" class="btn btn-danger">Reset</button>
						</div>

					</form>
					<!---form--->

				</div>


			</div>
		</div>
	</section>
	</body>
</html>