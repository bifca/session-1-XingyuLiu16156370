<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Retro Music</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
</head>
<body>
<body>
  <?php
   //Set up SQL Database
   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "retro_music";

   $conn = new mysqli($servername, $username, $password, $dbname);

   if ($conn->connect_error){
     die("<strong>Connection Failed:</strong>". $conn->connect_error);
   }
   else{
     echo "Database connected successfully.</br></br>";
   }

   //Perform a database query
   $query = "SELECT * FROM music";

   $result = mysqli_query($conn, $query);

   printf("<br>The query '$query' returned %d rows. \n", $result->num_rows);
   echo "</br></br></br></br>";

    if(mysqli_num_rows($result) > 0){
   	echo "<div class='container'>
   	<h1>Retro Music</h1>
   	<div class='row'>";
    $count = 0;
    while($row = mysqli_fetch_assoc($result)){
    	$count = $count + 2;
    	echo '<div class="col-12 col-sm-6 col-md-4 col-lg-4">';
    	echo "
      <img class='artwork' src='".$row['artwork']."' alt='Icon'>
      <h3>".$row["song"]."&nbsp".$row["year"]."</h3>
      <p>".$row["artist"]."</p>
      <audio class='audio' src='".$row['audio']."'>
      ";

    	echo "</div>";
    	if ($count ==12){
    		echo "</div><div class='row'>";
    		$count = 0;
    	}

   }
   echo "</div>";	
   }
   ?>
</body>
</html>

