<?php 
    function headerImport($dirJump, $pathLogin){ 
        $dirHome = "";
        $dirNews = "";
        $dirAbout = "";
        $dirTeam = "";
        $dirLogo = "";
        $loadScript = "";

        for ($i=0; $i < $dirJump; $i++) { 
            $dirHome .= "../";
            $dirNews .= "../";
            $dirAbout .= "../";
            $dirTeam .= "../";
            $dirLogo .= "../";
            $loadScript .= "../";
        }

        $time = time();
        $dirHome .= "./";
        $dirNews .= "webinfo/news.php";
        $dirAbout .= "webinfo/about.php";
        $dirTeam .= "webinfo/team.php";
        $dirLogo .= "src/kite.png";
        $loadScript .= "handler/script/headerButton.js";
        $loadScript .= "?v={$time}";

        echo "
        <header class =\"header\">
            
            <img class=\"logo-header\" src=\"{$dirLogo}\" alt=\"Let's API Logo\">

            <ul class =\"list-inline\">
                <li class=\"list-inline-item\">
                    <a href=\"{$dirHome}\">Home</a>
                </li>
                <li class=\"list-inline-item\">
                    <a href=\"{$dirNews}\">News</a>
                </li>
                <li class=\"list-inline-item\">
                    <a href=\"{$dirAbout}\">About</a>
                </li>
                <li class=\"list-inline-item\">
                    <a href=\"{$dirTeam}\">Team</a>
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
            <ul class =\"list-inline-mobile\">
                <li class=\"list-inline-item-mobile\">
                    <a href=\"{$dirHome}\">Home</a>
                </li>
                <li class=\"list-inline-item-mobile push-Mleft-little\">
                    <a href=\"{$dirNews}\">News</a>
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