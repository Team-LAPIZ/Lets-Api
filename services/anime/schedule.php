<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
        include_once $_SERVER['DOCUMENT_ROOT'] . "/handler/include/meta.php";
        importMeta('services/anime/' . basename($_SERVER['PHP_SELF']), "Anime Weekly Schedule - Let's API", "Anime, Scraper, API, LetsAPI, Tools", 
        "Look up anime weekly schedule by using Jikan Rest API by Let's API, A website that utilize many API(s) and tools.");
    ?>
</head>

<body class="background bulat1 bulat2">
    <?php 
        include_once $_SERVER['DOCUMENT_ROOT'] . "/handler/include/header.php";
    ?>

    <div class="content">
        <div class="service-container">
            <h1>Weekly Schedule</h1>
        </div>

        <div class="anime-container weekly" id="container">
            <div class="days" id="monday">
                <h3 class="schedule-title">Monday</h3>
                <div class="schedule">
                    <?php require "./get/weekly.php";
                        monday();
                    ?>
                </div>
            </div>
            <div class="days" id="tuesday">
                <h3 class="schedule-title">Tuesday</h3>
                <div class="schedule">
                    <?php
                        tuesday();
                    ?>
                </div>
            </div>
            <div class="days" id="wednesday">
                <h3 class="schedule-title">Wednesday</h3>
                <div class="schedule">
                    <?php
                        wednesday();
                    ?>
                </div>
            </div>
            <div class="days" id="thursday">
                <h3 class="schedule-title">Thursday</h3>
                <div class="schedule">
                    <?php
                        thursday();
                    ?>
                </div>
            </div>
            <div class="days" id="friday">
                <h3 class="schedule-title">Friday</h3>
                <div class="schedule">
                    <?php
                        friday();
                    ?>
                </div>
            </div>
            <div class="days" id="saturday">
                <h3 class="schedule-title">Saturday</h3>
                <div class="schedule">
                    <?php
                        saturday();
                    ?>
                </div>
            </div>
            <div class="days" id="sunday">
                <h3 class="schedule-title">Sunday</h3>
                <div class="schedule">
                    <?php
                        sunday();
                    ?>
                </div>
            </div>
        </div>
    </div>

    <script>
        var mon = document.getElementById('monday');
        var tues = document.getElementById('tuesday');
        var wed = document.getElementById('wednesday');
        var thurs = document.getElementById('thursday');
        var fri = document.getElementById('friday');
        var sat = document.getElementById('saturday');
        var sun = document.getElementById('sunday');

        function setBorder(el) {
            el.style.borderTop = "1px solid #189AB4";
        }

        function removeBorder(el) {
            el.style.borderTop = "none";
        }

        window.onresize = function() { 
            if(getScreenWidth() < 826) {
                setBorder(mon); setBorder(tues); setBorder(wed);
                setBorder(thurs); setBorder(fri); setBorder(sat);
                setBorder(sun);
            } else {
                removeBorder(mon); removeBorder(tues); removeBorder(wed); 
                removeBorder(thurs); removeBorder(fri); removeBorder(sat);
                removeBorder(sun);
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