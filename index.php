<?php

$url = "https://stats.uptimerobot.com/vVRHjVIiFF";

$options = [
    "http" => [
        "header" => "User-Agent: Mozilla/5.0\r\n"
    ]
];

$context = stream_context_create($options);
$content = file_get_contents($url, false, $context);

// 🔥 enlever les protections iframe
$content = str_replace("X-Frame-Options", "", $content);
$content = str_replace("frame-ancestors", "", $content);

echo $content;