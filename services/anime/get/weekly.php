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

    for ($i=0; $i < count($data->monday); $i++) { 
        $id = $data->monday[$i]->mal_id;
        $title = $data->monday[$i]->title;
        $score = $data->monday[$i]->score ? $data->monday[$i]->score : "N/A";
        $members = $data->monday[$i]->members ? $data->monday[$i]->members : "N/A";
        $synopsis = $data->monday[$i]->synopsis ? $data->monday[$i]->synopsis : "N/A";
        $source = $data->monday[$i]->source ? $data->monday[$i]->source : "N/A";
        $type = $data->monday[$i]->type ? $data->monday[$i]->type : "N/A";
        $airing_start = $data->monday[$i]->airing_start ? $data->monday[$i]->airing_start : "N/A";
        $episodes = $data->monday[$i]->episodes ? $data->monday[$i]->episodes : "N/A";
        if($airing_start !== "N/A") {
            $formatted = date_create($airing_start);
            $airing_start = $formatted->format('M d, Y');
        }
        echo"
        <a href=\"./details?id={$id}\" data-bs-toggle=\"tooltip\" data-bs-placement=\"auto\" data-bs-html=\"true\"
        title=\"Score: {$score} <br>Members: #{$members}<br>Episodes: {$episodes}<br>Start Airing on: {$airing_start}<br>Source: {$source}<br>Type:{$type} \">
            <figure class=\"item-img\">
                <div class=\"img__wrap\">
                <img class=\"img__img\" src=\"{$data->monday[$i]->image_url}\" onerror=\"this.onerror=null; this.src='/handler/img/noposter.png'\" alt=\"{$title} Poster\"/>
                <div class=\"top-left\">Score :{$score}</div>
                    <div class=\"img__description_layer\">
                        <p class=\"img__description\">{$synopsis}</p>
                    </div>
                </div>
                <figcaption class=\"item-caption\">$title</figcaption>
            </figure>
        </a>
        ";
    }
}

function tuesday(){
    $data = getDay("tuesday");

    for ($i=0; $i < count($data->tuesday); $i++) { 
        $id = $data->tuesday[$i]->mal_id;
        $title = $data->tuesday[$i]->title;
        $score = $data->tuesday[$i]->score ? $data->tuesday[$i]->score : "N/A";
        $members = $data->tuesday[$i]->members ? $data->tuesday[$i]->members : "N/A";
        $synopsis = $data->tuesday[$i]->synopsis ? $data->tuesday[$i]->synopsis : "N/A";
        $source = $data->tuesday[$i]->source ? $data->tuesday[$i]->source : "N/A";
        $type = $data->tuesday[$i]->type ? $data->tuesday[$i]->type : "N/A";
        $airing_start = $data->tuesday[$i]->airing_start ? $data->tuesday[$i]->airing_start : "N/A";
        $episodes = $data->tuesday[$i]->episodes ? $data->tuesday[$i]->episodes : "N/A";
        if($airing_start !== "N/A") {
            $formatted = date_create($airing_start);
            $airing_start = $formatted->format('M d, Y');
        }
        echo"
        <a href=\"./details?id={$id}\" data-bs-toggle=\"tooltip\" data-bs-placement=\"auto\" data-bs-html=\"true\"
        title=\"Score: {$score} <br>Members: #{$members}<br>Episodes: {$episodes}<br>Start Airing on: {$airing_start}<br>Source: {$source}<br>Type:{$type} \">
            <figure class=\"item-img\">
                <div class=\"img__wrap\">
                <img class=\"img__img\" src=\"{$data->tuesday[$i]->image_url}\" onerror=\"this.onerror=null; this.src='/handler/img/noposter.png'\" alt=\"{$title} Poster\"/>
                <div class=\"top-left\">Score :{$score}</div>
                    <div class=\"img__description_layer\">
                        <p class=\"img__description\">{$synopsis}</p>
                    </div>
                </div>
                <figcaption class=\"item-caption\">$title</figcaption>
            </figure>
        </a>
        ";
    }
}

