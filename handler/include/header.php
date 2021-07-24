<?php 
    function headerImport($dirJump, $pathLogin){ 
        $dirHome = "";
        $dirPost = "";
        $dirAbout = "";
        $dirTeam = "";
        $dirLogo = "";
        $loadHeaderScript = "";

        for ($i=0; $i < $dirJump; $i++) { 
            $dirHome .= "../";
            $dirPost .= "../";
            $dirAbout .= "../";
            $dirTeam .= "../";
            $dirLogo .= "../";
            $loadHeaderScript .= "../";
        }

        $time = time();
        $dirHome .= "./";
        $dirPost .= "post.php";
        $dirAbout .= "webinfo/about.php";
        $dirTeam .= "webinfo/team.php";
        $dirLogo .= "src/kite.png";
        $loadHeaderScript .= "handler/script/headerButton.js?v={$time}";

        if($dirJump == 0) { 
            $dirPost = "./post.php";
        }

        echo "
        <header class =\"header slideFromTop\">
            
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

        <header class = \"header-mobile slideFromTop\" id=\"header-mobile\"> 
            <img class=\"logo-header-mobile\" src=\"{$dirLogo}\" alt=\"Let's API Logo\"> 

            <a href=\"{$pathLogin}\" class=\"push-Mleft\"><button class=\"login-mobile\">Login</button></a>

            <a class=\"toggle-button\" id=\"togglebtn\">
                <span class=\"bar\"></span>
                <span class=\"bar\"></span>
                <span class=\"bar\"></span>
                <span class=\"barText\">Menu</span>
            </a>
        </header>

        <header class = \"mobile-menu slidePush\" id=\"mobile-dropdown\">
            <ul class =\"list-inline-mobile\" id=\"dropdown-list\">
                <li class=\"list-inline-item-mobile\">
                    <div class=\"icon-with-text\">
                        <img src=\"https://img.icons8.com/material-outlined/20/000000/home--v2.png\"/>
                        <a href=\"{$dirHome}\">Home</a>
                    </div>
                </li>
                <li class=\"list-inline-item-mobile\">
                    <div class=\"icon-with-text\">
                        <img src=\"https://img.icons8.com/material-outlined/20/000000/news.png\"/>
                        <a href=\"{$dirPost}\">Posts</a>
                    </div>
                </li>
                <li class=\"list-inline-item-mobile\">
                    <div class=\"icon-with-text\">
                        <img src=\"https://img.icons8.com/material-outlined/20/000000/about.png\"/>
                        <a href=\"{$dirAbout}\">About</a>
                    </div>    
                
                </li>
                <li class=\"list-inline-item-mobile\">
                    <div class=\"icon-with-text\">
                        <img src=\"https://img.icons8.com/material-outlined/15/000000/user-group-man-woman.png\"/>
                        <a href=\"{$dirTeam}\">Team</a>
                    </div>
                </li>
            </ul>
        </header>

        
        <script src=\"{$loadHeaderScript}\"></script>
        ";
    }
?>