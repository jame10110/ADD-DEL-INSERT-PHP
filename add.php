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
<!-- 
<center>
 <form method="POST" action="insert.php" enctype="multipart/form-data">
 	    <input type="hidden" name="id" value="99">
        <input type="file" name="files[]" multiple>
        <input type="submit" name="submit" value="ADD">
 </form>
</center>

<form method='post' action='' enctype='multipart/form-data'>

	<center><img class="tpic" src="/cnn/img/whcat.png" style="width: 150px;height: 150px;border: 1px solid black; cursor: pointer; margin-bottom: 10px;"></center>
	<input type="file" name="file[]" id="file" multiple style="display: none!important;">
	<input type='submit' name='submit' value='Upload'>

</form> -->






<div class="col-md-12" style="padding-top: 50px;">
	<p style="text-align: center;font-size: 24px;font-weight: 600;">Add</p>
	<div class="col-md-2">
	</div>
	<div class="col-md-8">
		<form action="added.php" name="aform" method="post" style="margin-bottom: 0px;" enctype="multipart/form-data">
			<table style="width: 100%;border: 1px solid gray;text-align: center;">
				<tbody>
					<center><img class="tpic" src="/cnn/img/whcat.png" style="width: 150px;height: 150px;border: 1px solid black; cursor: pointer; margin-bottom: 10px;"></center>
					<input type="file" name="files[]" id="file" multiple style="display: none;">
					<tr>
						<td><p>Name</p></td>
						<td><input name="namei" type="text" style="width: 100%;padding: 10px;"></td>
					</tr>
					<tr>
						<td><p>จำนวน</p>	</td>
						<td><input name="num" type="number" style="width: 100%;padding: 10px;"></td>
					</tr>
					<tr>
						<td><p>สถานะ</p>	</td>
						<td><select name="status" style="width: 100%;padding: 10px;">
							<option value="ว่าง">ว่าง</option>
							<option value="ไม่ว่าง">ไม่ว่าง</option>
						</select></td>
					</tr>
				</tbody>

			</table>
			<input type="submit" style="width: 100%;padding: 10px 0;" value="เพิ่ม">
		</form>
		<a href="/cnn/"><button style="width: 100%;padding: 10px 0;">ย้อนกลับ</button>
	</div>

	<div class="col-md-2">
	</div>

</div>





<div style="text-align: center;">

</div>

<script>
	jQuery(document).on('click','.tpic', function(event){
		jQuery( '#file' ).click();
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
