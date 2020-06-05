<!DOCTYPE html>
<html>
	<head>
		<title>Our Search Engine</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	</head>
	<body>

		<div class="container">
			<br>
			<center> <h2><b>Insert Website<b></h2> </center>
			<br>
			<form action="insert_site.php" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<div class="row">
						<label class="col-sm-2" for="stitle">Site Title</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="stitle" name="s_title" placeholder="Enter site title"  required>
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="row">
						<label class="col-sm-2" for="slink">Site Link</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="slink" name="s_link" placeholder="Enter site link"  required>
						</div>
					</div>
				</div>

				<div class="form-group">
					<div class="row">
						<label class="col-sm-2" for="skey">Site Keyword</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="skey" name="s_key" placeholder="Enter site keyword"  required>
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="row">
						<label class="col-sm-2" for="sdes">Site Description</label>
						<div class="col-sm-10">
							<textarea class="form-control" id="sdes" name="s_des" placeholder="Enter site Description"></textarea>
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="row">
						<label class="col-sm-2" for="simg">Site Image</label>
						<div class="col-sm-10">
							<input type="file" class="form-control" id="stitle" name="s_img" required>
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="row">
						<center>
							<input type="submit" class="btn btn-outline-success" name="submit" value="Add Website">
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<input type="reset"  class="btn btn-outline-danger" name="cancel" value="Cancel">
						</center>
					</div>
				</div>
			</form>
		</div>
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	</body>
</html>


<?php
	$link = mysqli_connect("localhost", "root", "");
	mysqli_select_db($link, "search");

	if(isset($_POST["submit"])){
		$s_title = addslashes($_POST["s_title"]);
		$s_link  = addslashes($_POST["s_link"]);
		$s_key   = addslashes($_POST["s_key"]); 
		$s_des   = addslashes($_POST["s_des"]);
		$s_img   = addslashes($_FILES["s_img"]["name"]);

		if(move_uploaded_file($_FILES["s_img"]["tmp_name"],"img/". $_FILES["s_img"]["name"] )){
			$sql = "insert into website(site_title, site_link, site_key, site_des, site_img) values('$s_title','$s_link', '$s_key', '$s_des', '$s_img') ";
			$rs = mysqli_query($link, $sql);
			if($rs){
				echo "<script alert('site Uploaded successsfully')</script>";
			}
			else{
				echo "<script alert('Upload failed please try again')</script>";
			}
		}
	}
?>