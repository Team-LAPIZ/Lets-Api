<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
        include_once $_SERVER['DOCUMENT_ROOT'] . "/handler/include/meta.php";
        importMeta("services/anime/index.php", "Search an Anime - Let's API", "Anime, Scraper, API, LetsAPI, Tools", 
        "Search an anime by using MAL-Scraper by Let's API, A website that utilize many API(s) and tools.");
    ?>
</head>
<!-- ICONNYA BELOM MUNCUL -->
<body class="background bulat1 bulat2">
    <?php 
        include_once $_SERVER['DOCUMENT_ROOT'] . "/handler/include/header.php";
    ?>

    <div class="content">
        <div class="service-container">
            <h1>Search Anime</h1>
            <form method="get" action="search.php">
                <div class="wrapper">
                    <input class="service-container-search" placeholder="Search Anime...." type="text" name="anime"
                        minlength="3" required>
                    <button class="button">Search</button>
                </div>
            </form>
        </div>
        
        <div class="anime-container">
            <?php
                require_once "./get/getTime.php";
                list($year, $season) = getYearAndSeason();
                echo "
                <h4 class=\"gallery-title\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"Current Year/Season: {$year}/{$season}\">
                Anime Airing This Season</h4>
                ";
                ?>
            <div class="js-flickity" data-flickity-options='{ "cellAlign": "center", "autoPlay": 4000, 
                    "pauseAutoPlayOnHover": true, "groupCells": true, "wrapAround": true, "pageDots": false, 
                    "prevNextButtons": true, "freeScroll": true, "selectedAttraction": 0.01, "friction": 0.20}'>
                <?php 
                    include_once "./get/season.php";
                    ?>
            </div>
            <h4 class="gallery-title gallery-gap-little" data-bs-toggle="tooltip" data-bs-placement="top"
                title="Data Taken From MyAnimeList.net">Top Anime Series</h4>
            <div class="js-flickity" data-flickity-options='{ "cellAlign": "center", "autoPlay": 4000, 
                    "pauseAutoPlayOnHover": true, "groupCells": true, "wrapAround": true, "pageDots": false, 
                    "prevNextButtons": true, "freeScroll": true, "selectedAttraction": 0.01, "friction": 0.20}'>
                <?php 
                    include_once "./get/top.php";
                    ?>
            </div>
        </div>
    </div>



    <script>
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })
    </script>

    <?php 
    if (!empty($_GET['searchAnime'])) {

    }
    ?>

    <?php 
        $_SERVER['DOCUMENT_ROOT'] . "/handler/include/footer.php";
        footerImport("pages/mail/verify.php",  "This service is made possible by using <a class=\"footerlink\" href=\"https://jikan.moe/\" target=\"_blank\" rel=\"noreferrer noopener\">Jikan API</a>, 
        a MAL scraper Rest API. Images gallery are made using <a class=\"footerlink\" href=\"https://flickity.metafizzy.co/\" target=\"_blank\" rel=\"noreferrer noopener\">Flickity</a>");
    ?>
</body>

</html>