<!DOCTYPE html>
<html>
    <head>
        <title>PlayDB: God of War</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../css/ind_game_styles.css" rel="Stylesheet" type="text/css" />
    </head>

    <body>
        <header>
            <div class="flex">
                <div class="logo">
                    <a href="../home.php"><img src="../images/logo.png" alt="Main Logo" /></a>
                    <a href="../home.php"><img src="../images/logo2.png" alt="Alt Logo" /></a>
                </div>
                <nav>
                    <button id="nav-toggle" class="hamburger-menu">
                        <span class="strip"></span>
                        <span class="strip"></span>
                        <span class="strip"></span>
                    </button>
                    <ul id="nav-menu-container">
                        <li><a href="../home.php">Home</a></li>
                        <li><a href="#">Games</a></li>
                        <li><a href="../main.html">Other</a></li>
                    </ul>
                </nav>
                <a href="../login.html" id="login-register-button">Login / Register</a>
            </div>
        </header>

        <main>
            <section id="main-page">
                <div class="first-page">
                  <div>
                    <h1><span>God of War</span></h1>
                    <h3>
                        His vengeance against the Gods of Olympus years behind him, Kratos now lives as a man in the realm of Norse Gods and monsters. It is in this harsh, unforgiving world that he must fight to survive… and teach his son to do the same. 
                    </h3>
                  </div>
        
                  <iframe width="560" height="315" src="https://www.youtube.com/embed/K0u_kAWLJOA" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
          
                </div>
            </section>
        </main>

        <div class="review">
            <?php
            $servername = "cssql.seattleu.edu";
            $username = "bd_jshenli";
            $password = "3300jshenli-Yrws";
            $dbname = "bd_jshenli3";
            $conn = new mysqli($servername, $username, $password, $dbname);
            
            if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
            }

            $sql = "SELECT Review.*, User.USER_ID FROM Review JOIN Game ON Review.GAME_ID = Game.GAME_ID JOIN User ON Review.USER_ID = User.USER_ID WHERE Game.GAME_NAME = 'God of War';";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // output game reviews as a table with styling
                echo "<table style='border-collapse: collapse; border: none; width: 100%;'>";
                echo "<tr style='background-color: #black; border-radius: 10px;'><th style='padding: 10px; text-align: left;'>User ID</th><th style='padding: 10px; text-align: left;'>Rating</th><th style='padding: 10px; text-align: left;'>Comment</th></tr>";
                while($row = $result->fetch_assoc()) {
                  echo "<tr style='background-color: #f9f9f9; border-radius: 10px;'><td style='padding: 10px;'>" . $row["USER_ID"] . "</td><td style='padding: 10px;'>" . $row["REVIEW_SCORE"] . "</td><td style='padding: 10px;'>" . $row["REVIEW_TEXT"] . "</td></tr>";
                }
                echo "</table>";
              } else {
                echo "<p>No game reviews found.</p>";
              }
              
              

              ?>
        </div>
        <script>
            document.getElementById('nav-toggle').addEventListener('click', function () {
                let navMenu = document.getElementById('nav-menu-container');
                navMenu.style.display = navMenu.offsetParent === null ? 'block' : 'none';
            });
        </script>
    </body>
</html>