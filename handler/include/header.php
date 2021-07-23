<?php 
    function headerImport($dirJump, $pathLogin, $mode = 0){ 
        $dirHome = "";
        $dirPost = "";
        $dirAbout = "";
        $dirTeam = "";
        $dirLogo = "";
        $loadScript = "";

        for ($i=0; $i < $dirJump; $i++) { 
            $dirHome .= "../";
            $dirPost .= "../";
            $dirAbout .= "../";
            $dirTeam .= "../";
            $dirLogo .= "../";
            $loadScript .= "../";
        }

        $time = time();
        $dirHome .= "./";
        $dirPost .= "post.php";
        $dirAbout .= "webinfo/about.php";
        $dirTeam .= "webinfo/team.php";
        $dirLogo .= "src/kite.png";
        $loadScript .= "handler/script/headerButton.js";
        $loadScript .= "?v={$time}";

        if($dirJump == 0) { 
            $dirPost = "./post.php";
        }

        echo "
        <header class =\"header\">
            
            <img class=\"logo-header\" src=\"{$dirLogo}\" alt=\"Let's API Logo\">

            <ul class =\"list-inline\">
                <li class=\"list-inline-item\">
                    <div class=\"icon-with-text\">
                        <a href=\"{$dirHome}\" onmouseover=\"fadeInBorder(this)\" onmouseout=\"fadeOutBorder(this)\">
                            <img src=\"https://img.icons8.com/material-outlined/20/000000/home--v2.png\"/>Home
                        </a>
                    </div>
                </li>
                <li class=\"list-inline-item\">
                    <div class=\"icon-with-text\">
                        <a href=\"{$dirPost}\" onmouseover=\"fadeInBorder(this)\" onmouseout=\"fadeOutBorder(this)\">
                            <img src=\"https://img.icons8.com/material-outlined/20/000000/news.png\"/>Posts
                        </a>
                    </div>
                </li>
                <li class=\"list-inline-item\">
                    <div class=\"icon-with-text\">    
                        <a href=\"{$dirAbout}\" onmouseover=\"fadeInBorder(this)\" onmouseout=\"fadeOutBorder(this)\">
                            <img src=\"https://img.icons8.com/material-outlined/20/000000/about.png\"/>About
                        </a>
                    </div>
                </li>
                <li class=\"list-inline-item\">
                    <div class=\"icon-with-text\">
                        <a href=\"{$dirTeam}\" onmouseover=\"fadeInBorder(this)\" onmouseout=\"fadeOutBorder(this)\">
                            <img src=\"https://img.icons8.com/material-outlined/20/000000/user-group-man-woman.png\"/>Team
                        </a>
                    </div>
                </li>
            </ul>

            <div class=\"login-push\">
                <a href=\"{$pathLogin}\"><button class=\"login\">Login</button></a>
            </div>
        </header>

        <header class = \"header-mobile\" id=\"header-mobile\"> 
            <img class=\"logo-header-mobile\" src=\"{$dirLogo}\" alt=\"Let's API Logo\"> 

            <a href=\"{$pathLogin}\" class=\"push-Mleft\"><button class=\"login-mobile\">Login</button></a>

            <a class=\"toggle-button\" id=\"togglebtn\">
                <span class=\"bar\"></span>
                <span class=\"bar\"></span>
                <span class=\"bar\"></span>
                <span class=\"barText\">Menu</span>
            </a>
        </header>

        <header class = \"mobile-menu\" id=\"mobile-dropdown\">
            <ul class =\"list-inline-mobile\" id=\"dropdown-list\">
                <li class=\"list-inline-item-mobile\">
                    <a href=\"{$dirHome}\">Home</a>
                </li>
                <li class=\"list-inline-item-mobile push-Mleft-little\">
                    <a href=\"{$dirPost}\">Posts</a>
                </li>
                <li class=\"list-inline-item-mobile push-Mleft-little\">
                    <a href=\"{$dirAbout}\">About</a>
                </li>
                <li class=\"list-inline-item-mobile push-Mleft-little\">
                    <a href=\"{$dirTeam}\">Team</a>
                </li>
            </ul>
        </header>

        
        <script src=\"{$loadScript}\"></script>
        ";
    }
?>