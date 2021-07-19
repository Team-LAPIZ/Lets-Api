<?php 
    require_once __DIR__ . '/./loadenv.php';

    function verify($emailToCheck){
        // Initialize cURL.
        $ch = curl_init();

        // Set the URL that you want to GET by using the CURLOPT_URL option.
        curl_setopt($ch, CURLOPT_URL, "https://emailvalidation.abstractapi.com/v1/?api_key={$_ENV["VERIFY_MAIL_KEYS"]}&email={$emailToCheck}");

        // Set CURLOPT_RETURNTRANSFER so that the content is returned as a variable.
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        // Set CURLOPT_FOLLOWLOCATION to true to follow redirects.
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);

        // Execute the request.
        $data = curl_exec($ch);

        // Parse data to json object
        $dataJson = json_decode($data);

        // Close the cURL handle.
        curl_close($ch);

        // Print the data out onto the page.
        $email = $dataJson->email;
        $deliverability = $dataJson->deliverability;
        $quality_score = $dataJson->quality_score;
        $valid = $dataJson->is_valid_format->value;
        $free = $dataJson->is_free_email->value;
        $disposeable = $dataJson->is_disposable_email->value;
        $roleEmail = $dataJson->is_role_email->value;
        $mx = $dataJson->is_mx_found->value;
        $smtp = $dataJson->is_smtp_valid->value;

        return array($email, $deliverability, $quality_score, $valid, $free, $disposeable, $roleEmail, $mx, $smtp);
    };
?>