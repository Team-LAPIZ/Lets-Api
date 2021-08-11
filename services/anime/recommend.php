<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
        $id = "";
        $title = "";
        
        if(!empty($_GET["id"])){
            $id = $_GET["id"];
        }

        if(!empty($_GET["title"])){
            $title = $_GET["title"];
        }
        
        if($id == "" || $title == "" || !is_numeric($id)){
            header("Location: /handler/errors/404");
            exit();
        }

        include_once $_SERVER['DOCUMENT_ROOT'] . "/handler/include/meta.php";
        importMeta('services/anime/'  . basename($_SERVER['PHP_SELF']), "{$title} Recommendation - Let's API", "Anime, Scraper, API, LetsAPI, Tools", 
        "Anime that are similar to {$title}. Searched using Jikan Rest API by Let's API, A website that utilize many API(s) and tools.");
    ?>
</head>

<body class="background bulat1 bulat2">
    <?php 
        include_once $_SERVER['DOCUMENT_ROOT'] . "/handler/include/header.php";
    ?>

    <div class="content">
    <a href="./"><br><img class="back-arrow" src="/handler/img/arrow.png" alt="back"> <span class="link-back">Go to Anime Menu</span></a>
        <div class="service-container">
            <h1 <?php echo "data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"Click to see the details of this anime\""?>>
            <a href = "./details?id=<?php echo $id?>">Anime Similar to "<?php echo $title?>"</a></h1>
        </div>
        
        <div class="anime-container">
        <?php require './get/getDetails.php';
            getRecommend($id);
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