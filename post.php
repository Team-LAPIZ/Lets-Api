<!DOCTYPE html>
<html lang="en">

<head>
    <title>Post - Let's API</title>
    <?php 
        include_once "handler/include/meta.php";
        importMeta("post.php", "handler/css/style.css", "Team, LetsAPI, Tools", "Post section of Let's API.");
    ?>

</head>

<body class="background bulat1 bulat2">

    <?php 
        include_once "handler/include/header.php";
        headerImport(0, "pages/auth/login.php");
    ?>
    
    <h1 class="gap-top"></h1>
    <div class="content">
        <div class="container">
            
        </div>
    </div>

    <?php 
        include_once "handler/include/footer.php";
        footerImport(0, "post.php");
    ?>

</body>

</html>