<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>404 - Page Not Found Let's API</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="404 - Page Not Found. Let's API is A website that utilize many API(s) such as email verification, movies searching, anime, etc.">
    <meta name="keywords" content="API, Forbidden, 403">
    <meta name="author" content="Team LAPIZ">
    <meta name="language" content="en">

    <meta property="og:title" content="Let's API">
    <meta property="og:description" content="404 - Page Not Found. Let's API is A website that utilize many API(s) such as email verification, movies searching, anime, etc.">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="letsapi.infinityfreeapp.com">
    <meta property="og:image" content="https://letsapi.infinityfreeapp.com/src/kite.png">
    <meta property="og:url" content="https://letsapi.infinityfreeapp.com/">

    <link rel="stylesheet" href="../css/style.css?v=<? echo time(); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
</head>

<?php include "../include/forceDesktop.php"?>

<body class="background bulat1 bulat2">

    <?php
        include_once "../include/header.php";
        headerImport(2, "../../pages/auth/login.php");
    ?>

    <div class="content">
        <h1 class="margin-top">404 - Page Not Found</h1>
        <p>The page you were looking for could not be found! If you entered the URL manually, please double check what you’ve entered.</p>
        <p><a class="link" href="../..">Go back to home</a></p>
    </div>

    <?php 
        include_once "../include/footer.php";
        footerImport(1);
    ?>

</body>

</html>