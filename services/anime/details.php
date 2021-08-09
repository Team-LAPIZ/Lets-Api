<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
        $id = "";
        
        if(!empty($_GET["id"])){
            $id = $_GET["id"];
        }

        if($id == "" || !is_numeric($id)){
            header("Location: /handler/errors/404");
            exit();
        }

        require './get/getDetails.php';

        list($malURL, $image, $score, $scored_by, $rank, $popularity, $members, $favorites, $synopsis, $air_date, $duration,
        $ageRating, $episodes, $title, $titleEng, $titleJp, $type, $source, $status, $synonyms, $genres, $studios, $licensors, $producers) = getDetails($id);

        $descForMeta = substr($synopsis, 0, 125);
        include_once $_SERVER['DOCUMENT_ROOT'] . "/handler/include/meta.php";
        importMeta('services/anime/' . basename($_SERVER['PHP_SELF']), "{$title} - Let's API", "Anime, Scraper, API, LetsAPI, Tools", 
        "{$descForMeta} - searched using Jikan by Let's API.");
    ?>
</head>

<body class="background bulat1 bulat2">
    <?php 
        include_once $_SERVER['DOCUMENT_ROOT'] . "/handler/include/header.php";
    ?>

    <?php 
    function iterate($var) {
        $x = 1;
        $length = count($var);
        foreach($var as $key) {
            if($x == $length) {
                echo $key;
            } else {
                echo $key . ', ';
            }
        }
    }
    ?>

    <div class="content">
    <a href="./"><br><img class="back-arrow" src="/handler/img/arrow.png" alt="back"> <span class="link-back">Go to Anime Menu</span></a>
        <div class="service-container">
            <h1><?php echo $title?></h1>
        </div>
        <div class="anime-container">
            <div class="details-container-column">
                <img style="margin-left:auto;margin-right:auto;" src="<?php echo $image?>" onerror="this.onerror=null; this.src='/handler/img/noposter.png'" alt="<?php echo $title?> Poster">
                <div class="details-container-row" id="info-under">
                    <div class="info-under-img">
                        <div>
                            <h4 class="gallery-title" style="margin-bottom: 0px;"><span class="gallery-border-bot">Score</span></h4>
                        </div>
                        <div class="info-num">
                            <p class="p-under-info"><?php echo $score?></p>
                        </div>
                    </div>
                    <div class="info-under-img">
                        <div>
                            <h4 class="gallery-title" style="margin-bottom: 0px;"><span class="gallery-border-bot">Scored by</span></h4>
                        </div>
                        <div class="info-num">
                            <p class="p-under-info"><?php echo $scored_by?> users</p>
                        </div>
                    </div>
                    <div class="info-under-img">
                        <div>
                            <h4 class="gallery-title" style="margin-bottom: 0px;"><span class="gallery-border-bot">Ranked</span></h4>
                        </div>
                        <div class="info-num">
                            <p class="p-under-info">#<?php echo $rank?></p>
                        </div>
                    </div>
                    <div class="info-under-img">
                        <div>
                            <h4 class="gallery-title" style="margin-bottom: 0px;"><span class="gallery-border-bot">Popularity</span></h4>
                        </div>
                        <div class="info-num">
                            <p class="p-under-info">#<?php echo $popularity?></p>
                        </div>
                    </div>
                    <div class="info-under-img">
                        <div>
                            <h4 class="gallery-title" style="margin-bottom: 0px;"><span class="gallery-border-bot">Members</span></h4>
                        </div>
                        <div class="info-num">
                            <p class="p-under-info"><?php echo $members?></p>
                        </div>
                    </div>
                    <div class="info-under-img">
                        <div>
                            <h4 class="gallery-title" style="margin-bottom: 0px;"><span class="gallery-border-bot">Favorites</span></h4>
                        </div>
                        <div class="info-num">
                            <p class="p-under-info"><?php echo $favorites?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="details-container-row">
                <div class="details-content" style="padding-right: 10px;">
                    <h4 class="gallery-title"><span class="gallery-border-bot">Information</span></h4>
                    <div class="information">
                        <p class="p-justify">
                            <b>Title in English</b> : <?php echo $titleEng?><br>
                            <b>Title in Japanese</b> : <?php echo $titleJp?><br>
                            <b>Synonym</b> : <?php echo join(', ', $synonyms);?><br>
                            <b>Type</b> : <?php echo $type?><br>
                            <b>Source</b> : <?php echo $source?><br>
                            <b>Genres</b> : <?php echo join(', ', $genres);?> <br>
                            <b>Episodes/Duration</b> : <?php echo $episodes?>/<?php echo $duration?><br>
                            <b>Age Rating</b> : <?php echo $ageRating?><br>
                            <b>Status</b> : <?php echo $status?><br>
                            <b>Airing date</b> : <?php echo $air_date?><br>
                            <b>Producers</b> : <?php echo join(', ', $producers);?><br>
                            <b>Licensors</b> : <?php echo join(', ', $licensors);?><br>
                            <b>Studios</b> : <?php echo join(', ', $studios);?><br>
                        </p>
                    </div>
                </div>
                <div class="details-content">
                    <h4 class="gallery-title"><span class="gallery-border-bot">Synopsis</span></h4>
                    <div class="synopsis">
                        <p class="p-justify"><?php echo $synopsis ?></p>
                    </div>
                </div>
                <div class="details-content">
                    <h4 class="gallery-title"><span class="gallery-border-bot">Links</span></h4>
                    <div class="synopsis">
                        <p class="p-justify">
                            <ul id="links-anime">
                                <li><a class="link-subtle" href="./recommend?id=<?php echo $id?>&title=<?php echo $title?>">Look up Anime that are similar to this</a></li>
                                <li><a class="link-subtle" href="<?php echo $malURL?>">Official MAL page</a></li>
                                <li><a class="link-subtle" href="https://www.crunchyroll.com/search?from=&q=<?php echo $title?>">Search on Crunchyroll (Official)</a></li>
                                <li><a class="link-subtle" href="https://www.youtube.com/c/MuseAsia/search?query=<?php echo $title?>">Search on Muse Asia (Official)</a></li>
                                <li><a class="link-subtle" href="https://gogoanime.pe//search.html?keyword=<?php echo $title?>">Search on Gogoanime (Unofficial)</a></li>
                                <li><a class="link-subtle" href="https://9anime.to/search?keyword=<?php echo $title?>">Search on 9Anime (Unofficial)</a></li>
                            </ul>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script>
        var theInfo = document.getElementById('info-under');
        function changeBorder(type) {
            switch (type) {
                case 1:
                    theInfo.classList.remove("details-container-row");
                    theInfo.classList.toggle("details-container-column");
                    break;
                case 2:
                    if(!theInfo.classList.contains("details-container-row")) {
                        theInfo.classList.remove("details-container-column");
                        theInfo.classList.toggle("details-container-row");
                    }
                    break;
                default:
                    break;
            }
        }

        window.onresize = function() { 
            if(getScreenWidth() < 372) {
                changeBorder(1);
            } else {
                changeBorder(2);
            }
        }
        
        // Run when start
        window.onresize();
    </script>

    <?php 
        include_once $_SERVER['DOCUMENT_ROOT'] . "/handler/include/footer.php";
        footerImport('services/anime/' . basename($_SERVER['PHP_SELF']),  "This service is made possible by using <a class=\"footerlink\" href=\"https://jikan.moe/\" target=\"_blank\" rel=\"noreferrer noopener\">Jikan API</a>, 
        a <a class=\"footerlink\" href=\"https://myanimelist.net/\" target=\"_blank\" rel=\"noreferrer noopener\">MAL</a> scraper Rest API.");
    ?>
</body>

</html>