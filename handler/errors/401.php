<!DOCTYPE html>
<html lang="en">

<head>
    <title>401 - Unauthorized Let's API</title>
    <?php 
        include_once "../include/meta.php";
        importMeta("handler/errors/403.php", "../css/style.css","API, Forbidden, 404", "404 - Page Not Found. Let's API is A website that utilize many API(s) such as email verification, movies searching, anime, etc.");
    ?>

</head>

<body class="background bulat1 bulat2">

    <?php
        include_once "../include/header.php";
        headerImport(2, "../../pages/auth/login.php");
    ?>

    <h1 class="gap-top"></h1>
    <div class="content">
        <h1 class="margin-top">401 - Unauthorized</h1>
        <p>Sorry, your request could not be processed. You do not have the valid authentication credentials for the target resource.</p>
        <p><a class="link" href="../..">Go back to home</a></p>
    </div>

    <?php 
        include_once "../include/footer.php";
        footerImport(1, "handler/errors/404.php");
    ?>

</body>

</html>