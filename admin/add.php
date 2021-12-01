<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<div class="row">
		<div class="col-sm-offset-3 col-sm-6">
			<div class="panel panel-success">
				<div class="panel-heading">Add New Mobile</div>
				<div class="panel-body">
					<form action="" method="POST" enctype="multipart/form-data">
						<div class="form-row">
							<div class="form-group col-sm-12">
								<label>Mobile Name</label>
								<input type="text" name="name" class="form-control">
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-sm-12">
								<label>Price</label>
								<input type="number" name="price" class="form-control">
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-sm-12">
								<label>Mobile Description</label>
								<input type="text" name="description" class="form-control">
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-sm-12">
								<label>Mobile Company</label>
								<select name="company" class="form-control">
									<option selected="" disabled="">Select Mobile Company</option>
									<?php echo fetchCategoryAdmin(); ?>
								</select>
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-sm-12">
								<label>Mobile Image</label>
								<input type="file" name="image" class="form-control">
							</div>
						</div>
						
				</div>
				<div class="panel-footer">
					<input type="submit" name="submit" value="Add Mobile" class="btn btn-success">
					</form>
				</div>
	</div>
		</div>
	</div>

</body>
</html>

<?php 
include "../connection/db.php";
if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$price = $_POST['price'];
	$description = $_POST['description'];
	$company = $_POST['company'];

	$image = $_FILES['image']['name'];
	$temp_name1 = $_FILES['image']['tmp_name'];
	move_uploaded_file($temp_name1, "../images/$image");

	$query = "INSERT INTO mobile_data set name = '$name', price = '$price', description = '$description', company = '$company', image = '$image' ";
	$result = mysqli_query($con, $query);
	if ($result) {
		echo "<script>
		window.location= 'index.php?page=AllMobiles';
		</script>";
	}
}


 ?>