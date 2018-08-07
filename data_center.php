<?php
    $url = "https://api.apixu.com/v1/current.json?key=YOUR_API_KEY&q=auto:ip";
    $ch = curl_init();  
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    
    $json_output=curl_exec($ch);
    $weather = json_decode($json_output);
?>