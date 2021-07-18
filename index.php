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
    <meta property="og:image" content="https://letsapi.infinityfreeapp.com/src/kite.png">
    <meta property="og:url" content="https://letsapi.infinityfreeapp.com/">

    <link rel="stylesheet" href="handler/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&display=swap"
        rel="stylesheet">
</head>

<body class="background bulat1 bulat2">

    <header>
        <img class="logo" src="src/kite.png" alt="">
        <nav>
            <ul>
                <a href="./index.php">
                    <li>Home</li>
                </a>
                <a href="./news.php">
                    <li>News</li>
                </a>
                <a href="./about.php">
                    <li>About</li>
                </a>
                <a href="./team.php">
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

    <footer>
        ©Team LAPIZ
    </footer>

</body>

</html>