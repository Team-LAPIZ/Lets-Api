<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
        include_once $_SERVER['DOCUMENT_ROOT'] . "/handler/include/meta.php";
        importMeta('services/yt/'  . basename($_SERVER['PHP_SELF']), "Get Youtube Thumbnail - Let's API", "Youtube, API, LetsAPI, Tools", 
        "Get a Youtube thumbnail just by inputting a youtube URL by Let's API. A website that utilize many API(s)");
    ?>
</head>

<body class="background bulat1 bulat2">
<script src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/2.0.2/FileSaver.min.js" integrity="sha512-k8F8QynmFNURwbUJC8drKA+fo3YfNvjqKzStdydD6au+MzvxBoRnxH8E31RJXwDY9DrnEiPhh9wBoDSIxhkyHQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <?php 
        include_once $_SERVER['DOCUMENT_ROOT'] . "/handler/include/header.php";
    ?>

    <div class="content">
        <div class="service-container">
            <h1>Get Youtube Video Thumbnail</h1>
            <form method="get" action="thumbnail.php" name="getlink" onsubmit="return validateForm()"
                style="margin-bottom:20px;">
                <div class="searchbar-wrapper">
                    <input class="searchbar" type="text" placeholder="Input Youtube Video Link Here..." name="q"
                        required>
                    <button class="search_button"><i class="ion-android-send"></i></button>
                </div>
            </form>
        </div>

        <div>
            <?php
            if(isset($_GET['q'])) {
                $q = $_GET["q"];

                // Get ID from link
                $id = matchTheId($q);
                if($id == "") {
                    echo "<div class=\"yt-container\"><h4>Invalid Youtube Video Link</h4></div>";
                } else {
                    echo '
                    <div class="yt-container"\">';
                    echo "
                        <img class=\"yt-thumb\" id=\"imgMaxRes\" src=\"https://img.youtube.com/vi/{$id}/maxresdefault.jpg\" onerror=\"this.onerror=null; this.src='/handler/img/noposter.png'\">
                    ";

                    echo"
                    </div>
                    <div class=\"yt-container\">
                        <h4 style=\"margin: 10px;\">Thumbnail of</h4>
                    </div>
                    <div class=\"yt-container\">
                        <p class=\"p-centered\" style=\"margin-top: 0px; margin-left: 10px; margin-right: 10px;\"><a class=\"link\" href=\"$q\" target=\"_blank\" rel=\"noreferrer noopener\">{$q}</a></p>
                    </div>
                    <div class=\"yt-container\">
                        <h4 style=\"margin: 10px;\">More Version</h4>
                    </div>
                    <div class=\"yt-container\">
                    ";
                    $maxRes = "https://img.youtube.com/vi/$id/maxresdefault.jpg";
                    $sddefault = "https://img.youtube.com/vi/$id/sddefault.jpg";
                    $mqdefault = "https://img.youtube.com/vi/$id/mqdefault.jpg";
                    $hqdefault = "https://img.youtube.com/vi/$id/hqdefault.jpg";
                    $default = "https://img.youtube.com/vi/$id/default.jpg";
                    list($widthMax, $heightMax) = getimagesize($maxRes); 
                    list($widthSd, $heightSd) = getimagesize($sddefault);
                    list($widthMq, $heightMq) = getimagesize($mqdefault);
                    list($widthHq, $heightHq) = getimagesize($hqdefault);
                    list($widthDefault, $heightDefault) = getimagesize($default);

                    if(checkAvailable($widthMax, $heightMax)) {
                        echoBtnDownload($maxRes, "btnMaxRes", $widthMax, $heightMax);
                    }
                    if(checkAvailable($widthSd, $heightSd)) {
                        echoBtnDownload($sddefault, "btnSd", $widthSd, $heightSd);
                    }
                    if(checkAvailable($widthMq, $heightMq)) {
                        echoBtnDownload($mqdefault, "btnHQ", $widthHq, $heightHq);
                    }
                    if(checkAvailable($widthHq, $heightHq)) {
                        echoBtnDownload($hqdefault, "btnMQ", $widthMq, $heightMq);
                    }
                    echoBtnDownload($default, "btnDefault", $widthDefault, $heightDefault);

                    echo '
                    <script>
                    function getFileName(str) {
                        var name = str.substr(str.lastIndexOf("/") + 1);
                        return name;
                    }
                    </script>
                    ';
                }
            }

            function echoBtnDownload($imglink, $id, $width, $height) {
                echo "
                    <button style=\"margin-right: 10px; margin-left: 10px;\" id=\"$id\">$width x $height</button>
                ";
                echo '
                    <script>
                    let '.$id.' = document.getElementById("'.$id.'");
                    '.$id.'.addEventListener("click", () => {
                        var imagePath = "'.$imglink.'";
                        var fileName = "getFileName(imagePath)";
                        saveAs(imagePath, fileName + " Thumbnail.jpg");
                    });
                    </script>
                ';
            }

            function checkAvailable($width, $height) {
                if($width == 120 && $height == 90) {
                    return false;
                } else { 
                    return true; 
                }
            }

            function matchTheId($q) {
                // Match the id only
                preg_match_all("/[?&]v=([^&]*)/i", $q, $match);
                if(isset($match[1][0])) {
                    $id = $match[1][0];
                    return $id;
                } 
                preg_match_all("/.be\/([a-zA-Z0-9\_\-]+)&?/i", $q, $match);
                if(isset($match[1][0])) {
                    $id = $match[1][0];
                    return $id;
                }

                preg_match_all("/embed\/([a-zA-Z0-9\_\-]+)&?/i", $q, $match);
                if(isset($match[1][0])) {
                    $id = $match[1][0];
                    return $id;
                }
            }
            ?>
        </div>
    </div>
    
    <script>
        const validateForm = () => {
            let q = document.forms["getlink"]["q"].value;
            if (q == "") {
                alert("Please Input A Valid Youtube Video Link");
                return false;
            }
            var linkFound = false;
            var regex = /^(?:https?:\/\/)?(?:www\.)?(?:youtu\.be\/|youtube\.com\/(?:embed\/|v\/|watch\?v=|watch\?.+&v=))((\w|-){11})(?:\S+)?$/gi;
            var match = q.match(regex);
            if (match) {
                linkFound = true;
                return true;
            }

            if (!linkFound) {
                alert("Please Input A Valid Youtube Video Link!\r\nExample: https://youtu.be/dQw4w9WgXcQ");
                return false;
            }
        };
    </script>

    <?php 
        include_once $_SERVER['DOCUMENT_ROOT'] . "/handler/include/footer.php";
        footerImport('services/anime/' . basename($_SERVER['PHP_SELF']),  "This service is made possible by using YT Image API");
    ?>
</body>

</html>