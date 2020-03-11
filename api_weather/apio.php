<!DOCTYPE html>
<html>
<head>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>
	<div class='container'>
	<?php
		$response = file_get_contents('https://api.openweathermap.org/data/2.5/weather?id=6385838&appid=7176bb41b448086abe71478c049d4a8f');
		$response = json_decode($response);
		echo "<div class ='title'><h1>DaWuhan</h1></div>";
		echo $response->coord->lon;
		echo'<br/>';
		echo 
		      "Weather:".
		      $response->weather[0]->description.
		      "<br/>";
		echo $response->main->temp;
		?>
    

		<div class="btn-group">
  <button type="button" class="btn btn-warning">Change city</button>
  <button type="button" class="btn btn-warning dropdown-toggle dropdown-toggle-split" data-toggle="dropdown">
    <span class="caret"></span>
  </button>
  <div class="dropdown-menu">
  	<a class="dropdown-item" href="Shenzhen.php">Shenzhen, China</a>
    <a class="dropdown-item" href="wuhan.php">Wuhan, China</a>
    <a class="dropdown-item" href="shanghai.php">Shanghai, China</a>
    <a class="dropdown-item" href="beijing.php">Beijing, China</a>
    <a class="dropdown-item" href="tokyo.php">Tokyo,Japan</a>
    <a class="dropdown-item" href="london.php">London,England</a>
    <a class="dropdown-item" href="birmingham.php">Birmingham,England</a>
    <a class="dropdown-item" href="newyork.php">New York,America</a>
    <a class="dropdown-item" href="la.php">Los Angeles,America</a>
    <a class="dropdown-item" href="sydney.php">Sydney,Australia</a>
  </div>
</div>
</div>

<style> 
.container{padding: 15% 0 0 35%;}

</style>
        

</body>
</html>