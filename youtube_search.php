<?php


$titre = $_GET['titre']; //Hedhi twali te5ouha parametre

$resultsCount = 3 ; //9adeh men result 7achték
$titre = str_replace(" ","+",$titre);

$API_KEY = "AIzaSyBVgiVDNZ6F4-vxSL1JN5bxIB0vHKt2VYc" ; //Badel el API key beli 3andék...
$search_url="https://www.googleapis.com/youtube/v3/search?part=id&chart=mostPopular&type=video&key=".$API_KEY."&q=".$titre."+vape+Unboxing&safeSearch=strict&maxResults=".$resultsCount;
$response1 = json_decode(file_get_contents($search_url),true);

$results = array();



foreach ($response1["items"] as $item ) {

	$videoId = $item["id"]["videoId"];
	$video_url = "https://www.googleapis.com/youtube/v3/videos?part=snippet&key=".$API_KEY."&id=".$videoId;
	$json  = json_decode(file_get_contents($video_url),true);
	$video = new stdClass() ;
	$video->videoId = $videoId;
	$video->title = $json["items"][0]["snippet"]["title"];
	$video->thumbnail = $json["items"][0]["snippet"]["thumbnails"]["medium"]["url"];
	
	array_push($results, $video);
}
echo json_encode($results);

