<!DOCTYPE html>
<html>
    <head>
        <title>PlayDB: Assassins Creed Valhalla</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../css/ind_game_styles.css" rel="Stylesheet" type="text/css" />
    </head>

    <body>
        <header>
            <div class="flex">
                <div class="logo">
                    <a href="../home.html"><img src="../images/logo.png" alt="Main Logo" /></a>
                    <a href="../home.html"><img src="../images/logo2.png" alt="Alt Logo" /></a>
                </div>
                <nav>
                    <button id="nav-toggle" class="hamburger-menu">
                        <span class="strip"></span>
                        <span class="strip"></span>
                        <span class="strip"></span>
                    </button>
                    <ul id="nav-menu-container">
                        <li><a href="../home.html">Home</a></li>
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
                    <h1><span>Assassins Creed Valhalla</span></h1>
                    <h3>Become Eivor, a mighty Viking raider and lead your clan from the harsh shores of Norway to a new home amid the lush farmlands of ninth-century England. Explore a beautiful, mysterious open world where you'll face brutal enemies, raid fortresses, build your clan's new settlement, and forge alliances to win glory and earn a place in Valhalla.
                        England in the age of the Vikings is a fractured nation of petty lords and warring kingdoms. Beneath the chaos lies a rich and untamed land waiting for a new conqueror. Will it be you?
                    </h3>
                  </div>
                  
                  <iframe width="560" height="315" src="https://www.youtube.com/embed/ssrNcwxALS4" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
          
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