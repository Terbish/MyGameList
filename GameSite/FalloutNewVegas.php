<!DOCTYPE html>
<html>
    <head>
        <title>PlayDB: Fallout New Vegas</title>
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
                    <h1><span>Fallout New Vegas</span></h1>
                    <h3>
                        Battle your way across the heat-blasted Mojave Wasteland to the neon drenched Vegas Strip. Along the way you'll be introduced to a colorful cast of characters, factions, mutated creatures and much more. Choose sides in the upcoming war or declare “winner takes all.”
                    </h3>
                  </div>
                  
                  <iframe width="560" height="315" src="https://www.youtube.com/embed/l-x-1fm2cq8" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
          
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