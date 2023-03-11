<!DOCTYPE html>
<html>
    <head>
        <title>PlayDB: SMO</title>
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
                    <h1><span>Red Super Mario Odyssey</span></h1>
                    <h3>
                        Explore incredible places far from the Mushroom Kingdom as you join Mario and his new ally Cappy on a massive, globe-trotting 3D adventure. Use amazing new abilities—like the power to capture and control objects, animals, and enemies—to collect Power Moons so you can power up the Odyssey airship and save Princess Peach from Bowser’s wedding plans!

Thanks to heroic, hat-shaped Cappy, Mario’s got new moves that’ll make you rethink his traditional run-and-jump gameplay—like cap jump, cap throw, and capture. Use captured cohorts such as enemies, objects, and animals to progress through the game and uncover loads of hidden collectibles. And if you feel like playing with a friend, just pass them a Joy-Con™ controller! Player 1 controls Mario while Player 2 controls Cappy. This sandbox-style 3D Mario adventure—the first since 1996’s beloved Super Mario 64™ and 2002’s Nintendo GameCube™ classic Super Mario Sunshine™—is packed with secrets and surprises, plus exciting new kingdoms to explore.
                    </h3>
                  </div>
        
                  <iframe width="560" height="315" src="https://www.youtube.com/embed/5kcdRBHM7kM" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
          
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