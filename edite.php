<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link rel="stylesheet" href="http://localhost/cnn/bootstrap/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="http://localhost/cnn/bootstrap/dist/css/bootstrap-theme.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
<div class="col-md-12" style="padding-top: 50px;">
	<p style="text-align: center;font-size: 24px;font-weight: 600;">Edit</p>
	<div class="col-md-2">
	</div>
	<div class="col-md-8">
		<form action="edited.php" name="aform" method="post" style="margin-bottom: 0px;">
			<table style="width: 100%;border: 1px solid gray;text-align: center;">
				
				<tbody>
					<center>
					<?php

						include "database.php";	
						$geid = $_GET["id"];
					?>
					<a class="targ" href="/cnn/editimg.php/?id=<?= $geid ?>">
					<?php
						$sqlstring = "SELECT * FROM item where id = '".$geid."'";
						$result = $mysqli->query($sqlstring);
						while($row = $result->fetch_array(MYSQLI_ASSOC)){
							$id = $row['id'];
							$name = $row['name'];
							$num = $row['num'];
							$status = $row['status'];
						}

						$sqlimg = "SELECT * FROM aimg where catid = '".$geid."'";
						$resultimga = $mysqli->query($sqlimg);
						$fix = 0;
						while($row = $resultimga->fetch_array(MYSQLI_ASSOC)){
							$img = $row['img'];
							if($fix < 4){
					?>
					
					<img class="tpic" src="/cnn/<?= $img ?>" style="width: 150px;height: 150px;border: 1px solid black; cursor: pointer; margin-bottom: 10px;">
					<?php } $fix++; } ?>
					<p>แก้ไขรูปภาพ</p></a>
					<p>มีรูป = <?= $fix ?> รูป</p>
					</center>
					<input type="file" name="files[]" id="file" multiple style="display: none;">

					<tr>
						<input type="hidden" name="id" value="<?= $id ?>">
						<td><p>Name</p></td>
						<td><input name="namei" type="text" style="width: 100%;padding: 10px;" value="<?= $name ?>"></td>
					</tr>
					<tr>
						<td><p>จำนวน</p>	</td>
						<td><input name="num" type="number" style="width: 100%;padding: 10px;" value="<?= $num ?>"></td>
					</tr>
					<tr>
						<td><p>สถานะ</p>	</td>
						<td><select name="status" style="width: 100%;padding: 10px;" >
							<option <?php echo ($status == 'ว่าง') ? "selected" : "" ?> value="ว่าง">ว่าง</option>
							<option <?php echo ($status == 'ไม่ว่าง') ? "selected" : "" ?> value="ไม่ว่าง">ไม่ว่าง</option>
						</select></td>
					</tr>

					<?php  ?>
					
				</tbody>

			</table>
			<input type="submit" style="width: 100%;padding: 10px 0;" value="แก้ไข">
		</form>
		<a href="/cnn/edit.php"><button style="width: 100%;padding: 10px 0;">ย้อนกลับ</button>
	</div>

	<div class="col-md-2">
	</div>

</div>




<div style="text-align: center;">

</div>

<script>
	jQuery(document).on('click','.tpic', function(event){
		jQuery('.targ' ).trigger( 'click' );
	});
</script>

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
