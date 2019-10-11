<?php

$numberOfComments = 10;
$keywords = $_GET["keywords"]; //Hedhi twali te5ouha parametre
$keywords = str_replace(" ","+",$keywords);
$API_KEY = "AIzaSyBVgiVDNZ6F4-vxSL1JN5bxIB0vHKt2VYc" ;
$search_url="https://www.googleapis.com/youtube/v3/search?part=id&type=video&key=".$API_KEY."&q=".$keywords."&safeSearch=strict";
$response1 = json_decode(file_get_contents($search_url),true);
$videoId = $response1["items"][0]["id"]["videoId"];
$commentsUrl = "https://www.googleapis.com/youtube/v3/commentThreads?key=".$API_KEY.
"&textFormat=plainText&part=snippet&videoId=".$videoId."&maxResults=".$numberOfComments;
$response2 = json_decode(file_get_contents($commentsUrl),true);
echo json_encode($response2) ;
$comments = array();
foreach($response2["items"] as $item) {
    array_push($comments,$item['snippet']['topLevelComment']['snippet']['textDisplay']);
}
$response = new stdClass();
$response->videoId=$videoId;
$response->comments=$comments;
$json = json_encode($response);
//echo $json;
