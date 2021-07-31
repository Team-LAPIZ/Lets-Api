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

    <?php // functions for this file
        function getPostAmount(){
            $amount = 0; 
            foreach(glob('posts/*.*', GLOB_BRACE) as $posts) { 
                if(preg_match("/\d{4}-\d{2}-\d{2}/", $posts) == 1) {
                    $amount++;
                }
            }
            $sufix = 'posts';
            if($amount == 0 || 1) { 
                $sufix = 'post';
            } 
            echo $amount . ' ' . $sufix;
        }

        function getPosts(){
            // Loop through the file in folder posts, reversed the array so new post is top, match only the correct format of posts
            foreach(array_reverse(glob('posts/*.*', GLOB_BRACE)) as $thePosts) {
                if(preg_match("/\d{4}-\d{2}-\d{2}/", $thePosts) == 1) {
                    $title = str_replace("_", " ", substr(substr($thePosts, 0, -4) , 6));
                    $fullFile = file($thePosts);
                    $desc = $fullFile[1];
                    echo "
                    <a href=\"$thePosts\"><li class =\"post-li\">
                        <div class=\"underline-border height-1-0\">$title</div>
                        <div class=\"small-font height-smaller\">$desc</div> 
                    </li></a>
                    ";

                }
            }
        }
    ?>

    <h1 class="gap-top"></h1>
    <div class="content">
        <h1 class="margin-top">Posts</h1>
        <div class="p-container">
            <h4 class="post-linking">
                Website Posts
                <div class="left-auto">
                    <?php 
                        getPostAmount();
                    ?>
                </div>
            </h4>
            <ul class="post-ul height-unset post-site">
                <?php getPosts();?>
            </ul>
        </div>
        <div class="p-container">
        <h4 class="post-linking">Feedback and Suggestions</h4>
            <ul class="post-ul height-unset">
                <a href="posts/feedbacks.php"><li class ="post-li">
                    <div class="underline-border height-1-0">Feedback</div>
                    <div class="small-font height-smaller">You can submit your feedback of this site by commenting on this post page. Alternatively you can contact us by using the email in the footer.</div> 
                </li></a>
                <a href="posts/request.php"><li class ="post-li">
                    <div class="underline-border height-1-0">Feature Request</div>
                    <div class="small-font height-smaller">You can submit your feature request by commenting on this post page.</div> 
                </li></a>
            </ul>
        </div>
    </div>

    <?php 
        include_once "handler/include/footer.php";
        footerImport(0, "post.php");
    ?>

</body>

</html>