<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
        include_once $_SERVER['DOCUMENT_ROOT'] . "/handler/include/meta.php";
        importMeta("webinfo/faq.php", "FAQ - Let's API",
        "FAQ, LetsAPI, Tools", "FAQ section of Let's API.");
    ?>
</head>

<body class="background bulat1 bulat2">

    <?php 
        include_once $_SERVER['DOCUMENT_ROOT'] . "/handler/include/header.php";
    ?>
    
    <h1 class="gap-top"></h1>
    <div class="content">
        <h1 class="margin-top">FAQ</h1>
        <div class="p-container">
            <p class="p-justify">
                <b>Q : What is Let's API (this site) ?</b><br>
                <b>A : </b>It's a website that we <a class="link-subtle" href="./team.php" target="_blank" rel="noreferrer noopener">(Team Lapiz)</a> created to improve our skills as we are still learning as an IT student.<br>
                <b>Q : Is this site safe?</b><br>
                <b>A : </b>This site is 100% safe. As far as we know, the API that we use in this site is trusted and safe so don't worry. The data that you inputted are only use for query, you can check how it's used by the api itself
                by checking the website of the API that we use. We linked it in the footer of each service.<br>
                <b>Q : Is this site legit?</b><br>
                <b>A : </b>Some of you must have thought <i>"Bro this site looks sketchy af"</i>. But don't worry it's legit and safe.<br>
                <b>Q : How do we know that it's safe?</b><br>
                <b>A : </b>This web is completely open source. You can take a look at our codes if you are still not convinced.<br>
                <b>Q : Is this site only using API as its main service?</b><br>
                <b>A : </b>No, there is also stuff like web scraping and script that we use for our services.<br>
                <b>Q : Can we request or contribute a feature?</b><br>
                <b>A : </b>Yes you can, this web is open source we allow pull request from you guys. You can check out our github and do a pull request there or 
                you can just post your request on the feature request comment in the posts section. You can also contact us by using the email linked in the <a class="link-subtle" href="#footer">footer</a> below, our github is also located there.
            </p>
        </div>
    </div>

    <?php 
        include_once $_SERVER['DOCUMENT_ROOT'] . "/handler/include/footer.php";
        footerImport("webinfo/faq.php");
    ?>

</body>

</html>