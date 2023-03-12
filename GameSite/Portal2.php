<!DOCTYPE html>
<html>
    <head>
        <title>PlayDB: Portal 2</title>
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
                    <h1><span>Portal 2</span></h1>
                    <h3>
                        The highly anticipated sequel to 2007's Game of the Year, Portal 2 is a hilariously mind-bending adventure that challenges you to use wits over weaponry in a funhouse of diabolical science. Using a highly experimental portal device, you’ll once again face off against a lethally inventive, power-mad A.I. named GLaDOS. Break the laws of spatial physics in ways you never thought possible, with a wider variety of portal puzzles and an expansive story that spans a single player and co-op game mode.

                    </h3>
                  </div>
        
                  <iframe width="560" height="315" src="https://www.youtube.com/embed/ts-j0nFf2e0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
          
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