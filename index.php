<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
        include_once "handler/include/meta.php";
        importMeta("", "Let's API", "API, Tools", "Home of Let's API. A website that utilize many API(s) 
        such as email verification, movies searching, anime, etc.");
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
            <?php 
                // arrays containing all the features
                $toolLists = array(
                    array("../#" ,"tmdb.png", "tmdb", "Search for Movie (work in progress)"),
                    array("../#" ,"mal.png", "mal", "Search for Anime (work in progress)"),
                    array("mail/verify.php" ,"envelope.png", "Email Verification", "Email Verification"),
                    array("texteditor/bbcode.php" ,"text.png", "BBCode Editor", "BBCode Editor")
                ); 

                // displaying the features
                for ($i = 0; $i < count($toolLists); $i++) {
                    echo "
                        <a href=\"services/{$toolLists[$i][0]}\">
                            <figure class=\"menu-item\">
                                <div class=\"rectangle\">
                                    <img src=\"handler/img/{$toolLists[$i][1]}\" alt=\"{$toolLists[$i][2]}\"/>
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
        footerImport("index.php");
    ?>

</body>

</html>