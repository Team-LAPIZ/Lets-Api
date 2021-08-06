<?php $desc = "
Welcome to Letsapi! Our first posts.
"?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
        $current_file_name = str_replace("_", " ", substr(basename($_SERVER['PHP_SELF']), 0, -4));
        include_once "../handler/include/meta.php";
        importMeta("webinfo/about.php", $current_file_name, "Posts, LetsAPI, News", trim($desc));
    ?>

</head>

<body class="background bulat1 bulat2">

    <?php 
        include_once "../handler/include/header.php";
    ?>
    
    <h1 class="gap-top"></h1>
    <div class="content">
    <a href="../post.php"><img class="back-arrow" src="/handler/img/arrow.png" alt="back"> Go back to posts</a>
        <h1 class="margin-top post-title">First Post</h1>
        <div class="post-info">
            Posted by Dadangdut33 at 2021-7-31 | <a href="#disqus_thread" class="disqus-comment-count" data-disqus-url="http//letsapi.me/posts/<?php echo substr(basename($_SERVER['PHP_SELF']), 0, -4)?>" data-disqus-identifier="posts/<?php echo substr(basename($_SERVER['PHP_SELF']), 0, -4)?>">0 Comment</a>
        </div>
        <div class="p-container">
            <p class="p-justify">
                Welcome to our website "LetsAPI", This website was made as a way to improve our skill as a student, in the near future as we are learning we hope to bring more
                feature to this site so this site can be more useful than ever. This might just be a simple post, but it marks the beginning of a journey.
            </p>
        </div>
        <div class="p-container p-gap">
            <?php 
                $current_file_name = substr(basename($_SERVER['PHP_SELF']), 0, -4);
                include_once "../handler/include/disqus.php";
                disqus_thread( "http://letsapi.me/posts/$current_file_name", "posts/$current_file_name");
            ?>
        </div>
    </div>

    <?php
        include_once "../handler/include/footer.php";
        footerImport("webinfo/about.php");
    ?>

</body>

</html>