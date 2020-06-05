<!DOCTYPE html>
<html>
<head>
	<title>Result Found</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
		<div class="container-fluid">
			<form action="result.php" method="get">
				<div class="row" style="background-color: #f2f2f2">
					<div class="col-sm-1">
						<a href="search.php"><img src="img/search_img.jfif" height="90px">
					</div></a>
					
					<div class="col-sm-6" style="margin-left: 15px;">
						<div class="input-group" style="margin-top: 10px">
							<input type="text" name="search" class="form-control" >
							<span class="input-group-btn"><input type="submit" name="search_button" class="btn btn-secondary" value="Go!"></span>
						</div>
					</div>
				</div>
			</form>
		</div>

		<table>
			<tr>
				<?php
					$link = mysqli_connect("localhost", "root", "");
					mysqli_select_db($link, "search");

					if(isset($_GET['search_button'])){
						$search = $_GET['search'];
						if($search== ""){
							echo "<center><b>please write something</b></center>";
							exit();
						}
						$sql = "SELECT * FROM website WHERE site_key LIKE '%$search%'";
						$rs = mysqli_query($link, $sql);
						echo mysqli_error($link);
						if( mysqli_num_rows($rs) == 0){
							echo "<center><b>Oops no results</b></center>";
							exit();
						}
						echo "Images for $search";
						while($row = mysqli_fetch_array($rs)){
							echo "<td>
									<table>
										<tr>
											<td>
												<img src='img/$row[5]'>
											</td>
										</tr>
									</table>
									</td>";
						}
					}
				?>
			</tr>
		</table>
				<?php
					$link1 = mysqli_connect("localhost", "root", "");
					mysqli_select_db($link1, "search");
					echo "<a href='#'><font size = '+1' color= '#1a1aff'>More image for $search</font></a>";
					echo "<hr>";
						$sql1 = "SELECT * FROM website WHERE site_key LIKE '%$search%'";
						$rs1 = mysqli_query($link, $sql1);
						while( $row1 = mysqli_fetch_array($rs1)){
							echo "<a href = '$row1[2]'><font size='4' color='blue'> $row1[1]</font></a><br>";
							echo "<font size='2' color='006400'> $row1[2]</font><br>";
							echo "<font size='2' color='666666'> $row1[4]</font><br><br>";
						}
				?>
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>