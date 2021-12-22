<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <script defer src="node_modules/swup/dist/swup.min.js"></script>
    <script defer src="style.js"></script>
    <link href="basketball.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
  </head>
  <body>
    <div class="topnav">
      <a class="active" href="index.php">Home</a>
      <a href="tennis.html">Tennis</a>
      <a href="soccer.html">Soccer</a>
      <a href="basketball.php">Basketball</a>
    </div>
      


    <section>
      <nav>
        <section id ="RO_container">
          <figure>
            <img src="https://www.si.com/.image/ar_1:1%2Cc_fill%2Ccs_srgb%2Cfl_progressive%2Cq_auto:good%2Cw_1200/MTcwMDIzMjI5OTM4MDE3NjU3/opoc-88470-rawfinal.jpg" alt = "image of maradona">
            <figcaption>
              <h2>Kobe Bryant</h2>
              <p>The Greatest Laker to Grace the Court</p>
            </figcaption>
          </figure>
        </section> 
      </nav>
        
        <article>
          <section>
            <h2>Basketball</h2>
            <hr>
          </section>

            <h1>About</h1>
            <p>Basketball is one of the world's most popular sports. Originating from the United States, basketball has become a global sport with over 100 players from 39 countries all around the globe. </p>
            <h4 id ="demo">Click Here to See Some of the Top Teams</h4>
            <script>
              document.getElementById("demo").onclick = function() {myFunction()};
              
              function myFunction() {
                document.getElementById("demo").innerHTML = "Golden State Warriors, Brooklyn Nets, Chicago Bulls, Pheonix Suns, Dallas Mavericks";
              }
            </script>
            <table>

              <tr>
                <th>Player</th>
                <th>Top 3 Current Player's PPG:</th>
              </tr>

              <tr>
                <th>Kevin Durant: </th>
                <th>29.7</th>
              </tr>
              <tr>
                <th>Trae Young: </th>
                <th>27.3</th>
              </tr>
              <tr>
                <th>Stephen Curry</th>
                <th>27.1</th>
              </tr>
            </table>

          </article>
        </article>
      </section>
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
  <script src = "style.js"></script>
</html>