<!DOCTYPE html>
<html lang="en">

<head>
    <title>Let's API</title>
    <?php 
        include_once "handler/include/meta.php";
        importMeta("", "handler/css/style.css","API, Tools", "Home of Let's API. A website that utilize many API(s) such as email verification, movies searching, anime, etc.");
    ?>

</head>

<body class="background bulat1 bulat2">

    <?php 
        include_once "handler/include/header.php";
        headerImport(0, "pages/auth/login.php");
    ?>
    
    <h1 class="margin-top"></h1>
    <div class="content">
        <h1 class="margin-top">Browse Around The Web</h1>
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
        footerImport(0, "index.php");
    ?>

</body>

</html>