<!DOCTYPE html>
<html lang="en">

<head>
    <title>About - Let's API</title>
    <?php 
        include_once "../handler/include/meta.php";
        importMeta("webinfo/about.php", "../handler/css/style.css", "About, LetsAPI, Tools", "About section of Let's API.");
    ?>

</head>

<body class="background bulat1 bulat2">

    <?php 
        include_once "../handler/include/header.php";
        headerImport(1, "../pages/auth/login.php");
    ?>
    
    <h1 class="margin-top"></h1>
    <div class="content">
        <div class="container">
            
        </div>
    </div>

    <?php 
        include_once "../handler/include/footer.php";
        footerImport(1);
    ?>

</body>

</html>