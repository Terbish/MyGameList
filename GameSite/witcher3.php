<!DOCTYPE html>
<html>
    <head>
        <title>PlayDB: Witcher 3</title>
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
                    <h1><span>Witcher 3</span></h1>
                    <h3>
                        
                        You are Geralt, from the city of Rivia. All around you the towns and settlements of the Northern Kingdoms are being razed to the ground, as an otherworldly invading army known only as the Wild Hunt leaves a trail of blood-soaked destruction in its wake.

                        As you prepare for a thunderous confrontation with the Wild Hunt, you’ll uncover a complex, gripping story and meet unforgettable characters. While exploring the Northern Kingdoms, you’ll discover that mysteries lurk inside every village, tree, and shadow.
                    </h3>
                  </div>
        
                  <iframe width="560" height="315" src="https://www.youtube.com/embed/c0i88t0Kacs" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
          
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