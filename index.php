<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Let's API</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Home of Let's API. A website that utilize many API(s) such as email verification, movies searching, anime, etc.">
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

<body class="background bulat1 bulat2">

    <?php 
        include_once "handler/include/header.php";
        headerImport(0, "pages/auth/login.php");
    ?>
    
    <h1 class="margin-top">Browse around the web</h1>
    <div class="content">
        <div class="container">
            <a href="pages/movie/search.php">
                <div>
                    <div class="rectangle">
                        <img src="src/tmdb.png" alt="tmdb">
                    </div>
                    <p>Browse Movie</p>
                </div>
            </a>

            <a href="#">
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
    </div>

    <?php 
        include_once "handler/include/footer.php";
        footerImport(0);
    ?>

</body>

</html>