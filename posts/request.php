<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
        include_once "../handler/include/meta.php";
        importMeta('posts/' . basename($_SERVER['PHP_SELF']), "Feature Request - Let's API",
        "Request, LetsAPI, Tools", "Feature request section of Let's API.");
    ?>
</head>

<body class="background bulat1 bulat2">

    <?php 
        include_once "../handler/include/header.php";
    ?>
    
    <h1 class="gap-top"></h1>
    <div class="content">
    <a href="../post.php"><img class="back-arrow" src="/handler/img/arrow.png" alt="back"> <span class="link-back">Go back to posts</span></a>
        <h1 class="margin-top post-title">Feedback for the website</h1>
        <div class="post-info">
            Posted by Team-LAPIZ | <a href="#disqus_thread" class="disqus-comment-count" data-disqus-url="http//letsapi.me/posts/request" data-disqus-identifier="posts/request">0 comment</a>
        </div>
        <div class="p-container">
            <p class="p-justify">
                You can post feature request here. You can also contribute directly by doing a pull request on github. Feel free to post your request, if we can do it, we might
                put it to the website.
            </p>
        </div>
        <div class="p-container p-gap">
            <?php 
                include_once "../handler/include/disqus.php";
                disqus_thread("http://letsapi.me/posts/request", "posts/request");
            ?>
        </div>
    </div>

    <script id="dsq-count-scr" src="//letsapi.disqus.com/count.js" async></script>
    
    <?php
        include_once "../handler/include/footer.php";
        footerImport('posts/' . basename($_SERVER['PHP_SELF']));
    ?>
</body>

</html>