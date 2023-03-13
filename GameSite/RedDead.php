<!DOCTYPE html>
<html>
    <head>
        <title>PlayDB: RDR 2</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../css/ind_game_styles.css" rel="Stylesheet" type="text/css" />
    </head>

    <body>
        <header>
            <div class="flex">
                <div class="logo">
                    <a href="../index.php"><img src="../images/logo.png" alt="Main Logo" /></a>
                    <a href="../index.php"><img src="../images/logo2.png" alt="Alt Logo" /></a>
                </div>
                <nav>
                    <button id="nav-toggle" class="hamburger-menu">
                        <span class="strip"></span>
                        <span class="strip"></span>
                        <span class="strip"></span>
                    </button>
                    <ul id="nav-menu-container">
                        <li><a href="../index.php">Home</a></li>
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
                    <h1><span>Red Dead Redemption 2</span></h1>
                    <h3>
                        America, 1899. The end of the Wild West era has begun. After a robbery goes badly wrong in the western town of Blackwater, Arthur Morgan and the Van der Linde gang are forced to flee. With federal agents and the best bounty hunters in the nation massing on their heels, the gang must rob, steal and fight their way across the rugged heartland of America in order to survive. As deepening internal divisions threaten to tear the gang apart, Arthur must make a choice between his own ideals and loyalty to the gang who raised him.

                    </h3>
                  </div>
        
                  <iframe width="560" height="315" src="https://www.youtube.com/embed/gmA6MrX81z4" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
          
                </div>
            </section>
        </main>
        <script>
            document.getElementById('nav-toggle').addEventListener('click', function () {
                let navMenu = document.getElementById('nav-menu-container');
                navMenu.style.display = navMenu.offsetParent === null ? 'block' : 'none';
            });
        </script>
    </body>
</html>