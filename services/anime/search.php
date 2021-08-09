<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
        include_once $_SERVER['DOCUMENT_ROOT'] . "/handler/include/meta.php";
        importMeta('services/anime/'  . basename($_SERVER['PHP_SELF']), "Search for Anime / Recommendation - Let's API", "Anime, Scraper, API, LetsAPI, Tools", 
        "Search an anime or recommendation by using Jikan Rest API by Let's API, A website that utilize many API(s) and tools.");
    ?>
</head>

<body class="background bulat1 bulat2">
    <?php 
        include_once $_SERVER['DOCUMENT_ROOT'] . "/handler/include/header.php";
    ?>

    <div class="content">
    <a href="./"><br><img class="back-arrow" src="/handler/img/arrow.png" alt="back"> <span class="link-back">Go to Anime Menu</span></a>
        <div class="service-container">
            <h1>Anime Search</h1>
            <p class="service-desc">Search for anime or anime recommendation, the data are taken from <a class="link-subtle" href="https://myanimelist.net/"
                    target="_blank" rel="noreferrer noopener">MyAnimeList</a> using Jikan API, a malscraper rest api</p>
            <h4 class="service-sub"><img src="https://img.icons8.com/material-outlined/13/000000/gear--v1.png" />
                Search Mode</h4>
            <ul class="anime-menu">
                <li class="anime-menu-item" id="btn1" onmouseover="mouseEnter_1(this)" onmouseout="mouseLeave_1(this)">
                    <a>Search Anime</a></li>
                <li class="anime-menu-item" id="btn2" onmouseover="mouseEnter_2(this)" onmouseout="mouseLeave_2(this)">
                    <a>Anime Similar To</a></li>
            </ul>
            <div class="form-dropdown fadeIn" id="form1">
                <form method="get" action="search.php">
                    <div class="searchbar-wrapper">
                        <input type="hidden" name="mode" value="search">
                        <input id="input1" class="searchbar" type="text" placeholder="Search Anime..." name="q" minlength="3" required>
                        <button class="search_button"><i class="fa fa-search"></i></button>
                    </div>
                </form>
            </div>
            <div class="form-dropdown fadeIn" id="form2">
                <form method="get" action="search.php">
                    <div class="searchbar-wrapper">
                        <input type="hidden" name="mode" value="recommend">
                        <input id="input2" class="searchbar" type="text" placeholder="Search for Anime Similar To..." name="q" minlength="3" required>
                        <button class="search_button"><i class="fa fa-search"></i></button>
                    </div>
                </form>
            </div>
        </div>

        <script src="./btnScript.js?v=<?time()?>"></script>
        
        <div class="anime-container">
        <?php require './get/getSearchAnime.php';
        if(isset($_GET['mode'])) {
            $mode = $_GET['mode'];
            $query = "";
            if(isset($_GET['q'])) {
                $query = $_GET['q'];
            }
            switch ($mode) {
                case 'search':
                    echo '<script>clickBtn1();'. 'document.getElementById("input1").value ="' . $query .'";</script>';
                    if($query !== "") {
                        searchNormal($query);
                    }
                    break;
                case 'recommend':
                    echo '<script>clickBtn2();'. 'document.getElementById("input2").value ="' . $query .'";</script>';
                    if($query !== "") {
                        searchRecommend($query);
                    }
                    break;
                default:
                    echo '<script>location.href =" '. './search.php' .'";</script>';
                    break;
            }
        } 
        ?>
        </div>
    </div>
    <?php 
        include_once $_SERVER['DOCUMENT_ROOT'] . "/handler/include/footer.php";
        footerImport('services/anime/' . basename($_SERVER['PHP_SELF']),  "This service is made possible by using <a class=\"footerlink\" href=\"https://jikan.moe/\" target=\"_blank\" rel=\"noreferrer noopener\">Jikan API</a>, 
        a <a class=\"footerlink\" href=\"https://myanimelist.net/\" target=\"_blank\" rel=\"noreferrer noopener\">MAL</a> scraper Rest API.");
    ?>
</body>

</html>