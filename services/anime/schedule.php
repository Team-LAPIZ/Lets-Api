<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
        include_once $_SERVER['DOCUMENT_ROOT'] . "/handler/include/meta.php";
        importMeta('services/anime/' . basename($_SERVER['PHP_SELF']), "Anime Schedule - Let's API", "Anime, Scraper, API, LetsAPI, Tools", 
        "Look up anime weekly schedule by using Jikan Rest API by Let's API, A website that utilize many API(s) and tools.");
    ?>
</head>

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

        <div class="anime-container weekly">
            <div class="days">
                <h4 class="gallery-title">Monday</h4>
                <div class="js-flickity" data-flickity-options='{ "cellAlign": "center", "autoPlay": 4000, "pauseAutoPlayOnHover": true, "groupCells": true, "wrapAround": true, "pageDots": false, 
                    "prevNextButtons": true, "freeScroll": true, "selectedAttraction": 0.01, "friction": 0.20}'>
                    <?php require "./get/weekly.php";

                    ?>
                </div>
            </div>
            <div class="days">
                <h4 class="gallery-title">Tuesday</h4>
                <div class="js-flickity" data-flickity-options='{ "cellAlign": "center", "autoPlay": 4000, "pauseAutoPlayOnHover": true, "groupCells": true, "wrapAround": true, "pageDots": false, 
                    "prevNextButtons": true, "freeScroll": true, "selectedAttraction": 0.01, "friction": 0.20}'>
                    <?php

                    ?>
                </div>
            </div>
            <div class="days">
                <h4 class="gallery-title">Wednesday</h4>
                <div class="js-flickity" data-flickity-options='{ "cellAlign": "center", "autoPlay": 4000, "pauseAutoPlayOnHover": true, "groupCells": true, "wrapAround": true, "pageDots": false, 
                    "prevNextButtons": true, "freeScroll": true, "selectedAttraction": 0.01, "friction": 0.20}'>
                    <?php

                    ?>
                </div>
            </div>
            <div class="days">
                <h4 class="gallery-title">Thursday</h4>
                <div class="js-flickity" data-flickity-options='{ "cellAlign": "center", "autoPlay": 4000, "pauseAutoPlayOnHover": true, "groupCells": true, "wrapAround": true, "pageDots": false, 
                    "prevNextButtons": true, "freeScroll": true, "selectedAttraction": 0.01, "friction": 0.20}'>
                    <?php

                    ?>
                </div>
            </div>
            <div class="days">
                <h4 class="gallery-title">Saturday</h4>
                <div class="js-flickity" data-flickity-options='{ "cellAlign": "center", "autoPlay": 4000, "pauseAutoPlayOnHover": true, "groupCells": true, "wrapAround": true, "pageDots": false, 
                    "prevNextButtons": true, "freeScroll": true, "selectedAttraction": 0.01, "friction": 0.20}'>
                    <?php

                    ?>
                </div>
            </div>
        </div>
    </div>

    <?php 
        include_once $_SERVER['DOCUMENT_ROOT'] . "/handler/include/footer.php";
        footerImport('services/anime/' . basename($_SERVER['PHP_SELF']),  "This service is made possible by using <a class=\"footerlink\" href=\"https://jikan.moe/\" target=\"_blank\" rel=\"noreferrer noopener\">Jikan API</a>, 
        a <a class=\"footerlink\" href=\"https://myanimelist.net/\" target=\"_blank\" rel=\"noreferrer noopener\">MAL</a> scraper Rest API. Images gallery are made using <a class=\"footerlink\" href=\"https://flickity.metafizzy.co/\" target=\"_blank\" rel=\"noreferrer noopener\">Flickity</a>");
    ?>
</body>

</html>