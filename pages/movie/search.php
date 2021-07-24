<!DOCTYPE html>
<html lang="en">

<head>
    <title>Browse Movie - Let's API'</title>
    <?php 
        include_once "../../handler/include/meta.php";
        importMeta("pages/movie/search.php", "../../handler/css/style.css", "Movie, API, LetsAPI, Tools", "Movie Searching by Let's API, A website that utilize many API(s)");
    ?>

</head>

<body class="background bulat1 bulat2">

    <?php 
        include_once "../../handler/include/header.php";
        headerImport(2, "../auth/login.php");
    ?>
    <div class="content">
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
                <img class="poster" src="../../src/cap.jpg" alt="poster movie">
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
                <img class="poster" src="../../src/cap.jpg" alt="poster movie">
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
                <img class="poster" src="../../src/cap.jpg" alt="poster movie">
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
        include_once "../../handler/include/footer.php";
        footerImport(2, "pages/movie/search.php");
    ?>

</body>

</html>