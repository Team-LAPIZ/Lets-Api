<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
        include_once $_SERVER['DOCUMENT_ROOT'] . "/handler/include/meta.php";
        importMeta('services/anime/', "Anime - Let's API", "Anime, Scraper, API, LetsAPI, Tools", 
        "Search an anime by using Jikan Rest API by Let's API, A website that utilize many API(s) and tools.");
    ?>
</head>

<body class="background bulat1 bulat2">
    <?php 
        include_once $_SERVER['DOCUMENT_ROOT'] . "/handler/include/header.php";
    ?>

    <div class="content">
        <div class="service-container">
            <h1>Anime</h1>
            <p class="service-desc">All data are taken from <a class="link-subtle" href="https://myanimelist.net/"
                    target="_blank" rel="noreferrer noopener">MyAnimeList</a> using Jikan API, a malscraper rest api</p>
            <h4 class="service-sub"><img src="https://img.icons8.com/material-outlined/13/000000/gear--v1.png" />
                Options</h4>
            <ul class="anime-menu">
                <li class="anime-menu-item" id="btn1" onmouseover="mouseEnter_1(this)" onmouseout="mouseLeave_1(this)">
                    <a>Search for Anime</a></li>
                <li class="anime-menu-item" id="btn2" onmouseover="mouseEnter_2(this)" onmouseout="mouseLeave_2(this)">
                    <a>Search for Anime Similar To</a></li>
                <li class="anime-menu-item" id="btn3"><a href="./schedule.php">Weekly Schedule</a></li>
            </ul>
            <div class="form-dropdown fadeIn" id="form1">
                <form method="get" action="search.php">
                    <div class="searchbar-wrapper">
                        <input type="hidden" name="mode" value="search">
                        <input class="searchbar" type="text" placeholder="Search Anime..." name="q" minlength="3" required>
                        <button class="search_button"><i class="fa fa-search"></i></button>
                    </div>
                </form>
            </div>
            <div class="form-dropdown fadeIn" id="form2">
                <form method="get" action="search.php">
                    <div class="searchbar-wrapper">
                        <input type="hidden" name="mode" value="recommend">
                        <input class="searchbar" type="text" placeholder="Search for Anime Similar To..." name="q" minlength="3" required>
                        <button class="search_button"><i class="fa fa-search"></i></button>
                    </div>
                </form>
            </div>
        </div>

        <script>
        var click_btn1 = false;
        var click_btn2 = false;

        var btn_el1 = document.getElementById("btn1");
        var btn_el2 = document.getElementById("btn2");
        var el_1 = document.getElementById("form1")
        var el_2 = document.getElementById("form2")

        const hideEl = (type) => {
            switch (type) {
                case 1:
                    el_1.classList.remove("show-block");
                    el_1.classList.toggle("hidden");
                    break;
                case 2:
                    el_2.classList.remove("show-block");
                    el_2.classList.toggle("hidden");
                    break;
                default:
                    break;
            }
        }

        const showEl = (type) => {
            switch (type) {
                case 1:
                    el_1.classList.remove("hidden");
                    el_1.classList.toggle("show-block");
                    break;
                case 2:
                    el_2.classList.remove("hidden");
                    el_2.classList.toggle("show-block");
                    break;
                default:
                    break;
            }
        }

        const reset = (type) => {
            switch (type) {
                case 1:
                    btn_el1.style.background = "#60A3D9";
                    btn_el2.style.background = "#f6f6f7";
                    break;
                case 2:
                    btn_el2.style.background = "#60A3D9";
                    btn_el1.style.background = "#f6f6f7";
                    break;
                default:
                    break;
            }

            if (getScreenWidth() < 700) {
                btn_el1.style.background = "#f6f6f7";
                btn_el2.style.background = "#f6f6f7";
            }

            click_btn2 = false;
            click_btn1 = false;
        }

        btn_el1.addEventListener('click', () => {
            if (click_btn1 == false) {
                showEl(1);
                hideEl(2);
                btn_el1.style.background = "rgba(36, 62, 206, 0.6)";
                btn_el2.style.background = "#f6f6f7";
                click_btn1 = true;
                click_btn2 = false;
            } else {
                hideEl(1);
                reset(1);
            }
        });

        btn_el2.addEventListener('click', () => {
            if (click_btn2 == false) {
                showEl(2);
                hideEl(1);
                btn_el2.style.background = "rgba(36, 62, 206, 0.6)";
                btn_el1.style.background = "#f6f6f7";
                click_btn2 = true;
                click_btn1 = false;
            } else {
                hideEl(2);
                reset(2);
            }
        });

        mouseEnter_1 = (el) => {
            if (!click_btn1) {
                el.style.background = "#60A3D9";
            }
        }

        mouseLeave_1 = (el) => {
            if (!click_btn1) {
                el.style.background = "#f6f6f7"
            }
        }

        mouseEnter_2 = (el) => {
            if (!click_btn2) {
                el.style.background = "#60A3D9";
            }
        }

        mouseLeave_2 = (el) => {
            if (!click_btn2) {
                el.style.background = "#f6f6f7"
            }
        }
        </script>

        <div class="anime-container">
            <!-- CURRENT SEASON -->
            <?php require "./get/getTime.php";
                list($year, $season) = getYearAndSeason();
                echo "
            <h4 class=\"gallery-title gallery-gap-little\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"Current Year/Season: {$year}/{$season}\">Anime Airing This Season</h4>
                    ";
            ?>
            <div class="js-flickity" data-flickity-options='{ "cellAlign": "center", "autoPlay": 4000,  "pauseAutoPlayOnHover": true, "groupCells": true, "wrapAround": true, "pageDots": false, 
                "prevNextButtons": true, "freeScroll": true, "selectedAttraction": 0.01, "friction": 0.20}'>
                    <?php
                        include_once "./get/season.php";
                    ?>
            </div>

            <!-- NEXT SEASON -->
            <?php
                list($year, $season) = getNextYearAndSeason();
                echo "
            <h4 class=\"gallery-title gallery-gap-little\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"Upcoming Season: {$season} of {$year}\">Upcoming Season</h4>
                    ";
            ?>
            <div class="js-flickity" data-flickity-options='{ "cellAlign": "center", "autoPlay": 4000, "pauseAutoPlayOnHover": true, "groupCells": true, "wrapAround": true, "pageDots": false, 
                "prevNextButtons": true, "freeScroll": true, "selectedAttraction": 0.01, "friction": 0.20}'>
                    <?php
                        sleep(2);
                        include_once "./get/upcoming.php";
                    ?>
            </div>

            <!-- TOP -->
            <h4 class="gallery-title gallery-gap-little" data-bs-toggle="tooltip" data-bs-placement="top" title="Top 25 Anime">Top Anime Series of All Time</h4>
            <div class="js-flickity" data-flickity-options='{ "cellAlign": "center", "autoPlay": 4000, "pauseAutoPlayOnHover": true, "groupCells": true, "wrapAround": true, "pageDots": false, 
                "prevNextButtons": true, "freeScroll": true, "selectedAttraction": 0.01, "friction": 0.20}'>
                    <?php
                        sleep(2);
                        include_once "./get/top.php";
                    ?>
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