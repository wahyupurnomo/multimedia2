 <!DOCTYPE html> 
<html> 
	<head> 
	<title>Terima kasih</title> 
	
	<meta name="viewport" content="width=device-width, initial-scale=1" /> 

	<link rel="stylesheet" href="assets/css/jquery.mobile-1.0b2.min.css" />
    <link rel="stylesheet" href="assets/css/styles.css" />
	<script type="text/javascript" src="assets/css/jquery-1.6.2.min.js"></script>
	<script type="text/javascript" src="assets/css/jquery.mobile-1.0b2.min.js"></script>
</head> 
<body> 

<div data-role="page">

	<div data-role="header" data-theme="b">
	    <a href="./" rel="external" data-icon="home" data-iconpos="notext" data-transition="fade">Home</a>
		<a data-role="button" href="form.html" rel="external" data-icon="grid" data-theme="b">Form</a>
		<h1>Terima kasih</h1>
	</div>

	<div data-role="content">
 <?php
$con=mysqli_connect("localhost","root","mekar","mstore");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="INSERT INTO  jqm_products (id, category, name, manufacturer, price)
VALUES
('$_POST[id]','$_POST[category]','$_POST[name]','$_POST[manufacturer]','$_POST[price]')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
echo "1 record added";

mysqli_close($con);
?>
</div>
</div>
