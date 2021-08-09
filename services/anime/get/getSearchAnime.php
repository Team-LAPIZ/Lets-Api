<?php 
function search($q){ 
    $convertedQuery = str_replace(' ', '%20', $q);

    // Initialize cURL.
    $ch = curl_init();

    // Setting
    curl_setopt($ch, CURLOPT_URL, "https://api.jikan.moe/v4/anime?q={$convertedQuery}");
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

function searchNormal($q) {
    $dataJson = search($q);
    $amount = count($dataJson->data);

    echo "<h4 class=\"gallery-title\" data-bs-toggle=\"tooltip\" data-bs-placement=\"auto\" data-bs-html=\"true\"
    title=\"Found a total of {$amount} results!\">Search Results for \"{$q}\"</h4>
        <div class=\"anime-centered\">";

    for ($i = 0; $i < count($dataJson->data); $i++) {
        $score = $dataJson->data[$i]->score ? $dataJson->data[$i]->score : "N/A";
        $scored_by = $dataJson->data[$i]->scored_by ? $dataJson->data[$i]->scored_by : "N/A";
        $rank = $dataJson->data[$i]->rank ? $dataJson->data[$i]->rank : "N/A";
        $popularity = $dataJson->data[$i]->popularity ? $dataJson->data[$i]->popularity : "N/A";
        $members = $dataJson->data[$i]->members ? $dataJson->data[$i]->members : "N/A";
        $favorites = $dataJson->data[$i]->favorites ? $dataJson->data[$i]->favorites : "N/A";
        $episodes = $dataJson->data[$i]->episodes ? $dataJson->data[$i]->episodes : "N/A";
        $aired = $dataJson->data[$i]->aired->string ? $dataJson->data[$i]->aired->string : "N/A";
        $source = $dataJson->data[$i]->source ? $dataJson->data[$i]->source : "N/A";
        $synopsis = $dataJson->data[$i]->synopsis ? $dataJson->data[$i]->synopsis : "N/A";
        $type = $dataJson->data[$i]->type ? $dataJson->data[$i]->type : "N/A";
        echo "
                <a href=\"./details?id={$dataJson->data[$i]->mal_id}\" data-bs-toggle=\"tooltip\" data-bs-placement=\"auto\" data-bs-html=\"true\"
                title=\"Score: {$score} ({$scored_by} votes)<br>Ranked: #{$rank}<br>Popularity rank: #{$popularity}<br>Members/Favorites: {$members}/{$favorites}<br>
                Episodes: {$episodes}<br>Aired: {$aired}<br>Source: {$source}<br>Type:{$type} \">
                    <figure class=\"item-img\">
                        <div class=\"img__wrap\">
                        <img class=\"img__img\" src=\"{$dataJson->data[$i]->images->jpg->large_image_url}\" onerror=\"this.onerror=null; this.src='/handler/img/noposter.png'\" alt=\"{$dataJson->data[$i]->title} Poster\"/>
                        <div class=\"top-left\">Ranked #{$rank}</div>
                            <div class=\"img__description_layer\">
                                <p class=\"img__description\">{$synopsis}</p>
                            </div>
                        </div>
                        <figcaption class=\"item-caption\">{$dataJson->data[$i]->title}</figcaption>
                    </figure>
                </a>
        ";
    }
    echo "</div>";
}

function searchRecommend($q) {
    $dataJson = search($q);

    $amount = count($dataJson->data);
    echo "<h4 class=\"gallery-title\" data-bs-toggle=\"tooltip\" data-bs-placement=\"auto\" data-bs-html=\"true\"
    title=\"Found a total of {$amount} results!\"><span class=\"gallery-border-bot\">Search Results for \"{$q}\"</span></h4>
        <div class=\"anime-centered\">";
    
    if($amount !== 0) {
        for ($i = 0; $i < count($dataJson->data); $i++) {
            $score = $dataJson->data[$i]->score ? $dataJson->data[$i]->score : "N/A";
            $scored_by = $dataJson->data[$i]->scored_by ? $dataJson->data[$i]->scored_by : "N/A";
            $rank = $dataJson->data[$i]->rank ? $dataJson->data[$i]->rank : "N/A";
            $popularity = $dataJson->data[$i]->popularity ? $dataJson->data[$i]->popularity : "N/A";
            $members = $dataJson->data[$i]->members ? $dataJson->data[$i]->members : "N/A";
            $favorites = $dataJson->data[$i]->favorites ? $dataJson->data[$i]->favorites : "N/A";
            $episodes = $dataJson->data[$i]->episodes ? $dataJson->data[$i]->episodes : "N/A";
            $aired = $dataJson->data[$i]->aired->string ? $dataJson->data[$i]->aired->string : "N/A";
            $source = $dataJson->data[$i]->source ? $dataJson->data[$i]->source : "N/A";
            $synopsis = $dataJson->data[$i]->synopsis ? $dataJson->data[$i]->synopsis : "N/A";
            $type = $dataJson->data[$i]->type ? $dataJson->data[$i]->type : "N/A";
            echo "
                    <a href=\"./recommend?id={$dataJson->data[$i]->mal_id}&title={$dataJson->data[$i]->title}\" data-bs-toggle=\"tooltip\" data-bs-placement=\"auto\" data-bs-html=\"true\"
                    title=\"Score: {$score} ({$scored_by} votes)<br>Ranked: #{$rank}<br>Popularity rank: #{$popularity}<br>Members/Favorites: {$members}/{$favorites}<br>
                    Episodes: {$episodes}<br>Aired: {$aired}<br>Source: {$source}<br>Type:{$type} \">
                        <figure class=\"item-img\">
                            <div class=\"img__wrap\">
                            <img class=\"img__img\" src=\"{$dataJson->data[$i]->images->jpg->large_image_url}\" onerror=\"this.onerror=null; this.src='/handler/img/noposter.png'\" alt=\"{$dataJson->data[$i]->title} Poster\"/>
                            <div class=\"top-left\">Ranked #{$rank}</div>
                                <div class=\"img__description_layer\">
                                    <p class=\"img__description\">{$synopsis}</p>
                                </div>
                            </div>
                            <figcaption class=\"item-caption\">{$dataJson->data[$i]->title}</figcaption>
                        </figure>
                    </a>
            ";
        }
    }
        
    echo "</div>";
}

?>