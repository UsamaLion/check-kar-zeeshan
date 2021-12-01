<!DOCTYPE html>
<html>
<head>
	<title>mobiles</title>
</head>
<body>


	<div class="row" style="margin-top: 30px">
		<div class="col-sm-offset-2 col-sm-8">
			<?php
	        @$msg = $_GET['msg'];
	        if (isset($_GET['msg'])) {
	          echo '<div class="alert alert-danger alert-dismissible">
	              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	              <strong><center>'.$msg.'</center></strong> 
	       </div>';
	        }
	        ?>
			<div class="panel panel-danger">
				<div class="panel-heading"><center>Delete Record</center></div>
				<div class="panel-body">
					<table class="table table-stripped table-bordered">
						<tr>
							<th>ID</th>
			                <th>Name</th>
			                <th>Price</th>
			                <th>Description</th>
			                <th>Company</th>
			                <th>Delete</th>
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
				                <td><a href='index.php?option=delete&Operation=DEL&ID=$row[ID]' class='btn btn-danger btn-sm'>Delete</a>
				                </tr>";
				            }
                            ?> 
					</table>
				</div>
			</div>
		</div>
		
	</div>

</body>
</html>

<?php

$con = mysqli_connect("localhost", "root", "", "mobiles");

if (isset($_GET['Operation'])) {
	$ID = $_GET['ID'];
	
	$query = "DELETE FROM mobile_data  WHERE ID = '$ID' ";
	$result = mysqli_query($con, $query);

	if ($result)
	 {
	 	
		echo "<script>
		window.location='index.php?option=delete&msg=Record Delete Successfully';
		</script>";
	}

}