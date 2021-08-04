<?php 
    // Initialize cURL.
    $ch = curl_init();

    // Setting
    curl_setopt($ch, CURLOPT_URL, "https://api.jikan.moe/v4/top/anime");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);

    // Execute the request.
    $data = curl_exec($ch);

    // Parse data to json object
    $dataJson = json_decode($data);

    // Close the cURL handle.
    curl_close($ch);

    for ($i = 0; $i < count($dataJson->data); $i++) {
        echo "<img src='" . $dataJson->data[$i]->images->jpg->image_url . "' alt='" . $dataJson->data[$i]->images->webp->image_url . "'>";
    }
?>