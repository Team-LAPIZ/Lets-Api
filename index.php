<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
        include_once "handler/include/meta.php";
        importMeta("", "Let's API", "API, Tools", "Home of Let's API. A website that utilize many API(s) such as email verification, movies searching, anime, etc.");
    ?>
</head>

<body class="background bulat1 bulat2">
    <?php 
        include_once "handler/include/header.php";
    ?>

    <h1 class="gap-top"></h1>
    <div class="content">
        <h1 class="margin-top" id="body">Browse Around The Web</h1>
        <div class="container-main">
            <div class="dropdown">
                <a onclick="return openLinkOnMobile()" href="services/anime/">
                    <figure class="menu-item">
                        <div class="rectangle">
                            <img src="handler/img/mal.png" alt="MAL" />
                        </div>
                        <figcaption class="caption">Anime</figcaption>
                    </figure>
                </a>
                <div class="dropdown-content">
                    <a href="services/anime/">Anime Menu</a>
                    <a href="services/anime/search?mode=search">Search Anime</a>
                    <a href="services/anime/search?mode=recommend">Search For Recommendation</a>
                    <a href="services/anime/schedule">Weekly Schedule</a>
                </div>
            </div>
            <a href="services/mail/verify">
                <figure class="menu-item">
                    <div class="rectangle">
                        <img src="handler/img/envelope.png" alt="Email Verification" />
                    </div>
                    <figcaption class="caption">Email Verification</figcaption>
                </figure>
            </a>
            <a href="services/texteditor/bbcode">
                <figure class="menu-item">
                    <div class="rectangle">
                        <img src="handler/img/text.png" alt="BBCode Editor" />
                    </div>
                    <figcaption class="caption">BBCode Editor</figcaption>
                </figure>
            </a>
            <a href="services/qr/create">
                <figure class="menu-item">
                    <div class="rectangle">
                            <img src="handler/img/qr.png" alt="QR Code" />
                        </div>
                    <figcaption class="caption">QR Code Maker</figcaption>
                </figure>
            </a>
            <a href="services/yt/thumbnail">
                <figure class="menu-item">
                    <div class="rectangle">
                            <img src="handler/img/yt.png" alt="Youtube Logo" />
                        </div>
                    <figcaption class="caption">Get Youtube Thumbnail</figcaption>
                </figure>
            </a>
        </div>
    </div>

    <script>
        function openLinkOnMobile(){
            if(getScreenWidth() < 700) {
                return false;
            } else {
                return true;
            }
        }
    </script>

    <?php 
        include_once "handler/include/footer.php";
        footerImport("index.php");
    ?>

</body>

</html>