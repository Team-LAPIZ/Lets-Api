<?php 
    function headerImport($dirJump, $pathLogin){ 
        $dirHome = "";
        $dirNews = "";
        $dirAbout = "";
        $dirTeam = "";
        $dirLogo = "";
        for ($i=0; $i < $dirJump; $i++) { 
            $dirHome .= "../";
            $dirNews .= "../";
            $dirAbout .= "../";
            $dirTeam .= "../";
            $dirLogo .= "../";
        }

        $dirHome .= "./";
        $dirNews .= "webinfo/news.php";
        $dirAbout .= "webinfo/about.php";
        $dirTeam .= "webinfo/team.php";
        $dirLogo .= "src/kite.png";

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
          
            <div>
                <a href=\"{$pathLogin}\"><button class=\"login\">Login</button></a>
            </div>
        </header>
        ";
    }

?>