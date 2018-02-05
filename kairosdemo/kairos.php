<?php

$APP_ID = "83bb2d03";
$APP_KEY = "8b2dfc41c2f5f033eecbd040aeff48e4";

$imageData = $_REQUEST['imageData'];

 if(isset($imageData)){
    echo checkImage($imageData);
 } else {
     echo "no url";
 }


 function verifyImage($imageData){
    global $APP_ID, $APP_KEY;
    $queryUrl = "http://api.kairos.com/verify";
    $imageObject = '{"image": "'.$imageData.'",
        "subject_id":"venkat",
        "gallery_name":"zydesoft"}';
    $request = curl_init($queryUrl);
    curl_setopt($request, CURLOPT_POST, true);
    curl_setopt($request,CURLOPT_POSTFIELDS, $imageObject);
    curl_setopt($request, CURLOPT_HTTPHEADER, array(
            "Content-type: application/json",
            "app_id:" . $APP_ID,
            "app_key:" . $APP_KEY
        )
    );
    curl_setopt($request, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($request);
    curl_close($request);
    return $response;
 }

 function recognizeImage($imageData){
    global $APP_ID, $APP_KEY;
    $queryUrl = "http://api.kairos.com/recognize";
    $imageObject = '{"image": "'.$imageData.'",
        "gallery_name":"zydesoft"}';
    $request = curl_init($queryUrl);
    curl_setopt($request, CURLOPT_POST, true);
    curl_setopt($request,CURLOPT_POSTFIELDS, $imageObject);
    curl_setopt($request, CURLOPT_HTTPHEADER, array(
            "Content-type: application/json",
            "app_id:" . $APP_ID,
            "app_key:" . $APP_KEY
        )
    );
    curl_setopt($request, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($request);
    curl_close($request);
    return $response;
 }

 function enrollImage($imageData){
    global $APP_ID, $APP_KEY;
    $queryUrl = "http://api.kairos.com/enroll";
    $imageObject = '{"image": "'.$imageData.'",
        "gallery_name":"zydesoft"}';
    $request = curl_init($queryUrl);
    curl_setopt($request, CURLOPT_POST, true);
    curl_setopt($request,CURLOPT_POSTFIELDS, $imageObject);
    curl_setopt($request, CURLOPT_HTTPHEADER, array(
            "Content-type: application/json",
            "app_id:" . $APP_ID,
            "app_key:" . $APP_KEY
        )
    );
    curl_setopt($request, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($request);
    curl_close($request);
    return $response;
 }

?>