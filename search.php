<!DOCTYPE html>
<html>
<head>
	<title>Our Search Engine</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body onload= "ld()">
	<script>
		function ld(){
			document.search_box.search.focus();
		}
	</script>
		<style>
			body{
				margin: 12%;
			}
			.form-control{
				border-width: 3px;
			}
		</style>
		<form name="search_box" action="result.php" method="get">
			<center>
			<img src="img/search_img.jfif" class="img-fluid" alt="search">
			<input type="text" name="search" class="form-control" style="width: 60%; margin-top: 20px">	
			<input type="submit" class="btn btn-outline-primary" value="search Now" style="margin-top: 20px">			
			</center>
		</form>


		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>