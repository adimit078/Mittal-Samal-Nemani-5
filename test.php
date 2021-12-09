<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="tennis.css" />
  </head>
  <body>
    <div class="topnav">
      <a class="active" href="file:///M:/csp/web/webpage.html">Home</a>
      <a href="file:///M:/csp/web/soccer.html">Soccer</a>
      <a href="file:///M:/csp/web/basketball.html">Basketball</a>
      <a href="file:///M:/csp/web/tennis.html">Tennis</a>
    </div>

    <section>
        <nav>
          <picture>
            <img src="https://cdnph.upi.com/svc/sv/upi/89021220730609/2008/1/5da6c9c7e62751a95fe46847c2966790/Federer-back-in-US-Open-mens-final.jpg">
          </picture>
        </nav>
        
        <article>
            <h2>Tennis</h2>
            <h1>About</h1>
            <p>Tennis is a beautiful sport which fosters fantastic qualities in its players. Needing to utelize both mental prowess and mastery over their emotions in addition to the baseline physicality, tennis players are often regarded as one fo the most well rounded athletes in the world. </p>
            <h4>Use the Following Buttons to Learn About Different Parts of the Sport</h4>

            <button class="button button1">Top 10 Players</button>
            <button class="button button2">Current Point Values</button>
            <button class="button button3">Previous Grand-Slam Winners</button>


            <?php
                $servername = "localhost";
                $username = "root";
                $password = "123456";
                $dbname = "mydatabase";
                // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);
                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                } 
                $qString = "select firstName from myTable where age < " . $_POST(upperage) . "and >".$_POST(lowerAge);
                $result = $conn->query($qString);
                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                    echo " Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
                    }
                } else {
                    echo "0 results";
                }
                $conn->close();
            ?>

        </article>
      </section>
    </body>
</html>