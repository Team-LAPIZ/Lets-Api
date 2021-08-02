<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
        include_once "../handler/include/meta.php";
        importMeta("webinfo/service.php", "../handler/css/style.css", "Services - Let's API",
        "Service, LetsAPI, Tools", "Service section of Let's API.");
    ?>
</head>

<body class="background bulat1 bulat2">

    <?php 
        include_once "../handler/include/header.php";
        headerImport(1, "../pages/auth/login.php");
    ?>
    
    <h1 class="gap-top"></h1>
    <div class="content">
    <h1 class="margin-top">Our Services/Features</h1>
        <div class="p-container">
            <p class="p-justify bordered-bottom">
                This site is more of a learning zone <i>for now</i>, so our services that are provided using api are all using the free version 
                and it might not work sometimes because of the limit provided. We would really appreciate it if you do not abuse that free quota xD. Other than API we also
                provided services that only uses script.<br>
            </p>
            <span class="height-smaller">So far the services that we have provided are:</span>
            <ol class="list-left">
                <li>Movie search, using tmdbapi</li>
                <li>Anime search, using malscrapper</li>
                <li>Anime recommendation, using malscrapper</li>
                <li>Email Verification, using <a class="link-subtle" href="https://www.abstractapi.com/" target="_blank" rel="noreferrer noopener">Abstractapi</a></li>
                <li>More to come...</li>
            </ol>
        </div>
    </div>

    <?php 
        include_once "../handler/include/footer.php";
        footerImport(1, "webinfo/service.php");
    ?>

</body>

</html>