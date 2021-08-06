<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
        include_once $_SERVER['DOCUMENT_ROOT'] . "/handler/include/meta.php";
        importMeta("pages/movie/search.php","Browse Movie - Let's API",
        "Movie, API, LetsAPI, Tools", "Movie Searching by Let's API, A website that utilize many API(s)");
    ?>
</head>

<body class="background bulat1 bulat2">

    <?php 
        include_once $_SERVER['DOCUMENT_ROOT'] . "/handler/include/header.php";
    ?>
    <div class="content">
        <div class="service-container">
            <h1>Search Movie</h1>
            <form method="post">
                <div class="wrapper">
                    <input class="service-container-search" placeholder="Search Movie Here..." type="text" required>
                    <button class="button">Search</button>
                </div>
            </form>
        </div>

        <div class="movie-section">
            <div class="movie-wrapper">
                <img class="poster" src="handler/img/cap.jpg" alt="poster movie">
                <div class="movie-text-wrapper">
                    <h4 class="judul">
                        Captain America: The First Avenger (2011)
                    </h4>
                    <p class="sinopsis">
                        During World War II, Steve Rogers is a sickly man from Brooklyn who's transformed into
                        super-soldier
                        Captain America to aid in the war effort. Rogers must stop the Red Skull – Adolf Hitler's
                    </p>
                    <p class="genre">
                        Action, Adventure, Science Fiction <br> 2h 4m
                    </p>
                </div>
            </div>

            <div class="movie-wrapper">
                <img class="poster" src="handler/img/cap.jpg" alt="poster movie">
                <div class="movie-text-wrapper">
                    <h4 class="judul">
                        Captain America: The First Avenger (2011)
                    </h4>
                    <p class="sinopsis">
                        During World War II, Steve Rogers is a sickly man from Brooklyn who's transformed into
                        super-soldier
                        Captain America to aid in the war effort. Rogers must stop the Red Skull – Adolf Hitler's
                    </p>
                    <p class="genre">
                        Action, Adventure, Science Fiction <br> 2h 4m
                    </p>
                </div>
            </div>

            <div class="movie-wrapper">
                <img class="poster" src="handler/img/cap.jpg" alt="poster movie">
                <div class="movie-text-wrapper">
                    <h4 class="judul">
                        Captain America: The First Avenger (2011)
                    </h4>
                    <p class="sinopsis">
                        During World War II, Steve Rogers is a sickly man from Brooklyn who's transformed into
                        super-soldier
                        Captain America to aid in the war effort. Rogers must stop the Red Skull – Adolf Hitler's
                    </p>
                    <p class="genre">
                        Action, Adventure, Science Fiction <br> 2h 4m
                    </p>
                </div>
            </div>

            <div class="movie-wrapper">
                <img class="poster" src="handler/img/cap.jpg" alt="poster movie">
                <div class="movie-text-wrapper">
                    <h4 class="judul">
                        Captain America: The First Avenger (2011)
                    </h4>
                    <p class="sinopsis">
                        During World War II, Steve Rogers is a sickly man from Brooklyn who's transformed into
                        super-soldier
                        Captain America to aid in the war effort. Rogers must stop the Red Skull – Adolf Hitler's
                    </p>
                    <p class="genre">
                        Action, Adventure, Science Fiction <br> 2h 4m
                    </p>
                </div>
            </div>
        </div>
    </div>

    <?php 
        include_once $_SERVER['DOCUMENT_ROOT'] . "/handler/include/footer.php";
        footerImport("pages/movie/search.php");
    ?>

</body>

</html>