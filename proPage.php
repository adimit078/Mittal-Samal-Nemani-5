<?php

	$conn = mysqli_connect('localhost',"shaun", "test1234", "sports");

	if(!$conn){
		echo "Connection error: " . mysqli_connect_error();
	}

	$sql = 'SELECT Title, Rank, Points, Slams FROM tennis ORDER BY Rank';
	$result = mysqli_query($conn, $sql);
	$pros = mysqli_fetch_all($result, MYSQLI_ASSOC);

	mysqli_free_result($result);
	mysqli_close($conn);

?>

<!DOCTYPE html>


<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="tennis.css" />
    <script src="tennis.js"></script>
    <link href="style.css" rel="stylesheet">
  </head>
  <body>
    
      <a class="active" href="index.php">Back Home</a>
  
    <section>
      <nav>
        <section id ="RO_container">
          <figure>
            <img src="https://cdnph.upi.com/svc/sv/upi/89021220730609/2008/1/5da6c9c7e62751a95fe46847c2966790/Federer-back-in-US-Open-mens-final.jpg" alt = "image of maradona">
            <figcaption>
              <h2>Roger Federer</h2>
              <p>By Many Considered The Greatest Player Ever</p>
            </figcaption>
          </figure>
        </section> 
      </nav>
        <article>
          <section>
            <h2>Tennis</h2>
            <hr>
          </section>

            <h1>About</h1>
            <p>Tennis is a beautiful sport which fosters fantastic qualities in its players. Needing to utelize both mental prowess and mastery over their emotions in addition to the baseline physicality, tennis players are often regarded as one fo the most well rounded athletes in the world. </p>
            <h4 id = "demo">Click Here to See the Four Grand Slams</h4>
            <script>
              document.getElementById("demo").onclick = function() {myFunction()};
              document.getElementById("topplayers").onclick = function() {myTennisFunction()};

              
              function myFunction() {
                document.getElementById("demo").innerHTML = "Australian Open, French Open (also known as Roland Garros), Wimbledon, US Open";
              }
            </script>

            <table>
            <tr>
              <th>Click to Learn More: </th>
              <th><a href="proPage.php"> Top Players </a></th>
              <th><a href="pointPage.php"> Current Points </a></th>
              <th><a href="slams.php"> Slam Count </a>
              
            </tr>

            
            </table>

            <h1></h1>
            <h1></h1>
            <h1></h1>
            <h1></h1>

            <table class = "center">
				<tr>
					<th>Player</th>
					<th>Rank</th>
				</tr>
		
				<?php foreach($pros as $pro){ ?>
					<tr>
						<td><?php echo htmlspecialchars($pro["Title"]); ?></td>
						<td><?php echo htmlspecialchars($pro["Rank"]); ?></td>
					<tr>
				<?php } ?>
		
			</table>

        </article>
      </section>
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
  <script src = "style.js"></script>
</html>

