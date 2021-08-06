<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
        include_once "../../handler/include/meta.php";
        importMeta("services/anime/search.php", "BBCode Editor/Formatter - Let's API",
        "Bbcode, text-editor, LetsAPI, Tools", "BBCode Formatter, A bbcode editor using the script from sceditor by Let's API, A website that utilize many API(s) and tools.");
    ?>
    <link rel="stylesheet" href="./formatter/themes/default.min.css" id="theme-style" />
    
    <script src="./formatter/sceditor.min.js"></script>
    <script src="./formatter/icons/monocons.js"></script>
    <script src="./formatter/formats/bbcode.js"></script>
</head>

<body class="background bulat1 bulat2">

    <?php 
        include_once $_SERVER['DOCUMENT_ROOT'] . "/handler/include/header.php";
    ?>

    <div class="content">
        <div class="service-container">
            <h1>BBCode Editor</h1>
            <textarea id="formatter" style="height: 300px" placeholder="input your text..."></textarea>
        <script>
			var textarea = document.getElementById('formatter');
			sceditor.create(textarea, {
				format: 'bbcode',
                fonts: 'Arial',
				icons: 'monocons',
                autofocus: true,
                resizeWidth: false,
				width: '90%',
				style: './formatter/themes/content/default.min.css'
			});
		</script>
        </div>
    </div>
    
    <?php 
        include_once $_SERVER['DOCUMENT_ROOT'] . "/handler/include/footer.php";
        footerImport("pages/mail/verify.php", "This service is made by using bbcode formatter by <a class=\"footerlink\" href=\"https://sceditor.com/\" target=\"_blank\" rel=\"noreferrer noopener\">Sceditor</a>");
    ?>

</body>

</html>