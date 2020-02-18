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
	$cid = $_GET["cid"];

	$img = "SELECT * FROM aimg WHERE id = '".$cid."'";
	$query0 = $mysqli->query($img);
	$imgsl = array();
    while($after = $query0->fetch_array(MYSQLI_ASSOC)){
    	$filePath = $after['img'];
    	echo $filePath.'<br>';
    	unlink($filePath);
    }

	$sqldeim = "DELETE FROM aimg WHERE id = '".$cid."'";
	$query2 = mysqli_query($mysqli,$sqldeim);

	if($query2)
	{
		echo "Delete Successfully";
		header("location: /cnn/editimg.php/?id=".$geid);
	}
	else
	{
		echo "Error Save [".$sqlde."]";
	}

?>
