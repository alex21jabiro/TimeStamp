<?php 
require_once 'db_connector.php';

$busName = $_GET['business_name'];
$busAddr = $_GET['street'];
$busCity = $_GET['city'];
$busState = $_GET['state'];
$busZip = $_GET['state'];
$busTax = $_GET['tax_id'];
$busPhone = $_GET['phone'];
$busEmail = $_GET['email'];

$sql_Statement = "INSERT INTO `business` (`bus_name`, `bus_address`, `bus_city`, 'bus_state', 'bus_zip', 'bus_tax_id', 'bus_phone', 'bus_email') 
VALUES ('$busName', '$busAddr', '$busCity', '$busState', '$busZip', '$busTax', '$busPhone', '$busEmail')";
echo '<script type="text/javascript">alert("Business registered successfully!");</script>';

if ($connection) {
	$result = mysqli_query($connection, $sql_Statement);
	if ($result) {
		include('');
	}
	else {
		echo "Error inserting recipe" . mysqli_error($connection);
	}
}
else {
	echo "Error connecting" . mysqli_connect_error();
}
?>

