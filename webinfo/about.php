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
    
    <h1 class="gap-top"></h1>
    <div class="content">
        <h1 class="margin-top">About This Website</h1>
        <div class="p-container">
            <p class="p-justify">
                <b>Let's API</b> is a tool website that utilize many APIs. The aim of this website is to help people by providing an easy to use tools by using public APIs hence the name
                let'sapi. Though, the tools that this website provide does not only come from APIs, there are some tools that is only script like web scraping and stuff. This website will
                keep growing as we grow so you can expect more feature along the way. We also provide feature request that can be posted in the <a class="link-subtle" href="../post.php">posts</a> section.
            </p>
            <p class="p-justify">
                This website is made by <b>Team Lapiz</b> mainly just for fun and learning. We created this website as a way to test and improve our ability as a student.
                We wanted to know how it feels to build a website from scratch and maintain it <i>aka</i> become a web developer.
            </p>
            <p class="p-justify">
                The data that you enter in this website is not in any way saved by us, we only do query of the data. The data queried is processed by each API and then displayed on the website.
                For how the data is used on the API you can check on their website linked on the footer of each tools. Also, the entire code of this website (except the key code for the API call)
                is <b>open source (open to public)</b> and can be found <a class="link-subtle" href="https://github.com/Team-LAPIZ/Lets-Api/"
                target="_blank" rel="noreferrer noopener">on our github</a> which is also linked in the <a class="link-subtle" href="#footer">footer</a> below.
            </p>
        </div>
    </div>

    <?php
        include_once "../handler/include/footer.php";
        footerImport(1, "webinfo/about.php");
    ?>

</body>

</html>