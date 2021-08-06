<?php 
require_once  __DIR__ . "/./getTime.php";
list($year, $season) = getYearAndSeason();

// Initialize cURL.
$ch = curl_init();

// Setting
curl_setopt($ch, CURLOPT_URL, "https://api.jikan.moe/v4/seasons/{$year}/{$season}");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);

// Execute the request.
$data = curl_exec($ch);

// Parse data to json object
$dataJson = json_decode($data);

// Close the cURL handle.
curl_close($ch);

sleep(2);

for ($i = 0; $i < count($dataJson->data); $i++) {
        echo "
            <a href=\"./details?id={$dataJson->data[$i]->mal_id}\" data-bs-toggle=\"tooltip\" data-bs-placement=\"auto\" data-bs-html=\"true\"
            title=\"Score: {$dataJson->data[$i]->score} ({$dataJson->data[$i]->scored_by} votes)<br>Ranked: #{$dataJson->data[$i]->rank}<br>Popularity rank: #{$dataJson->data[$i]->popularity}<br>Members/Favorites: {$dataJson->data[$i]->members}/{$dataJson->data[$i]->favorites}\">
                <figure class=\"item-img\">
                    <div class=\"img__wrap\">
                    <img class=\"img__img\" src=\"{$dataJson->data[$i]->images->jpg->large_image_url}\" alt=\"\"/>
                    <div class=\"top-left\">Ranked #{$dataJson->data[$i]->rank}</div>
                        <div class=\"img__description_layer\">
                            <p class=\"img__description\">{$dataJson->data[$i]->synopsis}</p>
                        </div>
                    </div>
                    <figcaption class=\"item-caption\">{$dataJson->data[$i]->title}</figcaption>
                </figure>
            </a>
        ";
}