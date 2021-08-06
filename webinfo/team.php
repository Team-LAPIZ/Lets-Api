<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
        include_once $_SERVER['DOCUMENT_ROOT'] . "/handler/include/meta.php";
        importMeta("webinfo/team.php", "Team/Creator - Let's API",
        "Team, LetsAPI, Tools", "Team/Creator section of Let's API.");
    ?>
</head>

<body class="background bulat1 bulat2">

    <?php 
        include_once $_SERVER['DOCUMENT_ROOT'] . "/handler/include/header.php";
    ?>
    
    <h1 class="gap-top"></h1>
    <div class="content">
    <h1 class="margin-top">Our Team</h1>
        <div class="p-container">
            <p class="p-justify">
                <span class="height-unset">We are a team of developers and designers, we are still a student and we made this website as a way to improve our skills. Our team consists of:</span>
                <ol class="list-left height-unset">
                    <li ><b>Fauzan F A</b> <a href="https://github.com/Dadangdut33" target="_blank" rel="noreferrer noopener"><span class="icon ion-social-github"></span></a><br>
                        Usually goes by the name "Dadang". Work as both front end and back end.
                    </li>
                    <li><b>Azzamubaidillah</b> <a href="https://github.com/Azzamubaidillah" target="_blank" rel="noreferrer noopener"><span class="icon ion-social-github"></span></a><br>
                        Work mostly as front end developer. <b>Currently On Hiatus.</b>
                    </li>
                </ol>
            </p>
        </div>
    </div>

    <?php 
        include_once $_SERVER['DOCUMENT_ROOT'] . "/handler/include/footer.php";
        footerImport("webinfo/team.php");
    ?>

</body>

</html>