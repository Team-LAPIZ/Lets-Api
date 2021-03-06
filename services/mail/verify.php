<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
        include_once $_SERVER['DOCUMENT_ROOT'] . "/handler/include/meta.php";
        importMeta('services/mail/' . basename($_SERVER['PHP_SELF']), "Verify Email - Let's API",
        "Email, API, LetsAPI, Tools", "Check an email address by Let's API, A website that utilize many API(s).");
    ?>
    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>

<body class="background bulat1 bulat2">

    <?php 
        include_once $_SERVER['DOCUMENT_ROOT'] . "/handler/include/header.php";
    ?>

    <div class="content">
        <div class="service-container">
            <h1>Verify Email Address</h1>
            <form method="post" id="verify-email">
                <div class="wrapper">
                    <input class="service-container-search" placeholder="Enter email address here...." type="text" name="emailToCheck"
                        pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="Please enter a valid email address"
                        minlength="3" required>
                    <button class="button" name="clickbuttonver" id="verifyButton">Verify</button>
                </div>
                <div class="center-recaptcha">
                <?php 
                require_once $_SERVER['DOCUMENT_ROOT'] . '/handler/require/loadenv.php';
                echo"
                    <div class=\"g-recaptcha\" data-sitekey=\"{$_ENV["recaptchaSiteKey"]}\" data-callback=\"enableButton\" data-expired-callback=\"disableButton\"></div>
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
                <h4>Quality score</h4>
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

    <script type="text/javascript">
    var disabled = true;
    function enableButton(){
        disabled = false;
    }

    function disableButton() {
        disabled = true;
    }

    document.getElementById('verify-email').onsubmit = function(e) {
        if(disabled){
            alert("Please Verify The Recaptcha First!"); 
            e.preventDefault();
        } else {
            return true;
        }
    }
    </script>

    <?php 
    require_once $_SERVER['DOCUMENT_ROOT'] . "/handler/require/verifyMail.php";
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
        require_once $_SERVER['DOCUMENT_ROOT'] . '/handler/require/loadenv.php';

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
        include_once $_SERVER['DOCUMENT_ROOT'] . "/handler/include/footer.php";
        footerImport('services/mail/' . basename($_SERVER['PHP_SELF']), "This service is made by using API call from <a class=\"footerlink\" href=\"https://www.abstractapi.com/\" target=\"_blank\" rel=\"noreferrer noopener\">Abstractapi.com</a>");
    ?>

</body>

</html>