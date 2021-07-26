<!DOCTYPE html>
<html lang="en">

<head>
    <title>403 - Forbidden Let's API</title>
    <?php 
        include_once "../include/meta.php";
        importMeta("handler/errors/403.php", "../css/style.css","API, Forbidden, 403", "403 - FORBIDDEN. Let's API is A website that utilize many API(s) such as email verification, movies searching, anime, etc.");
    ?>
</head>

<body class="background bulat1 bulat2">

    <?php 
        include_once "../include/header.php";
        headerImport(2, "../../pages/auth/login.php");
    ?>

    <h1 class="gap-top"></h1>
    <div class="content">
        <h1 class="margin-top">403 - Forbidden</h1>
        <p>You don't have permission to access this resource.</p>
        <p><a class="link" href="../..">Go back to home</a></p>
    </div>
    
    <?php 
        include_once "../include/footer.php";
        footerImport(1, "handler/errors/403.php");
    ?>
</body>

</html>