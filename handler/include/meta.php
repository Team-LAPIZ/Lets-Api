<?php 
    function importMeta($path = "", $cssPath, $keywords, $description) {
        $time = time();
        echo "

    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">

    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"$description\">
    <meta name=\"keywords\" content=\"$keywords\">
    <meta name=\"author\" content=\"Team LAPIZ\">
    <meta name=\"language\" content=\"en\">
    
    <meta property=\"og:title\" content=\"Let's API\">
    <meta property=\"og:type\" content=\"website\">
    <meta property=\"og:site_name\" content=\"letsapi.me\">
    <meta property=\"og:image\" content=\"https://letsapi.me/src/kite.png\">
    <meta property=\"og:url\" content=\"https://letsapi.me/{$path}\">
    <meta property=\"og:description\" content=\"$description\">

    <link rel=\"stylesheet\" href=\"{$cssPath}?v={$time}\">
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&display=swap\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css\">
        ";
    }
?>