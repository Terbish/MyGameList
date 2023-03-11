<!DOCTYPE html>
<html>
    <head>
        <title>PlayDB: FFVII Remake</title>
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
                    <h1><span>Final Fantasy VII Remake</span></h1>
                    <h3>
                        A modern reimagining of one of the most iconic games of all time, Final Fantasy VII Remake harnesses the very latest technology to recreate and expand Square Enix's legendary RPG adventure for the current generation.

                        Set in a post-industrial fantasy world that has fallen under the control of the shadowy Shinra Electric Power Company, take on the role of Cloud Strife - a mercenary and former member of Shinra's elite SOLDIER unit - and team up with anti-Shinra organization Avalanche as they step-up their resistance. 

                        Visit one of gaming's most-beloved worlds with a level of depth and detail only possible in the modern age. Connect with unforgettable characters, engage in incredible battles, and experience a story that captivated a generation.

                    </h3>
                  </div>
        
                  <iframe width="560" height="315" src="https://www.youtube.com/embed/sz9QWTcbXYE" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
          
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