<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
        include_once $_SERVER['DOCUMENT_ROOT'] . "/handler/include/meta.php";
        importMeta("webinfo/privacypolicy.php", "Privacy Policy - Let's API",
        "Privacy Policy, LetsAPI, Tools", "Privacy Policy section of Let's API.");
    ?>
</head>

<body class="background bulat1 bulat2">

    <?php 
        include_once $_SERVER['DOCUMENT_ROOT'] . "/handler/include/header.php";
    ?>
    
    <h1 class="gap-top"></h1>
    <div class="content">
        <h1 class="margin-top">Privacy Policy</h1>
        <div class="p-container">
            <p class="p-justify">
                We only query the data that you inputted. We don't collect any data. The data queried are then used by each respective API to provide the services. You can check
                how they use your data by visiting their page linked at the footer. In the near future, we might also add ads to the site. And google as a third party might collect some
                data for their personalized ads if you opt in their personalized ads services. For now there isn't any ads yet in this site.
            </p>
        </div>
    </div>

    <?php 
        include_once $_SERVER['DOCUMENT_ROOT'] . "/handler/include/footer.php";
        footerImport("webinfo/privacypolicy.php");
    ?>

</body>

</html>