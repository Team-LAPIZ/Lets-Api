<?php $desc = "
Added a qr code maker
"?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
        $current_file_name = str_replace("_", " ", substr(basename($_SERVER['PHP_SELF']), 0, -4));
        include_once "../handler/include/meta.php";
        importMeta('posts/' . basename($_SERVER['PHP_SELF']), $current_file_name, "Posts, LetsAPI, News", trim($desc));
    ?>

</head>

<body class="background bulat1 bulat2">

    <?php 
        include_once "../handler/include/header.php";
    ?>
    
    <h1 class="gap-top"></h1>
    <div class="content">
    <a href="../post.php"><img class="back-arrow" src="/handler/img/arrow.png" alt="back"> <span class="link-back">Go back to posts</span></a>
        <h1 class="margin-top post-title">Added a qr code maker</h1>
        <div class="post-info">
            Posted by Dadangdut33 at 2021-8-15 | <a href="#disqus_thread" class="disqus-comment-count" data-disqus-url="http//letsapi.me/posts/<?php echo substr(basename($_SERVER['PHP_SELF']), 0, -4)?>" data-disqus-identifier="posts/<?php echo substr(basename($_SERVER['PHP_SELF']), 0, -4)?>">0 Comment</a>
        </div>
        <div class="p-container">
            <p class="p-justify">
                I have added qr code maker to the site. There are also some improvement on the anime page.
                The qr code feature is made possible by using API from <a class="link-subtle" href="https://goqr.me/api/" target="_blank" rel="noreferrer noopener">Goqr API</a>. 
                You can check their docummentation <a class="link-subtle" href="https://goqr.me/api/doc/" target="_blank" rel="noreferrer noopener">here.</a>
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
        footerImport('posts/' . basename($_SERVER['PHP_SELF']));
    ?>

</body>

</html>