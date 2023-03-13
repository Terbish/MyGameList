<!DOCTYPE html>
<html>
    <head>
        <title>PlayDB: CoD MW</title>
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
                    <h1><span>Call of Duty: Modern Warfare</span></h1>
                    <h3>
                        The game takes place in a realistic and modern setting. The campaign follows a CIA officer and British SAS forces as they team up with rebels from the fictional Republic of Urzikstan, combating together against Russian Armed Forces who have invaded the country and the Urzik terrorist group Al-Qatala, while searching for a stolen shipment of chlorine gas. 
                    </h3>
                  </div>
                  
                  <iframe width="560" height="315" src="https://www.youtube.com/embed/bH1lHCirCGI" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
          
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