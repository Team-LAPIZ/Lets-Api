<!DOCTYPE html>
<html lang="en">

<head>
    <title>Feedback - Let's API</title>
    <?php 
        include_once "../handler/include/meta.php";
        importMeta("webinfo/about.php", "../handler/css/style.css", "Feedback, LetsAPI, Tools", "Feedback section of Let's API.");
    ?>

</head>

<body class="background bulat1 bulat2">

    <?php 
        include_once "../handler/include/header.php";
        headerImport(1, "../pages/auth/login.php");
    ?>
    
    <h1 class="gap-top"></h1>
    <div class="content">
    <a href="../post.php"><img class="back-arrow" src="../src/arrow.png" alt="back"> Go back to posts</a>
        <h1 class="margin-top post-title">Feedback for the website</h1>
        <div class="post-info">
            Posted by Team-LAPIZ | <a href="#disqus_thread" class="disqus-comment-count" data-disqus-url="http//letsapi.me/posts/feedbacks" data-disqus-identifier="posts/feedbacks">0 comment</a>
        </div>
        <div class="p-container">
            <p class="p-justify">
                Please post your feedback here, we really appreciate your comment and feedback.
            </p>
        </div>
        <div class="p-container p-gap">
            <?php 
                include_once "../handler/include/disqus.php";
                disqus_thread( "http://letsapi.me/posts/feedbacks", "posts/feedbacks");
            ?>
        </div>
    </div>

    <script id="dsq-count-scr" src="//letsapi.disqus.com/count.js" async></script>
    
    <?php
        include_once "../handler/include/footer.php";
        footerImport(1, "webinfo/about.php");
    ?>
</body>

</html>