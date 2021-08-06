<?php 
function getYearAndSeason(){
    // get today's date
    $today = new DateTime();
    $year = $today->format('Y');

    // get the season dates
    $spring = new DateTime('March 20');
    $summer = new DateTime('June 20');
    $fall = new DateTime('September 22');
    $winter = new DateTime('December 21');

    switch(true) {
        case $today >= $spring && $today < $summer:
            $season = "Spring";
            break;

        case $today >= $summer && $today < $fall:
            $season = "Summer";
            break;

        case $today >= $fall && $today < $winter:
            $season = "Fall";
            break;

        default:
            $season = "Winter";
            break;
    }

    return array($year, $season);
}
?>