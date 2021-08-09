<?php 
function getDetails($id){ 
    // Initialize cURL.
    $ch = curl_init();

    // Setting
    curl_setopt($ch, CURLOPT_URL, "https://api.jikan.moe/v4/anime/$id");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);

    // Execute the request.
    $data = curl_exec($ch);

    // Parse data to json object
    $dataJson = json_decode($data);

    // Close the cURL handle.
    curl_close($ch);

    if($dataJson == null) { 
        echo "Error Receiving The Data";
        return;
    }

    $malURL = $dataJson->data->url;
    $image = $dataJson->data->images->jpg->large_image_url ? $dataJson->data->images->jpg->large_image_url : "N/A";
    $score = $dataJson->data->score ? $dataJson->data->score : "N/A";
    $scored_by = $dataJson->data->scored_by ? $dataJson->data->scored_by : "N/A";
    $rank = $dataJson->data->rank ? $dataJson->data->rank : "N/A";
    $popularity = $dataJson->data->popularity ? $dataJson->data->popularity : "N/A";
    $members = $dataJson->data->members ? $dataJson->data->members : "N/A";
    $favorites = $dataJson->data->favorites ? $dataJson->data->favorites : "N/A";
    $synopsis = $dataJson->data->synopsis ? $dataJson->data->synopsis : "N/A";
    $air_date = $dataJson->data->aired->string ? $dataJson->data->aired->string : "N/A";
    $duration = $dataJson->data->duration ? $dataJson->data->duration : "N/A";
    $ageRating = $dataJson->data->rating ? $dataJson->data->rating : "N/A";
    $episodes = $dataJson->data->episodes ? $dataJson->data->episodes : "N/A";
    $title = $dataJson->data->title ? $dataJson->data->title : "N/A";
    $titleEng = $dataJson->data->title_english ? $dataJson->data->title_english : "N/A";
    $titleJp = $dataJson->data->title_japanese ? $dataJson->data->title_japanese : "N/A";
    $type = $dataJson->data->type ? $dataJson->data->type : "N/A";
    $source = $dataJson->data->source ? $dataJson->data->source : "N/A";
    $status = $dataJson->data->status ? $dataJson->data->status : "N/A";
    
    $synonyms = [];
    for ($i=0; $i < count($dataJson->data->title_synonyms); $i++) {
        $synonyms[] = $dataJson->data->title_synonyms[$i];
    }
    if(count($synonyms) == 0) {
        $synonyms[] = "N/A";   
    }
    $genres = [];
    for ($i=0; $i < count($dataJson->data->genres); $i++) {
        $genres[] = $dataJson->data->genres[$i]->name;
    }
    if(count($genres) == 0) {
        $genres[] = "N/A";   
    }
    $studios = [];
    for ($i=0; $i < count($dataJson->data->studios); $i++) {
        $studios[] = $dataJson->data->studios[$i]->name;
    }
    if(count($studios) == 0) {
        $studios[] = "N/A";   
    }
    $licensors = [];
    for ($i=0; $i < count ($dataJson->data->licensors); $i++) {
        $licensors[] = $dataJson->data->licensors[$i]->name;
    }
    if(count($licensors) == 0) {
        $licensors[] = "N/A";   
    }
    $producers = [];
    for ($i=0; $i < count ($dataJson->data->producers); $i++) {
        $producers[] = $dataJson->data->producers[$i]->name;
    }
    if(count($producers) == 0) {
        $producers[] = "N/A";   
    }


    return array($malURL, $image, $score, $scored_by, $rank, $popularity, $members, $favorites, $synopsis, $air_date, $duration,
    $ageRating, $episodes, $title, $titleEng, $titleJp, $type, $source, $status, $synonyms, $genres, $studios, $licensors, $producers);
}

function getRecommend($id, $name){ 
    // Initialize cURL.
    $ch = curl_init();

    // Setting
    curl_setopt($ch, CURLOPT_URL, "https://api.jikan.moe/v4/anime/$id/recommendations");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);

    // Execute the request.
    $data = curl_exec($ch);

    // Parse data to json object
    $dataJson = json_decode($data);

    // Close the cURL handle.
    curl_close($ch);

    if($dataJson == null) { 
        echo "Error Receiving The Data";
        return;
    }

    $amount = count($dataJson->data);

    echo "<h4 class=\"gallery-title\"><span class=\"gallery-border-bot\">Found a total of {$amount} results</span></h4>
        <div class=\"anime-centered\">";

    for ($i = 0; $i < count($dataJson->data); $i++) {
        $title = $dataJson->data[$i]->entry->title;
        $votes = $dataJson->data[$i]->votes;
        $animeRecommendedURL = $dataJson->data[$i]->entry->url;
        preg_match_all('!\d+!', $animeRecommendedURL, $matches);
        foreach($matches as $val) {
            $theURL = $val[0];
        }
        $recommendationURL = $dataJson->data[$i]->url;
        echo "
                <figure class=\"item-img\">
                    <a href=\"$recommendationURL\" target=\"_blank\" rel=\"noreferrer noopener\" data-bs-toggle=\"tooltip\" data-bs-placement=\"auto\" data-bs-html=\"true\"
                    title=\"Recommended by $votes people\">
                        <div class=\"img__wrap\">
                        <img class=\"img__img\" src=\"{$dataJson->data[$i]->entry->images->jpg->large_image_url}\" onerror=\"this.onerror=null; this.src='/handler/img/noposter.png'\" alt=\"{$title} Poster\"/>
                        <div class=\"top-left\">Votes: {$votes}</div>
                            <div class=\"img__description_layer\">
                                <p class=\"img__description\">Click here to go to the recommendation page. Click the title below if you want to see the details of this anime.</p>
                            </div>
                        </div>
                    </a>
                    <figcaption data-bs-toggle=\"tooltip\" data-bs-placement=\"auto\" data-bs-html=\"true\"
                    title=\"Click to see the details of the anime!\" class=\"item-caption\"><a href=\"./details?id={$theURL}\" >{$title}</a></figcaption>
                </figure>
        ";
    }
    echo "</div>";
}


getDetails(9253);

?>