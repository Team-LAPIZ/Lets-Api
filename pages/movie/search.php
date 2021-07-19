<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <title>Browse Movie</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Movie Searching by Let's API, A website that utilize many API(s)'">
    <meta name="keywords" content="Movie, API">
    <meta name="author" content="Team LAPIZ">
    <meta name="language" content="en">

    <meta property="og:title" content="Browse Movie">
    <meta property="og:description" content="Movie Searching by Let's API, A website that utilize many API(s)">
    <meta property="og:type" content="website">

    <link rel="stylesheet" href="../../handler/css/style.css?v=<? echo time(); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    
</head>

<?php include "../../handler/include/forceDesktop.php"?>

<body class="background bulat1 bulat2">

    <?php 
        include_once "../../handler/include/header.php";
        headerImport(2, "../auth/login.php");
    ?>

    <div class="search-container">
        <h1>Search Movie</h1>
        <form method="post">
            <div class="wrapper">
                <input class="search" placeholder="Search Movie Here..." type="text" required>
                <button class="button">Search</button>
            </div>
        </form>
    </div>

    <div class="movie-section">
        <div class="movie-wrapper">
            <img class="poster" src="../../src/cap.jpg" alt="poster movie">
            <div class="movie-text-wrapper">
                <h4 class="judul">
                    Captain America: The First Avenger (2011)
                </h4>
                <p class="sinopsis">
                    During World War II, Steve Rogers is a sickly man from Brooklyn who's transformed into super-soldier
                    Captain America to aid in the war effort. Rogers must stop the Red Skull – Adolf Hitler's
                </p>
                <p class="genre">
                    Action, Adventure, Science Fiction <br> 2h 4m
                </p>
            </div>
        </div>

        <div class="movie-wrapper">
            <img class="poster" src="../../src/cap.jpg" alt="poster movie">
            <div class="movie-text-wrapper">
                <h4 class="judul">
                    Captain America: The First Avenger (2011)
                </h4>
                <p class="sinopsis">
                    During World War II, Steve Rogers is a sickly man from Brooklyn who's transformed into super-soldier
                    Captain America to aid in the war effort. Rogers must stop the Red Skull – Adolf Hitler's
                </p>
                <p class="genre">
                    Action, Adventure, Science Fiction <br> 2h 4m
                </p>
            </div>
        </div>

        <div class="movie-wrapper">
            <img class="poster" src="../../src/cap.jpg" alt="poster movie">
            <div class="movie-text-wrapper">
                <h4 class="judul">
                    Captain America: The First Avenger (2011)
                </h4>
                <p class="sinopsis">
                    During World War II, Steve Rogers is a sickly man from Brooklyn who's transformed into super-soldier
                    Captain America to aid in the war effort. Rogers must stop the Red Skull – Adolf Hitler's
                </p>
                <p class="genre">
                    Action, Adventure, Science Fiction <br> 2h 4m
                </p>
            </div>
        </div>

        <div class="movie-wrapper">
            <img class="poster" src="../../src/cap.jpg" alt="poster movie">
            <div class="movie-text-wrapper">
                <h4 class="judul">
                    Captain America: The First Avenger (2011)
                </h4>
                <p class="sinopsis">
                    During World War II, Steve Rogers is a sickly man from Brooklyn who's transformed into super-soldier
                    Captain America to aid in the war effort. Rogers must stop the Red Skull – Adolf Hitler's
                </p>
                <p class="genre">
                    Action, Adventure, Science Fiction <br> 2h 4m
                </p>
            </div>
        </div>
    </div>

    <?php 
        include_once "../../handler/include/footer.php";
        footerImport(2);
    ?>

</body>

</html>