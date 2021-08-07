<?php 
    $time = time();
    $dirHome = "/";
    $dirPost = "/post.php";
    $dirAbout = "/webinfo/about.php";
    $dirTeam = "/webinfo/team.php";
    $dirLogo = "/handler/img/kite.png";
    $dirLogoText = "/handler/img/logotext.png";
    $loadHeaderScript = "/handler/script/headerButton.js?v={$time}";
    echo "
        <div class=\"se-pre-con\"></div>
        <script src=\"/handler/script/flickity.pkgd.js\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js\" integrity=\"sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp\" crossorigin=\"anonymous\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js\" integrity=\"sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/\" crossorigin=\"anonymous\"></script>
        <header class =\"header slideFromTop\">
            
            <img class=\"logo-header\" src=\"{$dirLogo}\" alt=\"Let's API Logo\">

            <ul class =\"list-inline header-centering\">
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

            <div class=\"header-right-push\">
                <a href=\"{$dirHome}\"><img class=\"logo-text\" src=\"{$dirLogoText}\" alt=\"Let's API Text Logo\"></a>
            </div>
        </header>

        <header class = \"header-mobile slideFromTop\" id=\"header-mobile\"> 
            <img class=\"logo-header-mobile\" src=\"{$dirLogo}\" alt=\"Let's API Logo\"> 
            <img style=\"cursor: pointer;\" onclick=\"goHome()\" class=\"logo-text-mobile push-Mleft\" src=\"{$dirLogoText}\" alt=\"Let's API Text Logo\"> 

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

    // Load darkmode script
    echo "
        <script src=\"https://cdn.jsdelivr.net/npm/darkmode-js@1.5.7/lib/darkmode-js.min.js\"></script>
        <script>
            function addDarkmodeWidget() {
                const options = {
                    bottom: '16px', // default: '32px'
                    right: '16px', // default: '32px'
                    left: 'unset', // default: 'unset'
                    time: '0.5s', // default: '0.3s'
                    mixColor: '#1B1B1B', // default: '#fff'
                    backgroundColor: '#fff',  // default: '#fff'
                    buttonColorDark: '#fff',  // default: '#100f2c'
                    buttonColorLight: '#100f2c', // default: '#fff'
                    saveInCookies: true, // default: true,
                    label: '🌙', // default: ''
                    autoMatchOsTheme: false // default: true
                }
                
                const darkmode = new Darkmode(options);
                darkmode.showWidget();
            }
            window.addEventListener('load', addDarkmodeWidget);
        </script>
    ";
?>