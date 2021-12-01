<?php include "../connection/db.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<div style="border-bottom: 2px solid green; width: 50%">
		<?php
	        @$msg = $_GET['msg'];
	        if (isset($_GET['msg'])) {
	          echo '<div class="alert alert-success alert-dismissible">
	              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	              <strong><center>'.$msg.'</center></strong> 
	       </div>';
	        }
	        ?>
		<form action="" method="POST">
			<h3 class="text-success">Add New Mobile Category</h3>
			<div class="form-inline">
				<label>Category Name</label>
				<input type="text" name="company" required class="form-control">
				<input type="submit" name="submit" value="Add Category" class="btn btn-success">
			</div>
		</form><br>
	</div>
	<div>
		<table class="table table-stripped table-bordered">
			<tr>
				<th>ID</th>
				<th>Company</th>
			</tr>
			<?php 
			$query = "SELECT * FROM category";
			$result = mysqli_query($con, $query);

			while ($row = mysqli_fetch_array($result)) {
			    echo"<tr>
					    <td>$row[ID]</td>
					    <td>$row[company]</td>
				    </tr>";
			}
			 ?>
		</table>
	</div>


</body>
</html>

<?php 

if (isset($_POST['submit'])) {
 	$company = $_POST['company'];
 	$query = "INSERT INTO category SET company = '$company'";
 	$result = mysqli_query($con, $query);
 	if ($result) {
 		echo "<script>
		window.location='index.php?option=category&msg=Category Added !';
		</script>";
 	}

 } ?>