<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
        include_once "handler/include/meta.php";
        importMeta("", "Let's API", "API, Tools", "Home of Let's API. A website that utilize many API(s) such as email verification, movies searching, anime, etc.");
    ?>
</head>

<body class="background bulat1 bulat2">
    <?php 
        include_once "handler/include/header.php";
    ?>

    <h1 class="gap-top"></h1>
    <div class="content">
        <h1 class="margin-top">Browse Around The Web</h1>
        <div class="container-main">
            <a href="services/movie/search">
                <figure class="menu-item">
                    <div class="rectangle">
                        <img src="handler/img/tmdb.png" alt="TMBD" />
                    </div>
                    <figcaption class="caption">Search for Movie</figcaption>
                </figure>
            </a>
            <div class="dropdown">
                <a onclick="openlinkAnime()" href="javascript:void(0)">
                    <figure class="menu-item">
                        <div class="rectangle">
                            <img src="handler/img/mal.png" alt="MAL" />
                        </div>
                        <figcaption class="caption">Anime</figcaption>
                    </figure>
                </a>
                <div class="dropdown-content">
                    <a href="services/anime/">Anime Menu</a>
                    <a href="services/anime/search?mode=search">Search Anime</a>
                    <a href="services/anime/search?mode=recommend">Search For Recommendation</a>
                    <a href="services/anime/schedule">Weekly Schedule</a>
                </div>
            </div>
            <a href="services/mail/verify">
                <figure class="menu-item">
                    <div class="rectangle">
                        <img src="handler/img/envelope.png" alt="Email Verification" />
                    </div>
                    <figcaption class="caption">Email Verification</figcaption>
                </figure>
            </a>
            <a href="services/texteditor/bbcode">
                <figure class="menu-item">
                    <div class="rectangle">
                        <img src="handler/img/text.png" alt="BBCode Editor" />
                    </div>
                    <figcaption class="caption">BBCode Editor</figcaption>
                </figure>
            </a>
        </div>
    </div>

    <script>
        function openlinkAnime(){
            if(getScreenWidth() > 700) { // Get Screen Width already imported in header
                window.open("services/anime/", "_self");
            }
        }
    </script>

    <?php 
        include_once "handler/include/footer.php";
        footerImport("index.php");
    ?>

</body>

</html>