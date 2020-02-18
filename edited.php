<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link rel="stylesheet" href="http://localhost/cnn/bootstrap/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="http://localhost/cnn/bootstrap/dist/css/bootstrap-theme.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
<?php

	include "database.php";	

	$sqled = "UPDATE item SET 
	name = '".$_POST["namei"]."',
	num = '".$_POST["num"]."',
	status = '".$_POST["status"]."'
	WHERE id = '".$_POST["id"]."' ";

	$query = mysqli_query($mysqli,$sqled);

	if($query)
	{
		echo "Save Done.";
		header("location: /cnn/edit.php");
	}
	else
	{
		//echo "Error Save [".mysqli_error()."]";
		printf("Error message: %s\n", $mysqli->error);
	}

?>
