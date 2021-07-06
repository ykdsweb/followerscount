<?php
$data = "https://spreadsheets.google.com/feeds/list/2PACX-1vT5GBrynhTDAjH3kh8LddaX-RbtC2Y8KY9oqB4O2BWnGN5RqqzAiDaX1qE0YDBeAuU7FyRuu4hYy35E/od6/public/values?alt=json";
$json = file_get_contents($data);
$json_decode = json_decode($json);

$names = $json_decode->feed->entry;

foreach ($names as $name) {
    echo $name->{'gsx$苗字'}->{'$t'};
    echo $name->{'gsx$名前'}->{'$t'};
        echo ",";
}