function wednesday(){
    $data = getDay("wednesday");

    for ($i=0; $i < count($data->wednesday); $i++) { 
        $id = $data->wednesday[$i]->mal_id;
        $title = $data->wednesday[$i]->title;
        $score = $data->wednesday[$i]->score ? $data->wednesday[$i]->score : "N/A";
        $members = $data->wednesday[$i]->members ? $data->wednesday[$i]->members : "N/A";
        $synopsis = $data->wednesday[$i]->synopsis ? $data->wednesday[$i]->synopsis : "N/A";
        $source = $data->wednesday[$i]->source ? $data->wednesday[$i]->source : "N/A";
        $type = $data->wednesday[$i]->type ? $data->wednesday[$i]->type : "N/A";
        $airing_start = $data->wednesday[$i]->airing_start ? $data->wednesday[$i]->airing_start : "N/A";
        $episodes = $data->wednesday[$i]->episodes ? $data->wednesday[$i]->episodes : "N/A";
        if($airing_start !== "N/A") {
            $formatted = date_create($airing_start);
            $airing_start = $formatted->format('M d, Y');
        }
        echo"
        <a href=\"./details?id={$id}\" data-bs-toggle=\"tooltip\" data-bs-placement=\"auto\" data-bs-html=\"true\"
        title=\"Score: {$score} <br>Members: #{$members}<br>Episodes: {$episodes}<br>Start Airing on: {$airing_start}<br>Source: {$source}<br>Type:{$type} \">
            <figure class=\"item-img\">
                <div class=\"img__wrap\">
                <img class=\"img__img\" src=\"{$data->wednesday[$i]->image_url}\" onerror=\"this.onerror=null; this.src='/handler/img/noposter.png'\" alt=\"{$title} Poster\"/>
                <div class=\"top-left\">Score :{$score}</div>
                    <div class=\"img__description_layer\">
                        <p class=\"img__description\">{$synopsis}</p>
                    </div>
                </div>
                <figcaption class=\"item-caption\">$title</figcaption>
            </figure>
        </a>
        ";
    }
}

function thursday(){
    $data = getDay("thursday");

    for ($i=0; $i < count($data->thursday); $i++) { 
        $id = $data->thursday[$i]->mal_id;
        $title = $data->thursday[$i]->title;
        $score = $data->thursday[$i]->score ? $data->thursday[$i]->score : "N/A";
        $members = $data->thursday[$i]->members ? $data->thursday[$i]->members : "N/A";
        $synopsis = $data->thursday[$i]->synopsis ? $data->thursday[$i]->synopsis : "N/A";
        $source = $data->thursday[$i]->source ? $data->thursday[$i]->source : "N/A";
        $type = $data->thursday[$i]->type ? $data->thursday[$i]->type : "N/A";
        $airing_start = $data->thursday[$i]->airing_start ? $data->thursday[$i]->airing_start : "N/A";
        $episodes = $data->thursday[$i]->episodes ? $data->thursday[$i]->episodes : "N/A";
        if($airing_start !== "N/A") {
            $formatted = date_create($airing_start);
            $airing_start = $formatted->format('M d, Y');
        }
        echo"
        <a href=\"./details?id={$id}\" data-bs-toggle=\"tooltip\" data-bs-placement=\"auto\" data-bs-html=\"true\"
        title=\"Score: {$score} <br>Members: #{$members}<br>Episodes: {$episodes}<br>Start Airing on: {$airing_start}<br>Source: {$source}<br>Type:{$type} \">
            <figure class=\"item-img\">
                <div class=\"img__wrap\">
                <img class=\"img__img\" src=\"{$data->thursday[$i]->image_url}\" onerror=\"this.onerror=null; this.src='/handler/img/noposter.png'\" alt=\"{$title} Poster\"/>
                <div class=\"top-left\">Score :{$score}</div>
                    <div class=\"img__description_layer\">
                        <p class=\"img__description\">{$synopsis}</p>
                    </div>
                </div>
                <figcaption class=\"item-caption\">$title</figcaption>
            </figure>
        </a>
        ";
    }
}

function friday(){
    $data = getDay("friday");

    for ($i=0; $i < count($data->friday); $i++) { 
        $id = $data->friday[$i]->mal_id;
        $title = $data->friday[$i]->title;
        $score = $data->friday[$i]->score ? $data->friday[$i]->score : "N/A";
        $members = $data->friday[$i]->members ? $data->friday[$i]->members : "N/A";
        $synopsis = $data->friday[$i]->synopsis ? $data->friday[$i]->synopsis : "N/A";
        $source = $data->friday[$i]->source ? $data->friday[$i]->source : "N/A";
        $type = $data->friday[$i]->type ? $data->friday[$i]->type : "N/A";
        $airing_start = $data->friday[$i]->airing_start ? $data->friday[$i]->airing_start : "N/A";
        $episodes = $data->friday[$i]->episodes ? $data->friday[$i]->episodes : "N/A";
        if($airing_start !== "N/A") {
            $formatted = date_create($airing_start);
            $airing_start = $formatted->format('M d, Y');
        }
        echo"
        <a href=\"./details?id={$id}\" data-bs-toggle=\"tooltip\" data-bs-placement=\"auto\" data-bs-html=\"true\"
        title=\"Score: {$score} <br>Members: #{$members}<br>Episodes: {$episodes}<br>Start Airing on: {$airing_start}<br>Source: {$source}<br>Type:{$type} \">
            <figure class=\"item-img\">
                <div class=\"img__wrap\">
                <img class=\"img__img\" src=\"{$data->friday[$i]->image_url}\" onerror=\"this.onerror=null; this.src='/handler/img/noposter.png'\" alt=\"{$title} Poster\"/>
                <div class=\"top-left\">Score :{$score}</div>
                    <div class=\"img__description_layer\">
                        <p class=\"img__description\">{$synopsis}</p>
                    </div>
                </div>
                <figcaption class=\"item-caption\">$title</figcaption>
            </figure>
        </a>
        ";
    }
}

