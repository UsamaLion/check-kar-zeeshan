<!DOCTYPE html>
<html>
<head>
	<title>mobiles</title>
</head>
<body>


	<div class="row" style="margin-top: 30px">
		<div class="col-sm-8">
			<?php
	        @$msg = $_GET['msg'];
	        if (isset($_GET['msg'])) {
	          echo '<div class="alert alert-success alert-dismissible">
	              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	              <strong><center>'.$msg.'</center></strong> 
	       </div>';
	        }
	        ?>
			<div class="panel panel-info">
				<div class="panel-heading"><center>Update Record</center></div>
				<div class="panel-body">
					<table class="table table-stripped table-bordered">
						<tr>
							<th>ID</th>
			                <th>Name</th>
			                <th>Price</th>
			                <th>Description</th>
			                <th>Company</th>
			                <th>Update</th>
						</tr>
						<?php
				            include '../connection/db.php';
				            $query = "SELECT * FROM mobile_data";
				            $result = mysqli_query($con, $query);
				            while ($row = mysqli_fetch_array($result)) {
				                echo "<tr>
				                <td>$row[ID]</td>
				                <td>$row[name]</td>
				                <td>$row[price]</td>
				                <td>$row[description]</td>
				                <td>$row[company]</td>
				                <td><a href='index.php?option=update&Operation=OP&ID=$row[ID]&Name=$row[name]&Price=$row[price]&Description=$row[description]&Company=$row[company]'>Update</a>
				                </tr>";
				            }
                            ?> 
					</table>
				</div>
			</div>
		</div>
		<div class="col-sm-4">
			<?php 
			if (isset($_GET['Operation'])) {
			 	?>
			 	<form action="" method="POST" >
		<label>ID</label>
		<input type="text" name="ID" value="<?php echo $_GET['ID']; ?>" readonly class="form-control"><br><br>

		<label>Name</label>
		<input type="text" name="Name" value="<?php echo $_GET['Name']; ?>" class="form-control"><br><br>

		<label>Price</label>
		<input type="text" name="Price" value="<?php echo $_GET['Price']; ?>" class="form-control"><br><br>

		<label>Description</label>
		<input type="text" name="Description" value="<?php echo $_GET['Description']; ?>" class="form-control"><br><br>

		<label>Company</label>
		<input type="text" name="Company" value="<?php echo $_GET['Company']; ?>" class="form-control"><br><br>

		<input type="submit" name="update" value="Update  Record" class="btn btn-success">

	</form>
	<?php
			 } ?>
		</div>
	</div>

</body>
</html>

<?php

$con = mysqli_connect("localhost", "root", "", "mobiles");

if (isset($_POST['update'])) {
	$ID = $_POST['ID'];
	$name = $_POST['Name'];
	$price = $_POST['Price'];
	$description = $_POST['Description'];
	$company = $_POST['Company'];

	$query = "UPDATE mobile_data SET name = '$name', price = '$price', description = '$description', company = '$company' WHERE ID = '$ID' ";
	$result = mysqli_query($con, $query);

	if ($result)
	 {
	 	
		echo "<script>
		window.location='index.php?option=update&msg=Record Updated Successfully';
		</script>";
	}

}