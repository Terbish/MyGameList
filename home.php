<?php
    session_start();
    ?>
<!DOCTYPE html>
<html>
    <head>
        <title>PlayDB</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/styles.css" rel="Stylesheet" type="text/css" />
    </head>

    <body>
        <header>
            <div class="flex">
                <div class="logo">
                    <a href="home.php"><img src="images/logo.png" alt="Main Logo" /></a>
                    <a href="home.php"><img src="images/logo2.png" alt="Alt Logo" /></a>
                </div>
                <nav>
                    <button id="nav-toggle" class="hamburger-menu">
                        <span class="strip"></span>
                        <span class="strip"></span>
                        <span class="strip"></span>
                    </button>
                    <ul id="nav-menu-container">
                        <li><a href="home.php">Home</a></li>
                        <li><a href="games.php">Games</a></li>
                        <li><a href="user.php">My Page</a></li>
                        <li><a href="main.php">Other</a></li>
                    </ul>
                </nav>
                <p style="color: white;">Welcome: <?php echo $_SESSION['USER_EMAIL']; ?></p>
                <?php if (isset($_SESSION['USER_EMAIL'])): ?>
                <form action="logout.php" method="post">
                    <input type="submit" value="Log out">
                </form>
                <?php else: ?>
                    <p style="color: white;">You are not logged in.</p>
                <?php endif; ?>
                <a href="login.html" id="login-register-button">Login / Register</a>
            </div>
        </header>

        <main>
            <section id="miss-fortune">
                <div class="first-page">
                    <h1>The Best <span>Game Database</span> Out There</h1>
                    <h3>Enjoy your unlimited game collection. We are the definitive source for the best curated game website, viewable by PC only, for free, only at PlayDB</h3>
                </div>
            </section>


            <section id="recent-games">
                <h1>Recent Games</h1>
                <div class="flex">
                    <div class="box">
                        <span class="badge new">New</span>
                        <a href="gamepg/GodofWar.php"><img src="https://cdn.akamai.steamstatic.com/steam/apps/1593500/header.jpg?t=1650554420" /></a>
                        <div class="box-lower-section">
                            <h4>God of War</h4>
                            <p>His vengeance against the Gods of Olympus years behind him, Kratos now lives as a man in the realm of Norse Gods and monsters.</p>
                        </div>
                    </div>

                    <div class="box">
                        <span class="badge fps">FPS</span>
                        <a href="gamepg/BioShock.php"><img src="https://cdn.akamai.steamstatic.com/steam/apps/7670/header.jpg?t=1568739889" /></a>
                        <div class="box-lower-section">
                            <h4>Bioshock</h4>
                            <p>BioShock is a shooter unlike any you've ever played, loaded with weapons and tactics never seen.</p>
                        </div>
                    </div>

                    <div class="box">
                        <span class="badge adventure">Adventure</span>
                        <a href="gamepg/GTA5.php"><img src="https://cdn.akamai.steamstatic.com/steam/apps/271590/header.jpg?t=1678296348" /></a>
                        <div class="box-lower-section">
                            <h4>GTA V</h4>
                            <p>Grand Theft Auto V for PC offers players the option to explore the award-winning world of Los Santos and Blaine County</p>
                        </div>
                    </div>
                </div>
            </section>

            <section id="recent-reviews">
                <h1>Recent Reviews</h1>
                <div class="flex">
                    <div class="box">
                        <span class="rating-badge gold">5</span>
                        <div class="recent-reviews-image">
                            <a href="gamepg/RedDead.php"><img src="https://image.api.playstation.com/cdn/UP1004/CUSA03041_00/Hpl5MtwQgOVF9vJqlfui6SDB5Jl4oBSq.png" /></a>
                        </div>
                        <div>
                            <h4>Red Redemption 2</h4>
                            <p>Disappointing. I was expecting more from this game</p>
                        </div>
                    </div>

                    <div class="box">
                        <span class="rating-badge purple">10</span>
                        <div class="recent-reviews-image">
                            <a href="gamepg/witcher3.php"><img src="https://image.api.playstation.com/vulcan/ap/rnd/202211/0714/S1jCzktWD7XJSRkz4kNYNVM0.png" /></a>
                        </div>
                        <div>
                            <h4>The Witcher 3: Wild Hunt</h4>
                            <p>This game was awesome! I highly recommend it.</p>
                        </div>
                    </div>

                    <div class="box">
                        <span class="rating-badge green">8</span>
                        <div class="recent-reviews-image">
                            <a href="gamepg/GTA5.php"><img src="https://image.api.playstation.com/cdn/UP1004/CUSA00419_00/bTNSe7ok8eFVGeQByA5qSzBQoKAAY32R.png" /></a>
                        </div>
                        <div>
                            <h4>GTA v</h4>
                            <p>	I really enjoyed this game. The graphics were amazing!</p>
                        </div>
                    </div>

                    <div class="box">
                        <span class="rating-badge violet">9.9</span>
                        <div class="recent-reviews-image">
                            <img src="https://image.api.playstation.com/vulcan/ap/rnd/202111/0909/Bt9DVFkGTPIQ4RQsgBe5hzSy.png" />
                        </div>
                        <div>
                            <h4>Ruined King</h4>
                            <p>Amazing Game! I love League of Legends! -Sergio</p>
                        </div>
                    </div>
                </div>
            </section>

            <section id="posts-comments">
                <div class="flex">
                    <div class="houshou-marine">
                        <img src="images/logo2.png"/>
                        <p>PlayDB is a group project for Seattle University's CPSC-3300 class</p>
                        <img class="footer-graphic" src="https://media.tenor.com/6sGeqpPqMEYAAAAi/hololive-houshou-marine.gif" />
                    </div>

                    <div class="posts-comments-box">
                        <h3>Team Members</h3>
                        <div class="comments-item">
                            <img src="me.jpeg" />
                            <div>
                                <p><span class="author">Sergio Satyabrata</span></p>
                                <p>I want to sleep</p>
                                <h5>Insert ID</h5>
                            </div>
                        </div>

                        <div class="comments-item">
                            <img src="jerryv2.jpeg" />
                            <div>
                                <p><span class="author">Jerry Shen Li</span></p>
                                <p>Get me out of here</p>
                                <h5>Insert ID</h5>
                            </div>
                        </div>

                        <div class="comments-item">
                            <img src="eddie.JPG" />
                            <div>
                                <p><span class="author">Eddie</span></p>
                                <p>Sup</p>
                                <h5>Insert ID</h5>
                            </div>
                        </div>

                        <div class="comments-item">
                            <img src="renn.png" />
                            <div>
                                <p><span class="author">Renn</span></p>
                                <p>Hi</p>
                                <h5>Insert ID</h5>
                            </div>
                        </div>
                    </div>
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