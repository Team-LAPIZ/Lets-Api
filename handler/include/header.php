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
        <header>
            <img class=\"logo\" src=\"{$dirLogo}\" alt=\"\">
            <nav>
                <ul>
                    <a href=\"{$dirHome}\">
                        <li>Home</li>
                    </a>
                    <a href=\"{$dirNews}\">
                        <li>News</li>
                    </a>
                    <a href=\"{$dirAbout}\">
                        <li>About</li>
                    </a>
                    <a href=\"{$dirTeam}\">
                        <li>Team</li>
                    </a>
                </ul>
            </nav>
            <div>
                <a href=\"{$pathLogin}\"><button class=\"login\">Login</button></a>
            </div>
        </header>
        ";
    }

?>