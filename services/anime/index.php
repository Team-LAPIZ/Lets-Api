<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
        include_once "../../handler/include/meta.php";
        importMeta("services/anime/search.php", "../../handler/css/style.css", "Search an Anime - Let's API",
        "Anime, Scraper, API, LetsAPI, Tools", "Search an anime by using MAL-Scraper by Let's API, A website that utilize many API(s) and tools.");
    ?>
</head>

<body class="background bulat1 bulat2">

    <?php 
        include_once "../../handler/include/header.php";
        headerImport(2);
    ?>

    <div class="content">
        <div class="service-container">
            <h1>Search Anime</h1>
            <form method="get">
                <div class="wrapper">
                    <input class="service-container-search" placeholder="Search Anime...." type="text"
                        name="searchAnime" minlength="3" required>
                    <button class="button" name="clickButton">Search</button>
                </div>
            </form>
        </div>

        <div class="item-n-img-wrap">
        <?php 
            // Initialize cURL.
            $ch = curl_init();

            // Setting
            curl_setopt($ch, CURLOPT_URL, "https://api.jikan.moe/v4/top/anime");
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);

            // Execute the request.
            $data = curl_exec($ch);

            // Parse data to json object
            $dataJson = json_decode($data);

            // Close the cURL handle.
            curl_close($ch);

            for ($i = 0; $i < count($dataJson->data); $i++) {
                echo "
                <a href=\"./details?id={$dataJson->data[$i]->mal_id}\">
                    <figure class=\"item-img\">
                        <div class=\"img__wrap\">
                        <img class=\"img__img\" src=\"{$dataJson->data[$i]->images->jpg->large_image_url}\" />
                            <div class=\"img__description_layer\">
                                <p class=\"img__description\">{$dataJson->data[$i]->synopsis}</p>
                            </div>
                        </div>
                        <figcaption class=\"item-caption\">{$dataJson->data[$i]->title}</figcaption>
                    </figure>
                </a>
                ";
            }

            // 2 style, first <a href\"./details?anime=steins gate\">
            // 2nd <a href\"./details?id=9253\">
        ?>
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