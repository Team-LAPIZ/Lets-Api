<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
        include_once "handler/include/meta.php";
        importMeta("", "handler/css/style.css", "Let's API", "API, Tools",
        "Home of Let's API. A website that utilize many API(s) such as email verification, movies searching, anime, etc.");
    ?>
</head>

<body class="background bulat1 bulat2">

    <?php 
        include_once "handler/include/header.php";
        headerImport(0);
    ?>


    <h1 class="gap-top"></h1>
    <div class="content">
        <h1 class="margin-top">Browse Around The Web</h1>
        <div class="container">
            <?php 
                // arrays containing all the features
                $toolLists = array(
                    array("movie/search.php" ,"tmdb.png", "tmdb", "Search for Movie"),
                    array("anime/search.php" ,"mal.png", "mal", "Search for Anime"),
                    array("anime/recommend.php" ,"mal.png", "mal", "Get Anime Recommendation"),
                    array("mail/verify.php" ,"email.png", "Email Verification", "Email Verification")
                ); 

                // displaying the features
                for ($i = 0; $i < count($toolLists); $i++) {
                    echo "
                        <a href=\"services/{$toolLists[$i][0]}\">
                            <figure class=\"menu-item\">
                                <div class=\"rectangle\">
                                    <img src=\"src/{$toolLists[$i][1]}\" alt=\"{$toolLists[$i][2]}\"/>
                                </div>
                                <figcaption class=\"caption\">{$toolLists[$i][3]}</figcaption>
                            </figure>
                        </a>
                    ";
                }
            ?>
        </div>
    </div>

    <?php 
        include_once "handler/include/footer.php";
        footerImport(0, "index.php");
    ?>

</body>

</html>