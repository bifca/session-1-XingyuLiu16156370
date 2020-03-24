<?php
	$imdbID = @$_GET['film'];
	require 'connection.php';

	//OMDB Query 
		$filmname = '' ;
		$curl = curl_init();
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
		$query = array(
			"apikey" => '917b32a0',
			"i" => $imdbID ,
			"plot" => 'full'
		);
		curl_setopt($curl, CURLOPT_URL, "http://www.omdbapi.com/"."?".http_build_query($query));
		$film = json_decode(curl_exec($curl));
		$sql2 = "SELECT * FROM films WHERE imdbID = '".$imdbID."'";
        ?>

<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="style.css">
    	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">		
		</script>
		<style>
		.center{
			text-align: center;
			background-color: #27AAE1;
		}
		</style>

		<title>Rush Hour</title>
		
	</head>
		<body>
			

		<header id="header" role="banner">
			<div class="container text-center">
				<div class="row">
					<div class="col-12 col-md-12">
						<img src="images/logo.png" height="220px+"><br/>
				</div>
			</div>
				<nav>
					<ul>
						<li class="active"><a href="index.php">Home</a></li>
					</ul>	
				</nav>
			</div>
			</header>

            <div class="container">
				<div class="row">
					<div class= "col-12 col-md-12">
						<?php echo '<h1>'.$film->Title.'</h1>';?>
					</div>
				</div>
				<div class="row">
					<div class= "col-12 col-md-3">		
					    <?php echo '<p><img src="'.$film->Poster.'" width="100%""></p>';?>
					</div>
				    <div class= "col-12 col-md-9">
				    <?php	
						echo '<p><strong>Plot:</strong>'.$film->Plot.'</P>';
						echo '<p><strong>Year:</strong>'.$film->Year.'</p>';
						echo '<p><strong>Genre:</strong>'.$film->Genre.'</p>';
						echo '<p><strong>Actors:</strong>'.$film->Actors.'</p>';
						foreach ($film->Ratings AS $ratings){
							echo '<p>'.$ratings->Source.": ".$ratings->Value.'</p></br>';

						};
					?>
				</div>
					<div class="container text-center">
					<?php
						$result = mysqli_query($conn, $sql2);
						if (mysqli_num_rows($result) > 0){
							while($row = mysqli_fetch_assoc($result)){
								?>
								<div class="row">
								<div class="col-12 col-md-12 ">
								<video width='80%' controls>
								<?php
								echo "<source src='trailer/".$row['trailer']."' type='video/mp4'>Your browser does not support the video tag
									</video></div></div>";

					}
				}
			?>
					</div>
				</div>
			</div>
		</div>

			<div class="footer">
			    <div class="text">
			     <div class="col-12 col-md-12 center">
						<img src="images/footer.png" height="55px+"><br/>
				</div>
			
		</body>
</html>