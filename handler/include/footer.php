<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

<?php 
    function footerImport($dirJump){
        $dirService = "";
        $dirPrivacyPolicy = "";
        for ($i=0; $i < $dirJump; $i++) { 
            $dirService .= "../";
            $dirPrivacyPolicy .= "../";
        }

        $dirService .= "webinfo/about.php";
        $dirPrivacyPolicy .= "webinfo/privacypolicy.php";

        echo "
        <footer class=\"footer-basic\">
            <div class=\"social\">
                <a href=\"https://github.com/Team-LAPIZ\" target=\"_blank\" rel=\"noreferrer noopener\">
                    <i class=\"icon ion-social-github\"></i>
                </a>
                <a href=\"https://twitter.com/teamlapiz_\" target=\"_blank\" rel=\"noreferrer noopener\">
                    <i class=\"icon ion-social-twitter\"></i>
                </a>
                <a href=\"mailto:teamlapiz.contact@gmail.com\" target=\"_blank\" rel=\"noreferrer noopener\">
                    <i class=\"icon ion-email\"></i>
                </a>
            </div>
    
            <div class=\"list-inline\">
                <li class=\"list-inline-item\"><a href=\"https://github.com/Team-LAPIZ/Lets-Api\" target=\"_blank\" rel=\"noreferrer noopener\">Source Code</a></li>
                <li class=\"list-inline-item\"><a href=\"{$dirService}\">Services</a></li>
                <li class=\"list-inline-item\"><a href=\"{$dirPrivacyPolicy}\">Privacy Policy</a></li>
            </div>
            <p class=\"copyright\">Team LAPIZ © 2021 - Hosted on <a class=\"footerlink\" href=\"http://infinityfree.net\" target=\"_blank\" rel=\"noreferrer noopener\">InfinityFree.net</a>.</p>
        </footer>
        ";
    }
?>