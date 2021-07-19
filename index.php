<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Let's API</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Home of Let's API. A website that utilize many API(s) such as email verification, movies searching, anime, etc.">
    <meta name="keywords" content="API, Tools">
    <meta name="author" content="Team LAPIZ">
    <meta name="language" content="en">

    <meta property="og:title" content="Let's API">
    <meta property="og:description" content="Home of Let's API. A website that utilize many API(s) such as email verification, movies searching, anime, etc.">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="letsapi.infinityfreeapp.com">
    <meta property="og:image" content="https://letsapi.infinityfreeapp.com/src/kite.png">
    <meta property="og:url" content="https://letsapi.infinityfreeapp.com/">

    <link rel="stylesheet" href="handler/css/style.css?v=<? echo time(); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
</head>

<?php include "handler/include/forceDesktop.php"?>

<body class="background bulat1 bulat2">

    <header>
        <img class="logo" src="src/kite.png" alt="">
        <nav>
            <ul>
                <a href="./">
                    <li>Home</li>
                </a>
                <a href="webinfo/news.php">
                    <li>News</li>
                </a>
                <a href="webinfo/about.php">
                    <li>About</li>
                </a>
                <a href="webinfo/team.php">
                    <li>Team</li>
                </a>
            </ul>
        </nav>
        <div>
            <a href="pages/auth/login.php"><button class="login">Login</button></a>
        </div>
    </header>

    <h1 class="margin-top">Browse around the web</h1>

    <div class="container">
        <a href="pages/movie/search.php">
            <div>
                <div class="rectangle">
                    <img src="src/tmdb.png" alt="tmdb">
                </div>
                <p>Browse Movie</p>
            </div>
        </a>

        <!-- <a href="../"> -->
            <div>
                <div class="rectangle">
                    <img src="src/mal.png" alt="tmdb">
                </div>
                <p>Browse Anime</p>
            </div>
        </a>

        <a href="pages/mail/verify.php">
            <div>
                <div class="rectangle">
                    <img src="src/email.png" alt="email verification">
                </div>
                <p>Email verification</p>
            </div>
        </a>
    </div>

    <div class="footer-basic">
        <footer>
            <div class="social">
                <a href="https://github.com/Team-LAPIZ" target="_blank" rel="noreferrer noopener">
                    <i class="icon ion-social-github"></i>
                </a>
                <a href="https://twitter.com/teamlapiz_" target="_blank" rel="noreferrer noopener">
                    <i class="icon ion-social-twitter"></i>
                </a>
            </div>

            <div class="list-inline">
                <li class="list-inline-item"><a href="https://github.com/Team-LAPIZ/Lets-Api" target="_blank" rel="noreferrer noopener">Source Code</a></li>
                <li class="list-inline-item"><a href="webinfo/about.php">Services</a></li>
                <li class="list-inline-item"><a href="webinfo/privacypolicy.php">Privacy Policy</a></li>
            </div>
            <p class="copyright">Team LAPIZ © 2021 - Hosted on <a class="footerlink" href="http://infinityfree.net" target="_blank" rel="noreferrer noopener">InfinityFree.net</a>.</p>
        </footer>
    </div>

</body>

</html>