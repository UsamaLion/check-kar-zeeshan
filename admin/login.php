<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	 <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>

	<div class="container">
		<div class="row">
			<center><h1><font color="#F90F38"><strong>Mobile Info</strong></font></h1></center>
			<div class="col-sm-offset-4 col-sm-4">
				<div class="panel panel-success">
					<div class="panel-heading"><center>Admin Login Form</center></div>
					<div class="panel-body">
						<form action="" method="POST">
							<input type="text" name="name" class="form-control" placeholder="Admin Name"><br>
							<input type="password" name="password" class="form-control" placeholder="Admin password">
					</div>
					<div class="panel-footer">
						<center>
							<input type="submit" name="submit" value="Login" class="btn btn-success">
						</center>
						<?php
				        @$err = $_GET['err'];
				        @$msg = $_GET['msg'];
				        if (isset($_GET['err'])) {
				          echo '<div class="alert alert-danger alert-dismissible">
				              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				              <strong><center>'.$err.'</center></strong> 
				          </div>'; }

				        if (isset($_GET['msg'])) {
				          echo '<div class="alert alert-success alert-dismissible">
				              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				              <strong><center>'.$msg.'</center></strong> 
				          </div>'; }
				        ?>
					</div>
					</form>
				</div>
			</div>
		</div>
	</div>

</body>
</html>
<?php 
include '../connection/db.php';
session_start();
if(isset($_POST['submit'])){
	$name = $_POST['name'];
	$password = $_POST['password'];
	$query = "SELECT * FROM admin WHERE name = '$name' AND password = '$password' ";
	$result = mysqli_query($con, $query);
	$row = mysqli_fetch_array($result);
	$count = mysqli_num_rows($result);
	if ($count < 1) {
		echo "Incorrect User Name or Password";
	} else {
		$_SESSION['ID'] = $row['ID'];
		header("location: index.php");
	}
	
}

 ?>