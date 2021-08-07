<?php 
function importMeta($path = "", $title, $keywords, $description) {
    $time = time();
    $thePath = '/' . $path;
    if($path == "") {
        $thePath = "";
    }

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

    <link rel=\"image_src\" href=\"/src/logotext.png\">

    <meta itemprop=\"name\" content=\"$title\">
    <meta itemprop=\"description\" content=\"$description\">
    <meta itemprop=\"image\" content=\"https://letsapi.me/handler/img/logotext.png\">

    <meta property=\"og:url\" content=\"https://www.letsapi.me{$thePath}\" />
    <meta property=\"og:type\" content=\"website\" />
    <meta property=\"og:title\" content=\"$title\" />
    <meta property=\"og:description\" content=\"$description\" />
    <meta property=\"og:image\" content=\"https://www.letsapi.me/handler/img/logotext.png\" />
    <meta property=\"og:site_name\" content=\"letsapi\" />
    <meta property=\"og:locale\" content=\"en_US\" />

    <meta property=\"twitter:card\" content=\"summary_large_image\">
    <meta property=\"twitter:title\" content=\"$title\">
    <meta property=\"twitter:description\" content=\"$description\">
    <meta property=\"twitter:image\" content=\"https://www.letsapi.me/handler/img/logotext.png\">
    <meta property=\"twitter:url\" content=\"https://www.letsapi.me{$thePath}\">

    <link rel=\"stylesheet\" href=\"/handler/css/bootstrap.5.1.0.mod_tooltips.css?v={$time}\">
    <link rel=\"stylesheet\" href=\"/handler/css/style.css?v={$time}\">
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&display=swap\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css\">
    <link rel=\"stylesheet\" href=\"/handler/css/flickity.css\" media=\"screen\">
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.3.1/css/all.css\" integrity=\"sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU\" crossorigin=\"anonymous\">
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js\"></script>
	<script src=\"https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js\"></script>
	<script>
        // Animate Loader
		$(window).load(function () {
			$(\".se-pre-con\").fadeOut(\"slow\");
		});
	</script>
";}
?>