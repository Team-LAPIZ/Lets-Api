<?php 
function getDay($day){ 
    // Initialize cURL.
    $ch = curl_init();

    // Setting
    curl_setopt($ch, CURLOPT_URL, "https://api.jikan.moe/v3/schedule/$day");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);

    // Execute the request.
    $data = curl_exec($ch);

    // Parse data to json object
    $dataJson = json_decode($data);

    // Close the cURL handle.
    curl_close($ch);

    return $dataJson;
}

function monday() {
    $data = getDay("monday");

    for ($i=0; $i < count($data); $i++) { 
        $title = $data->monday[$i]->title;
        $score = $data->monday[$i]->score ? $data->monday[$i]->score : "N/A";
        $members = $data->monday[$i]->members ? $data->monday[$i]->members : "N/A";
        $synopsis = $data->monday[$i]->synopsis ? $data->monday[$i]->synopsis : "N/A";
        $type = $data->monday[$i]->type ? $data->monday[$i]->type : "N/A";
        $airing_start = $data->monday[$i]->airing_start ? $data->monday[$i]->airing_start : "N/A";
        $episodes = $data->monday[$i]->episodes ? $data->monday[$i]->episodes : "N/A";

        
    }
}



?>