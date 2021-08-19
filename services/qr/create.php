<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
        include_once $_SERVER['DOCUMENT_ROOT'] . "/handler/include/meta.php";
        importMeta('services/qr/'  . basename($_SERVER['PHP_SELF']), "QR Code Maker - Let's API", "Code, QR, API, LetsAPI, Tools", 
        "Create a QR Code by Let's API. A website that utilize many API(s)");
    ?>
</head>

<body class="background bulat1 bulat2">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/2.0.2/FileSaver.min.js" integrity="sha512-k8F8QynmFNURwbUJC8drKA+fo3YfNvjqKzStdydD6au+MzvxBoRnxH8E31RJXwDY9DrnEiPhh9wBoDSIxhkyHQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <?php 
        include_once $_SERVER['DOCUMENT_ROOT'] . "/handler/include/header.php";
    ?>

    <div class="content">
        <div class="service-container">
            <h1>Create QR Code</h1>
            <form method="get" action="create.php" style="margin-bottom:20px;">
                <div class="searchbar-wrapper">
                    <input class="searchbar" type="text" placeholder="Content to be made into QR Code..." name="data" required>
                    <button class="search_button"><i class="ion-android-send"></i></button>
                </div>
            </form>
        <?php
        if(isset($_GET['data'])) {
            $data = $_GET["data"];
            echo "
            <div class=\"qr-container\">
                <img id=\"img\" src=\"https://api.qrserver.com/v1/create-qr-code/?size=500x500&data={$data}\">
            </div>
            <div>
                <h4 style=\"margin: 10px;\">QR code created with the content</h4>
            </div>
            <div class=\"qr-text\">
                <p class=\"p-centered\" style=\"margin-top: 0px;\">{$data}</p>
            </div>
            <div class=\"service-container\">
                <h4 style=\"margin: 10px;\">Save Img as JPG</h4>
                <button id=\"btn\"><span class=\"fa fa-save\"></span> Click Here</button>
            </div>
            ";   

            echo '
            <script>
            
            let btnDownload = document.getElementById("btn");
            let img = document.getElementById("img");
            btnDownload.addEventListener("click", () => {
                var imagePath = img.getAttribute("src");
                var fileName = getFileName(imagePath);
                saveAs(imagePath, fileName + " QR Code.jpg");
            });
            function getFileName(str) {
                var name = str.replace("https://api.qrserver.com/v1/create-qr-code/?size=500x500&data=", "");
                return name;
            }
            </script>
            ';
        }
        ?>
        </div>
    </div>


    <?php 
        include_once $_SERVER['DOCUMENT_ROOT'] . "/handler/include/footer.php";
        footerImport('services/anime/' . basename($_SERVER['PHP_SELF']),  "This service is made possible by using <a class=\"footerlink\" href=\"https://goqr.me/\" target=\"_blank\" rel=\"noreferrer noopener\">goQR API</a>");
    ?>
</body>

</html>