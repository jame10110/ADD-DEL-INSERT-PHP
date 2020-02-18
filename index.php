<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link rel="stylesheet" href="http://localhost/cnn/bootstrap/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="http://localhost/cnn/bootstrap/dist/css/bootstrap-theme.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
<?php

	include "database.php";	

?>



<!--

<div class="w3-content w3-display-container">
  <img class="mySlides" src="img_snowtops.jpg" style="width:100%">
  <img class="mySlides" src="img_lights.jpg" style="width:100%">
  <img class="mySlides" src="img_mountains.jpg" style="width:100%">
  <img class="mySlides" src="img_forest.jpg" style="width:100%">

  <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
  <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
</div>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>


-->


<div class="col-md-12" style="padding-top: 50px;">
	<p style="text-align: center;font-size: 24px;font-weight: 600;">ระบบใส่ของ</p>
	<div class="col-md-2">
	</div>
	<div class="col-md-8">
		<a href="/cnn/add.php" style="text-align: right;right: 0px;float: right;"><p style="width: 100px;margin-bottom: 0px;left: 70%;border: 1px solid;padding: 5px 10px;text-align: center;">ยัดของ</p></a>
		<a href="/cnn/edit.php" style="float: right;"><p style="width: 100px;margin-bottom: 0px;left: 70%;border: 1px solid;padding: 5px 10px;text-align: center;">แก้ไขของ</p></a>
		<a href="/cnn/del.php" style="float: right;"><p style="width: 100px;margin-bottom: 0px;left: 70%;border: 1px solid;padding: 5px 10px;text-align: center;">สลายของ</p></a>
		<table style="width: 100%;border: 1px solid gray;text-align: center;">
			
			<tr>
				<td style="width: 10%;">
					<p>ID</p>
				</td>
				<td style="width: 30%;">
					<p>รูปภาพ</p>
				</td>
				<td style="width: 30%;">
					<p>Name</p>
				</td>
				<td style="width: 10%;">
					<p>จำนวน</p>
				</td>
				<td style="width: 20%;">
					<p>สถานะ</p>
				</td>
			</tr>
			<?php 
				$no = 0;
				$sqlstring = "SELECT * FROM item ORDER BY id ASC";
				$result = $mysqli->query($sqlstring);
				while($row = $result->fetch_array(MYSQLI_ASSOC)){
					$id = $row['id'];
					$name = $row['name'];
					$num = $row['num'];
					$status = $row['status'];
					$no++;
			?>

			<tr>
				<td>
					<!--<p><?php echo $id; ?></p>-->
					<p><?= $no ?></p>
				</td>
				<td>
					<?php
						//$sqlstring = "SELECT * FROM aimg WHERE catid = '".$id."'";
						$imageCat = "";
						$sqlstring = "SELECT * FROM aimg WHERE catid = '".$id."' limit 0,1 ";
						$catimg = $mysqli->query($sqlstring);
						while($low = $catimg->fetch_array(MYSQLI_ASSOC)){
							$catid = $low['catid'];
							$imageCat = $low['img'];
						}
						if (!empty($imageCat)) echo '<p><img src="'.$imageCat.'" style="width: 300px;height: 250px;"></p>';
						else echo '<p><img src="/cnn/img/whcat.png" style="width: 300px;height: 250px;"></p>';	
					?>
				</td>
				<td>
					<p><?= $name ?></p>
				</td>
				<td>
					<p><?= $num ?></p>
				</td>
				<td>
					<p><?= $status ?></p>
				</td>
			</tr>
			<?php } ?>
		</table>
	</div>

	<div class="col-md-2">
	</div>

</div>





<div style="text-align: center;">

</div>

</body>




<style>
	td p{
		margin: 10px 0;
	}
	td {
		border: 1px solid gray;
	}
</style>
<?php


?>
