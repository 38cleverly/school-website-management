<!DOCTYPE html>
<html>
<head>
	<title>read technical staff</title>
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


	 <!-- Begin Page Content -->
                <div class="container">
                    <h1 class="text-primary mt-3 mb-3"> Staff Members </h1>
                </div>

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
            	<div class="card-header py-3">
            		<h6 class="m-0 font-weight-bold text-primary" style="text-align: center;">Staff Members</h6>
            	</div>
            	<div class="card-body">
            		<div class="table-responsive">
            			<table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
            				<thead>
            					<tr>
            						<th>Image</th>
            						<th>Name</th>
            						<th>title</th>
            						<th>Action</th>
            					</tr>
            				</thead>
            				<tbody id="test">
            							<tr  class="list">
            								<td>  </td>
            								<td>  </td>
            								<td>  </td>
            								<td>  </td>

            							</tr>
            							
            						<tr>
            							<td>No data to show</td>
            						</tr>            					
            				</tbody>
            			</table>
            		</div>
            	</div>
            </div>



<!--js link-->
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/script.js"></script>
<script src="https://kit.fontawesome.com/3b83a3096d.js" crossorigin="anonymous"></script>

</body>
</html>