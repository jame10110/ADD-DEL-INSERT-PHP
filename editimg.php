<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link rel="stylesheet" href="http://localhost/cnn/bootstrap/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="http://localhost/cnn/bootstrap/dist/css/bootstrap-theme.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
<div class="col-md-12" style="padding-top: 50px;">
	<p style="text-align: center;font-size: 24px;font-weight: 600;">Edit รูปภาพ</p>
	<div class="col-md-2">
	</div>
	<div class="col-md-8">
		<form action="/cnn/editimged.php" name="aform" method="post" style="margin-bottom: 0px;" enctype="multipart/form-data">
			<table style="width: 100%;border: 1px solid gray;text-align: center;">
				
				<tbody>
					<?php
						include "database.php";	
						$geid = $_GET["id"];

					?>
					<!-- <input type="file" name="files[]" id="file" multiple style="display: none;"> -->

					<tr>
						<input type="hidden" name="geid" value="<?= $geid ?>">
						<td><p>NO</p></td>
						<td><p>รูปภาพ</p></td>
						<td><p>ลบรูปภาพ</p></td>
					</tr>
					
					<?php 

					$sqlimg = "SELECT * FROM aimg where catid = '".$geid."'";
					$resultimga = $mysqli->query($sqlimg);
					$fix = 0;

					while($row = $resultimga->fetch_array(MYSQLI_ASSOC)){
						$img = $row['img'];
						$catid = $row['id'];
						$fix++;
					?>
					<tr>
						<td><p><?= $fix ?></p></td>
						<td><p><img class="tpic tpic<?= $fix ?>" src="/cnn/<?= $img ?>" style="width: 150px;height: 150px;border: 1px solid black; cursor: pointer; margin-bottom: 10px;">
							<input type="hidden" name="catid<?= $fix ?>" value="<?= $catid ?>"></p></td>
						<td><p><a href="/cnn/delimg.php/?id=<?= $geid ?>&cid=<?= $catid ?>">ลบรูปภาพ</a></p></td>
					</tr>
						<?php } ?>
					<tr>
						<td><p><?= $fix+1 ?></p></td>
						<td><p><img class="tpicad" src="/cnn/img/whcat.png" style="width: 150px;height: 150px;border: 1px solid black; cursor: pointer; margin-bottom: 10px;"><input type="file" name="files[]" id="file" multiple style="display: none;"><br>Upload รูปภาพ</p></td>
						<td><p></p></td>
					</tr>
				</tbody>

			</table>
			<input type="submit" style="width: 100%;padding: 10px 0;" value="เพิ่มรูปภาพ">
		</form>
		<a href="/cnn/edite.php/?id=<?= $geid ?>"><button style="width: 100%;padding: 10px 0;">ย้อนกลับ</button>
	</div>

	<div class="col-md-2">
	</div>

</div>




<div style="text-align: center;">

</div>

<script>

	/*jQuery(document).on('click','.ch1', function(event){
		jQuery('input[name="file1"]' ).trigger( 'click' );
	});
	jQuery(document).on('click','.ch2', function(event){
		jQuery('input[name="file2"]' ).trigger( 'click' );
	});
	jQuery(document).on('click','.ch3', function(event){
		jQuery('input[name="file3"]' ).trigger( 'click' );
	});
	jQuery(document).on('click','.ch4', function(event){
		jQuery('input[name="file4"]' ).trigger( 'click' );
	});
	jQuery(document).on('click','.ch5', function(event){
		jQuery('input[name="file5"]' ).trigger( 'click' );
	});

	jQuery(document).on('change', 'input[name="file1"]', function(){
		var input = jQuery(this);
		if (input.files && input.files[0]) {
	    
	    var reader = new FileReader();
	  
	    reader.onload = function(e) {
	      jQuery('.tpic1').attr('src', e.target.result);
	    }
	    reader.readAsDataURL(input.files[0]);
	  }
	})*/

	jQuery(document).on('click','.tpicad', function(event){
		jQuery( '#file' ).click();
	});


	jQuery(document).on('change', 'input[name="files[]"]', function(){
		readURL1(this);
	})

	function  readURL1(input) {

  		if (input.files && input.files[0]) {
    
    	var reader = new FileReader();
    
    	reader.onload = function(e) {
      	jQuery('.tpicad').attr('src', e.target.result);
    	}

    reader.readAsDataURL(input.files[0]);

  	}
}

jQuery(document).on('change', 'input[name="file2"]', function(){
	readURL2(this);
})

function  readURL2(input) {
  if (input.files && input.files[0]) {
    
    var reader = new FileReader();
    
    reader.onload = function(e) {
      jQuery('.tpic2').attr('src', e.target.result);
    }

    reader.readAsDataURL(input.files[0]);
  }
}

jQuery(document).on('change', 'input[name="file3"]', function(){
	readURL3(this);
})

function  readURL3(input) {
  if (input.files && input.files[0]) {
    
    var reader = new FileReader();
    
    reader.onload = function(e) {
      jQuery('.tpic3').attr('src', e.target.result);
    }

    reader.readAsDataURL(input.files[0]);
  }
}

jQuery(document).on('change', 'input[name="file4"]', function(){
	readURL4(this);
})

function  readURL4(input) {
  if (input.files && input.files[0]) {
    
    var reader = new FileReader();
    
    reader.onload = function(e) {
      jQuery('.tpic4').attr('src', e.target.result);
    }

    reader.readAsDataURL(input.files[0]);
  }
}

jQuery(document).on('change', 'input[name="file5"]', function(){
	readURL5(this);
})

function  readURL5(input) {
  if (input.files && input.files[0]) {
    
    var reader = new FileReader();
    
    reader.onload = function(e) {
      jQuery('.tpic5').attr('src', e.target.result);
    }

    reader.readAsDataURL(input.files[0]);
  }
}

</script>

</body>




<style>
	td p{
		margin: 10px 0;
	}
	td {
		border: 1px solid gray;
	}
	.ch{
		color: #337ab7;
		cursor: pointer;
	}
	.ch:hover{
		text-decoration: underline;
	}
</style>
<?php


?>
