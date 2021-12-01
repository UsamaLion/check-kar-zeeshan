<?php 
 $con = mysqli_connect("localhost", "root", "", "mobiles"); 
function NokiaMobile(){
    global $con;
	$nokia = "Nokia";
	$query = "SELECT * FROM mobile_data WHERE company ='$nokia'";
	$result = mysqli_query($con, $query);
	$count = mysqli_num_rows($result);
	echo $count;
}

function iphone(){
	global $con;
	$Apple = "Apple";
	$query = "SELECT * FROM mobile_data WHERE company ='$Apple'";
	$result = mysqli_query($con, $query);
	$count = mysqli_num_rows($result);
	echo $count;
}

function  samsung(){
	global $con;
	$Samsung = "Samsung";
	$query = "SELECT * FROM mobile_data WHERE company ='$Samsung'";
	$result = mysqli_query($con, $query);
	$count = mysqli_num_rows($result);
	echo $count;
}

function  qmobile(){
	global $con;
	$qmobile = "qmobile";
	$query = "SELECT * FROM mobile_data WHERE company ='$qmobile'";
	$result = mysqli_query($con, $query);
	$count = mysqli_num_rows($result);
	echo $count;
}

function  Oppo(){
	global $con;
	$Oppo = "Oppo";
	$query = "SELECT * FROM mobile_data WHERE company ='$Oppo'";
	$result = mysqli_query($con, $query);
	$count = mysqli_num_rows($result);
	echo $count;
}

function  AllMobiles(){
	global $con;
	$query = "SELECT * FROM mobile_data ";
	$result = mysqli_query($con, $query);
	$count = mysqli_num_rows($result);
	echo $count;
}

function fetchCategory(){
	global $con;
	$query = "SELECT * FROM category";
			$result = mysqli_query($con, $query);

			while ($row = mysqli_fetch_array($result)) {
			    echo"<li><a href='index.php?category=$row[company]'>$row[company]</a></li>";
			}
}

function fetchCategoryAdmin(){
	global $con;
	$query = "SELECT * FROM category";
			$result = mysqli_query($con, $query);

			while ($row = mysqli_fetch_array($result)) {
			    echo"<option value='$row[company]'>$row[company]</option>";
			}
}



function Page_Options(){
	@$page = $_GET['option'];
switch ($page) {
	case 'add':
		include 'add.php';
		break;
	case 'update':
	    include 'update.php';
		break;
	case 'delete':
	    include 'Delete.php';
		break;
	case 'available':
	    include 'available.php';
		break;
	case 'category':
	    include 'category.php';
		break;
	case 'report':
	    include 'Report.php';
		break;
	
	default:
		include 'default.php';
		break;
}
}

 ?>
 


