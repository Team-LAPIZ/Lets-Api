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
    $trailer = "N/A";
    if($dataJson->data->trailer) {
        $trailer = $dataJson->data->trailer->url ? $dataJson->data->trailer->url : "N/A";
    }

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

    return array($malURL, $image, $trailer, $score, $scored_by, $rank, $popularity, $members, $favorites, $synopsis, $air_date, $duration,
    $ageRating, $episodes, $title, $titleEng, $titleJp, $type, $source, $status, $synonyms, $genres, $studios, $licensors, $producers);
}

function getChars($id){
    // Initialize cURL.
    $ch = curl_init();

    // Setting
    curl_setopt($ch, CURLOPT_URL, "https://api.jikan.moe/v4/anime/$id/characters");
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

    $status = "";
    $characters_name = [];
    $characters_img = [];
    $characters_role = [];
    $characters_va_jp = [];
    $characters_va_img = [];

    if(count($dataJson->data) == 0) { 
        $status = "No Characters";
    } else {
        for ($i=0; $i < count($dataJson->data); $i++) {
            $characters_name[] = $dataJson->data[$i]->character->name;
            $characters_img[] = $dataJson->data[$i]->character->images->jpg->image_url;
            $characters_role[] = $dataJson->data[$i]->role;

            $vaCount = count($dataJson->data[$i]->voice_actors);
            $found = false;
            for ($j=0; $j < $vaCount; $j++) {
                if($dataJson->data[$i]->voice_actors[$j]->language == "Japanese") {
                    $characters_va_jp[] = $dataJson->data[$i]->voice_actors[$j]->person->name;
                    $characters_va_img[] = $dataJson->data[$i]->voice_actors[$j]->person->images->jpg->image_url;
                    $found = true;
                }
            }

            if($vaCount == 0 || $found == false) { 
                $characters_va_jp[] = "N/A";
                $characters_va_img[] = "N/A";
            }
        }

        $status = "Success";
    }

    return array($status, $characters_name, $characters_img, $characters_role, $characters_va_jp, $characters_va_img);
}

function getStaff($id){
    // Initialize cURL.
    $ch = curl_init();

    // Setting
    curl_setopt($ch, CURLOPT_URL, "https://api.jikan.moe/v4/anime/$id/staff");
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

    $status = "";
    $name = [];
    $name_img = [];
    $position = [];

    if(count($dataJson->data) == 0) { 
        $status = "No Staff";
    } else {
        for ($i=0; $i < count($dataJson->data); $i++) {
            $name[] = $dataJson->data[$i]->person->name;
            $name_img[] = $dataJson->data[$i]->person->images->jpg->image_url;
            $position[] = join(', ', $dataJson->data[$i]->positions);
        }

        $status = "Success";
    }

    return array($status, $name, $name_img, $position);
}

function getRelation($id) { 
    // Initialize cURL.
    $ch = curl_init();

    // Setting
    curl_setopt($ch, CURLOPT_URL, "https://api.jikan.moe/v4/anime/$id/relations");
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

    $status = "";
    $relation = [];
    $id_n_name = [];

    if(count($dataJson->data) == 0) { 
        $status = "No Related anime or manga";
    } else {
        for ($i=0; $i < count($dataJson->data); $i++) {
            $relation[] = $dataJson->data[$i]->relation;

            $input = [];
            for($j = 0; $j < count($dataJson->data[$i]->entry); $j++) {
                if($dataJson->data[$i]->entry[$j]->type == "manga") {
                    $input[] = "<span data-bs-toggle=\"tooltip\" data-bs-placement=\"auto\" title=\"Type: {$dataJson->data[$i]->entry[$j]->type}\">{$dataJson->data[$i]->entry[$j]->name}</span>";
                } else {
                    $input[] = "<a class=\"link-subtle\" href=\"./details?id={$dataJson->data[$i]->entry[$j]->mal_id}\"><span data-bs-toggle=\"tooltip\" data-bs-placement=\"auto\" title=\"Type: {$dataJson->data[$i]->entry[$j]->type}\">{$dataJson->data[$i]->entry[$j]->name}</span></a>";
                }
            }
            $id_n_name[] = join(", ", $input);
        }

        $status = "Success";
    }

    return array($status, $relation, $id_n_name);
}

function getRecommend($id){ 
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
?>