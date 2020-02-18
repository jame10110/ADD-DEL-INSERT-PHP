<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link rel="stylesheet" href="http://localhost/cnn/bootstrap/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="http://localhost/cnn/bootstrap/dist/css/bootstrap-theme.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
<?php

	include "database.php";	

?>
<div class="col-md-12" style="padding-top: 50px;">
	<p style="text-align: center;font-size: 24px;font-weight: 600;">ระบบเช่ายืมของ</p>
	<div class="col-md-2">
	</div>
	<div class="col-md-8">
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
				<td style="width: 10%;">
					<p>สถานะ</p>
				</td>
				<td style="width: 10%;">
					<p>แก้ไข</p>
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
				<td>
					<p><a class="del" href="/cnn/edite.php?id=<?= $id ?>">แก้ไข</a></p>
				</td>
			</tr>
			<?php } ?>
		</table>
		<a href="/cnn/"><button style="width: 100%;padding: 10px 0;">ย้อนกลับ</button>
	</div>

	<div class="col-md-2">
	</div>

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
