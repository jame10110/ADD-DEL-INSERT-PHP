<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link rel="stylesheet" href="http://localhost/cnn/bootstrap/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="http://localhost/cnn/bootstrap/dist/css/bootstrap-theme.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
<?php

	include "database.php";	

	$geid = $_GET["id"];

	$img = "SELECT * FROM aimg WHERE catid = '".$geid."'";
	$query0 = $mysqli->query($img);
	$imgsl = array();
    while($after = $query0->fetch_array(MYSQLI_ASSOC)){
    	$filePath = $after['img'];
    	echo $filePath.'<br>';
    	unlink($filePath);
    }

	$sqlde = "DELETE FROM item WHERE id = '".$geid."'";
	$sqldeim = "DELETE FROM aimg WHERE catid = '".$geid."'";
	$query = mysqli_query($mysqli,$sqlde);
	$query2 = mysqli_query($mysqli,$sqldeim);

	if($query)
	{
		echo "Delete Successfully";
		header("location: /cnn/del.php");
	}
	else
	{
		echo "Error Save [".$sqlde."]";
	}

?>
