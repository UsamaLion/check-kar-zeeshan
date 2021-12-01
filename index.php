<?php 
include 'admin/action.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Mobile Info</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	   	<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>

	<div class="container-fluid">
			<div class="row" style="margin-top: -10px; height: 100px;">
				<div class="col-sm-12" id="header" style="position: fixed;">
					<a href="index.php"><h2 id="headerText"> Mobile Info</h2></a>
				<span id="topSearch">
					<form action="">
						<select name="type" required>
							<option selected disabled>Search By</option>
							<option value="company">Brand</option>
							<option value="name">Model</option>
							<option value="price <">Price <</option>
							<option value="price >">Price ></option>
						</select>
					<input type="text" name="q" required>
					<button type="submit" name="search" class="btn btn-success"><span class="glyphicon glyphicon-search ">Search</span></button>
				</form>
				</span>
				</div>
			</div>
		
		<div style="margin-top: 20px;">
				<div class="col-sm-2" id="sideBar">
					<div class="navbar-header">
				      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span> 
				      </button>
				      <li class="active" style="color: #EC225B; font-family: cursive;"><h3 align="center">Mobile Brands</h3></li>
				    </div>
				    <div class="collapse navbar-collapse" id="myNavbar">
				      <ul class="nav">
						<?php echo fetchCategory(); ?>
				      </ul>
				    </div>
				</div>
			<div class="col-sm-offset-2 col-sm-10" style="min-height: 500px; position: relative; z-index: -1 clear: both;">
				<!-- Content Area -->
				<div class="panel panel-success">
					<div class="panel-heading text-success">
						<center><strong>
							Available Mobiles
						</strong></center>
					</div>
					<div class="panel-body">
						<?php 
						include 'connection/db.php';
						@$category = $_GET['category'];
						@$q = $_GET['q'];
						@$model = $_GET['model'];
						@$type = $_GET['type'];
						if (isset($_GET['category'])) {
						 	$query = "SELECT * FROM mobile_data WHERE company = '$category' ";
						 }
						 
						 elseif (isset($_GET['search'])) {
						  	$query = "SELECT * FROM mobile_data WHERE $type='$q' ";
						  	
						  } else {
						 	$query = "SELECT * FROM mobile_data";
						 }
 						 $result = mysqli_query($con, $query);
						 while ($row = mysqli_fetch_array($result)) {
						 	 echo "
				          <div class='col-md-4'>
				            <div class='panel panel-info'>
				              <div class='panel-heading' align='center' style='background-color:#6FC1ED; color:#fff'>$row[1]</div>
				              <div class='panel-body' id='img'>
				                <img src='images/$row[5]' class='img-responsive'>
				              </div>
				              <div class='panel-heading'>Rs ". number_format($row[2])."
				              <button  style='float: right;'  pid='$row[0]' data-toggle='modal' data-target='#$row[0]' class='btn btn-info btn-xs'>Details</button></div></div></div>
				              <div class='modal fade' id='$row[0]' role='dialog'>
						    <div class='modal-dialog'>
						      <div class='modal-content'>
						        <div class='modal-header'>
						          <button type='button' class='close' data-dismiss='modal'>&times;</button>
						          <h4 class='modal-title'>Details of $row[name]</h4>
						        </div>
						        <div class='modal-body' id='img'>
						          <img src='images/$row[5]' class='img-responsive' ><br><br>
						          
						          <div style='float: right; margin-top:-200px;'><b>Price</b> : $row[price]</div><br><br>
						          <div style='float: right; padding-left:10px; margin-top:-200px; text-align: justify; '><b>Description :</b> $row[description] 
						          <br><br>
						          <b>Company</b> : $row[company]</div><br>
						          
						        </div>   
						        </div>
				      </div>
				  </div> ";
						 }
						  ?>
						 						 
					</div>
				</div>
			</div>
		</div>
	</div>

	 <div class="footer"><center>Copyright &copy; 2019 Mobile Info</center></div>

</body>
</html>