function saturday(){
    $data = getDay("saturday");

    for ($i=0; $i < count($data->saturday); $i++) { 
        $id = $data->saturday[$i]->mal_id;
        $title = $data->saturday[$i]->title;
        $score = $data->saturday[$i]->score ? $data->saturday[$i]->score : "N/A";
        $members = $data->saturday[$i]->members ? $data->saturday[$i]->members : "N/A";
        $synopsis = $data->saturday[$i]->synopsis ? $data->saturday[$i]->synopsis : "N/A";
        $source = $data->saturday[$i]->source ? $data->saturday[$i]->source : "N/A";
        $type = $data->saturday[$i]->type ? $data->saturday[$i]->type : "N/A";
        $airing_start = $data->saturday[$i]->airing_start ? $data->saturday[$i]->airing_start : "N/A";
        $episodes = $data->saturday[$i]->episodes ? $data->saturday[$i]->episodes : "N/A";
        if($airing_start !== "N/A") {
            $formatted = date_create($airing_start);
            $airing_start = $formatted->format('M d, Y');
        }
        echo"
        <a href=\"./details?id={$id}\" data-bs-toggle=\"tooltip\" data-bs-placement=\"auto\" data-bs-html=\"true\"
        title=\"Score: {$score} <br>Members: #{$members}<br>Episodes: {$episodes}<br>Start Airing on: {$airing_start}<br>Source: {$source}<br>Type:{$type} \">
            <figure class=\"item-img\">
                <div class=\"img__wrap\">
                <img class=\"img__img\" src=\"{$data->saturday[$i]->image_url}\" onerror=\"this.onerror=null; this.src='/handler/img/noposter.png'\" alt=\"{$title} Poster\"/>
                <div class=\"top-left\">Score :{$score}</div>
                    <div class=\"img__description_layer\">
                        <p class=\"img__description\">{$synopsis}</p>
                    </div>
                </div>
                <figcaption class=\"item-caption\">$title</figcaption>
            </figure>
        </a>
        ";
    }
}

function sunday(){
    $data = getDay("sunday");

    for ($i=0; $i < count($data->sunday); $i++) { 
        $id = $data->sunday[$i]->mal_id;
        $title = $data->sunday[$i]->title;
        $score = $data->sunday[$i]->score ? $data->sunday[$i]->score : "N/A";
        $members = $data->sunday[$i]->members ? $data->sunday[$i]->members : "N/A";
        $synopsis = $data->sunday[$i]->synopsis ? $data->sunday[$i]->synopsis : "N/A";
        $source = $data->sunday[$i]->source ? $data->sunday[$i]->source : "N/A";
        $type = $data->sunday[$i]->type ? $data->sunday[$i]->type : "N/A";
        $airing_start = $data->sunday[$i]->airing_start ? $data->sunday[$i]->airing_start : "N/A";
        $episodes = $data->sunday[$i]->episodes ? $data->sunday[$i]->episodes : "N/A";
        if($airing_start !== "N/A") {
            $formatted = date_create($airing_start);
            $airing_start = $formatted->format('M d, Y');
        }
        echo"
        <a href=\"./details?id={$id}\" data-bs-toggle=\"tooltip\" data-bs-placement=\"auto\" data-bs-html=\"true\"
        title=\"Score: {$score} <br>Members: #{$members}<br>Episodes: {$episodes}<br>Start Airing on: {$airing_start}<br>Source: {$source}<br>Type:{$type} \">
            <figure class=\"item-img\">
                <div class=\"img__wrap\">
                <img class=\"img__img\" src=\"{$data->sunday[$i]->image_url}\" onerror=\"this.onerror=null; this.src='/handler/img/noposter.png'\" alt=\"{$title} Poster\"/>
                <div class=\"top-left\">Score :{$score}</div>
                    <div class=\"img__description_layer\">
                        <p class=\"img__description\">{$synopsis}</p>
                    </div>
                </div>
                <figcaption class=\"item-caption\">$title</figcaption>
            </figure>
        </a>
        ";
    }
}

?>