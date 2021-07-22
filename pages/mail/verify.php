<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Verify Email</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Check an email address by Let's API, A website that utilize many API(s)">
    <meta name="keywords" content="Email, API">
    <meta name="author" content="Team LAPIZ">
    <meta name="language" content="en">

    <meta property="og:title" content="Verify Email">
    <meta property="og:description" content="Check an email address by Let's API, A website that utilize many API(s)">
    <meta property="og:type" content="website">

    <link rel="stylesheet" href="../../handler/css/style.css?v=<? echo time(); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>

<body class="background bulat1 bulat2">

    <?php 
        include_once "../../handler/include/header.php";
        headerImport(2, "../auth/login.php");
    ?>

    <div class="content">
        <div class="search-container">
            <h1>Verify email address</h1>
            <form method="post">
                <div class="wrapper">
                    <input class="search" placeholder="Enter email address here...." type="text" name="emailToCheck"
                        pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="Please enter a valid email address"
                        minlength="3" required>
                    <button class="button" name="clickbuttonver">Verify</button>
                </div>
                <div class="center-recaptcha">
                <?php 
                require_once '../../handler/require/loadenv.php';
                echo"
                    <div class=\"g-recaptcha\" data-sitekey=\"{$_ENV["recaptchaSiteKey"]}\"></div>
                " 
                ?>
                    
                </div>
            </form>
        </div>

        <div class="validation-group">
            <div class="validation-container">
                <h4>Email to check</h4>
                <div class="box">
                    <p class="box-text" id="emailToCheck">-</p>
                </div>
            </div>

            <div class="validation-container">
                <h4>Deliverability</h4>
                <div class="box">
                    <p class="box-text" id="deliverability">-</p>
                </div>
            </div>

            <div class="validation-container">
                <h4>Quality Score</h4>
                <div class="box">
                    <p class="box-text" id="quality">-</p>
                </div>
            </div>

            <div class="validation-container">
                <h4>Is this email valid?</h4>
                <div class="box">
                    <p class="box-default" id="yesValid">Yes</p>
                    <p class="box-default" id="noValid">No</p>
                </div>
            </div>

            <div class="validation-container">
                <h4>Is this email free?</h4>
                <div class="box">
                    <p class="box-default" id="yesFree">Yes</p>
                    <p class="box-default" id="noFree">No</p>
                </div>
            </div>

            <div class="validation-container">
                <h4>Is this email disposable?</h4>
                <div class="box">
                    <p class="box-default" id="yesDisposable">Yes</p>
                    <p class="box-default" id="noDisposable">No</p>
                </div>
            </div>

            <div class="validation-container">
                <h4>Is this a role email?</h4>
                <div class="box">
                    <p class="box-default" id="yesRoleEmail">Yes</p>
                    <p class="box-default" id="noRoleEmail">No</p>
                </div>
            </div>

            <div class="validation-container">
                <h4>Is this an MX email?</h4>
                <div class="box">
                    <p class="box-default" id="yesMx">Yes</p>
                    <p class="box-default" id="noMx">No</p>
                </div>
            </div>

            <div class="validation-container">
                <h4>Is this email SMTP valid?</h4>
                <div class="box">
                    <p class="box-default" id="yesSmtp">Yes</p>
                    <p class="box-default" id="noSmtp">No</p>
                </div>
            </div>
        </div>
    </div>

    <?php 
    require_once "../../handler/require/verifyMail.php";
    // Check When Button Is Pressed
    // Plus server side validation
    if (isset($_POST['clickbuttonver']) && !empty($_POST['emailToCheck']) &&
    preg_match('/^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/i', $_POST['emailToCheck'])) {
        $result = CheckCaptcha($_POST['g-recaptcha-response']);

        /* DEBUG 
        echo json_encode($result, JSON_PRETTY_PRINT); */

        // If success
        if ($result->success) {
            // get email address
            $emailToCheck = $_POST['emailToCheck'];

            // Get the data
            list($email, $deliverability, $quality_score, $valid, $free, 
            $disposable, $roleEmail, $mx, $smtp) = verify($emailToCheck);

            echo "
                <script>
                    document.getElementById('emailToCheck').innerHTML = '$email';
                    document.getElementById('deliverability').innerHTML = '$deliverability';
                    document.getElementById('quality').innerHTML = '$quality_score';
                </script>
            ";
            replaceColor("Valid", $valid);
            replaceColor("Free", $free);
            replaceColor("Disposable", $disposable);
            replaceColor("RoleEmail", $roleEmail);
            replaceColor("Mx", $mx);
            replaceColor("Smtp", $smtp);
        } else {
            // If the CAPTCHA box wasn't checked
           echo '<script>alert("Error! - Please Verify The Recaptcha First!");</script>';
        }
    }

    function CheckCaptcha($userResponse) {
        require_once '../../handler/require/loadenv.php';

        $fields_string = '';
        $fields = array(
            'secret' => $_ENV["recaptchaSecretKey"],
            'response' => $userResponse
        );
        foreach($fields as $key=>$value)
        $fields_string .= $key . '=' . $value . '&';
        $fields_string = rtrim($fields_string, '&');

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://www.google.com/recaptcha/api/siteverify');
        curl_setopt($ch, CURLOPT_POST, count($fields));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, True);

        $res = curl_exec($ch);
        curl_close($ch);

        $jsonRes = json_decode($res);

        return $jsonRes;
    }

    function replaceColor($id_box, $isTrue){
        if ($isTrue) { 
            $color = "#00623B";
            $id = 'yes'.$id_box;
        } else {
            $color = "#E20000";
            $id = 'no'.$id_box;
        }

        echo "
            <script>
                document.getElementById('$id').style.backgroundColor = \"$color\";
                document.getElementById('$id').style.color = 'white';
            </script>
        ";
    }
    ?>

    <?php 
        include_once "../../handler/include/footer.php";
        footerImport(2);
    ?>

</body>

</html>