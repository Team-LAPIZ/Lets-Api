<?php 
    require_once '../../handler/php/loadenv.php';

    $emailToCheck = 'testmail@gmail.com';

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

    echo ("Email\t\t: " . $dataJson->email . "\n");
    echo ("Deliverability\t: " . $dataJson->deliverability . "\n");
    echo ("Quality_score\t: " . $dataJson->quality_score . "\n");
    echo ("Is It Valid?\t\t\t\t" . ($dataJson->is_valid_format->value ? "Yes" : "No") . "\n");
    echo ("Is It Free?\t\t\t\t" . ($dataJson->is_free_email->value ? "Yes" : "No") . "\n");
    echo ("Is It Disposable?\t\t\t" . ($dataJson->is_disposable_email->value ? "Yes" : "No") . "\n");
    echo ("Is It a Role Email? (Company Address)\t" . ($dataJson->is_role_email->value ? "Yes" : "No")  . "\n");
    echo ("Is mx Found?\t\t\t\t" . ($dataJson->is_mx_found->value ? "Yes" : "No")  . "\n");
    echo ("Is it SMTP Valid?\t\t\t" . ($dataJson->is_smtp_valid->value ? "Yes" : "No")  . "\n");

    // masih backend
?>