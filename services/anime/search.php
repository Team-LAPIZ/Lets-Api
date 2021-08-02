<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
        include_once "../../handler/include/meta.php";
        importMeta("services/anime/search.php", "../../handler/css/style.css", "Verify Email - Let's API",
        "Anime, Scraper, API, LetsAPI, Tools", "Search an anime by using MAL-Scraper by Let's API, A website that utilize many API(s) and tools.");
    ?>
</head>

<body class="background bulat1 bulat2">

    <?php 
        include_once "../../handler/include/header.php";
        headerImport(2);
    ?>

    <div class="content">
        <div class="search-container">
            <h1>Search Anime</h1>
            <form method="get">
                <div class="wrapper">
                    <input class="search" placeholder="Search Anime...." type="text" name="searchAnime"
                        title="Please enter a valid anime to search!" minlength="1" required>
                    <button class="button" name="clickButton">Search</button>
                </div>
            </form>
        </div>
    </div>

    <?php 
    if (isset($_GET['clickButton']) && !empty($_GET['searchAnime'])) {
       
    }


    ?>

    <?php 
        include_once "../../handler/include/footer.php";
        footerImport(2, "pages/mail/verify.php", "This service is made by using <a class=\"footerlink\" href=\"https://github.com/rl404/MAL-Scraper\" target=\"_blank\" rel=\"noreferrer noopener\">MAL-Scraper</a>");
    ?>

</body>

</html>