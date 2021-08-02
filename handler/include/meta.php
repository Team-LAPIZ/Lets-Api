<?php 
function importMeta($path = "", $cssPath, $title, $keywords, $description) {
    $time = time();
    echo "
    <title>$title</title>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">

    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"title\" content=\"$title\">
    <meta name=\"description\" content=\"$description\">
    <meta name=\"keywords\" content=\"$keywords\">
    <meta name=\"author\" content=\"Team LAPIZ, teamlapiz.contact@gmail.com\">
    <meta name=\"language\" content=\"en\">

    <link rel=\"image_src\" href=\"/src/kite.png\">

    <meta property=\"dc:language\" content=\"en\">
    <meta property=\"dc:title\" content=\"$title\">
    <meta property=\"dc:description\" content=\"$description\">
    <meta property=\"dc:source\" content=\"https://www.letsapi.me/{$path}\">

    <meta name=\"og:type\" content=\"website\">
    <meta property=\"og:url\" content=\"https://www.letsapi.me/{$path}\">
    <meta property=\"og:title\" content=\"$title\">
    <meta property=\"og:description\" content=\"$description\">
    <meta property=\"og:image\" content=\"https://www.letsapi.me/src/kite.png\">
    <meta property=\"og:site_name\" content=\"letsapi\">

    <meta property=\"twitter:card\" content=\"summary_large_image\">
    <meta property=\"twitter:url\" content=\"https://www.letsapi.me/{$path}\">
    <meta property=\"twitter:title\" content=\"$title\">
    <meta property=\"twitter:description\" content=\"$description\">
    <meta property=\"twitter:image\" content=\"https://www.letsapi.me/src/kite.png\">

    <link rel=\"stylesheet\" href=\"{$cssPath}?v={$time}\">
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&display=swap\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css\">
";
    }
?>