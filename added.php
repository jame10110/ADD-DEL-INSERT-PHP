<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link rel="stylesheet" href="http://localhost/cnn/bootstrap/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="http://localhost/cnn/bootstrap/dist/css/bootstrap-theme.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
<?php

	include "database.php";	

	$sqlad = "INSERT INTO item (name,num,status) 
	VALUES ('".$_POST["namei"]."','".$_POST["num"]."','".$_POST["status"]."')";

	$query = mysqli_query($mysqli,$sqlad);

	echo $last_id = $mysqli->insert_id;
	//$last_id = 55;
	if($_FILES)
	{  
		echo 'ok1';
		print_r($_FILES);
	    foreach ($_FILES['files']['name'] as $name => $value)  
	    {  
	    	echo 'ok2';
	        $file_name = explode(".", $_FILES['files']['name'][$name]);  
	        $allowed_ext = array("jpg", "jpeg", "png", "gif");
	        if(in_array($file_name[1], $allowed_ext))        	
	        {	
	        	echo 'ok3';
	            $new_name = md5(rand()) . '.' . $file_name[1];
	            $sourcePath = $_FILES['files']['tmp_name'][$name];
	            $targetPath = "img/".$new_name;
	            if(move_uploaded_file($sourcePath, $targetPath))
	            {
	            	echo 'add ok XD '. $targetPath;  
	            	$sql = "INSERT INTO aimg (catid,img) VALUES ( '".$last_id."','{$targetPath}')";
	            	$image = mysqli_query($mysqli,$sql);
	            }                 
	        }            
	    }  
	}  

	if($query)
	{
		echo "Save Done.";
		header("location: /cnn");
	}
	else
	{
		echo "Error Save [".$sqlad."]";
	}

?>
