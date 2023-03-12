<!DOCTYPE html>
<html>
    <head>
        <title>PlayDB: Bioshock</title>
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
                    <h1><span>Bioshock</span></h1>
                    <h3>
                        The game is set in 1960, and follows Jack who discovers the underwater city of Rapture. Built by business magnate Andrew Ryan to be an isolated utopia, the discovery of ADAM, a genetic material which grants superhuman powers, initiated the city's turbulent decline. Jack attempts to escape, fighting ADAM-obsessed enemies and Big Daddies, while engaging with the few sane humans that remain and learning of Rapture's past. The player, as Jack, can defeat foes in several ways by using weapons, utilizing plasmids that give unique powers, and by turning Rapture's defenses against them. 
                    </h3>
                  </div>
                  
                  <iframe width="560" height="315" src="https://www.youtube.com/embed/rrqfPG4ZcAA" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
          
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