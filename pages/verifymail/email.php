<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <title>Verify Email</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Check an email address">
    <meta name="keywords" content="Email, API">
    <meta name="author" content="Team LAPIZ">
    <meta name="language" content="en">

    <meta property="og:title" content="Verify Email">
    <meta property="og:description" content="Check an email address">
    <meta property="og:type" content="website">

    <link rel="stylesheet" href="../../handler/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&display=swap"
        rel="stylesheet">
</head>

<body class="background bulat1 bulat2">

    <?php include_once "../header_footer/header.php" ?>

    <div class="search-container">
        <h1>Verify email address</h1>
        <div class="wrapper">
            <input class="search" placeholder="Enter email address here...." type="text" required>
            <button class="button">Verify</button>
        </div>
    </div>

    <div class="validation-group">
        <div class="validation-container">
            <h4>Is this email valid?</h4>
            <div class="box">
                <p class="box-default">Yes</p>
                <p class="box-default">No</p>
            </div>
        </div>

        <div class="validation-container">
            <h4>Is this free email?</h4>
            <div class="box">
                <p class="box-default yes">Yes</p>
                <p class="box-default">No</p>
            </div>
        </div>

        <div class="validation-container">
            <h4>Is this disposable email?</h4>
            <div class="box">
                <p class="box-default">Yes</p>
                <p class="box-default no">No</p>
            </div>
        </div>

        <div class="validation-container">
            <h4>Is this role email??</h4>
            <div class="box">
                <p class="box-default yes">Yes</p>
                <p class="box-default">No</p>
            </div>
        </div>

        <div class="validation-container">
            <h4>Is this MX email?</h4>
            <div class="box">
                <p class="box-default">Yes</p>
                <p class="box-default no">No</p>
            </div>
        </div>

        <div class="validation-container">
            <h4>Is this email SMTP valid?</h4>
            <div class="box">
                <p class="box-default">Yes</p>
                <p class="box-default">No</p>
            </div>
        </div>

    </div>

    <?php include_once "../header_footer/footer.php" ?>

</body>

</html>