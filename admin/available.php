<!DOCTYPE html>
<html>
<head>
	<title>Bootstrap Data Tables</title>
      <link rel="stylesheet"  href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	
</head>
<body>

	<div class=" ">
			<h1 align="center" class="text-success">All Available Mobiles</h1>
		<div>
			<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
                <th>Description</th>
                <th>Company</th>
            </tr>
        </thead>
        <tbody>
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
                </tr>";
            }
            



            ?> 
            
        </tbody>
        
    </table>
		</div>
	</div>

</body>
</html>