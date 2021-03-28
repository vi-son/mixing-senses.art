<?php
    
header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
header('Access-Control-Allow-Credentials: true');
header('Access-Control-Max-Age: 0'); // cache for 1 day
    
// Access-Control headers are received during OPTIONS requests
if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
    header("HTTP/1.1 200 OK");
    header("Access-Control-Allow-Methods: GET, POST, OPTIONS");         
    header("Access-Control-Allow-Headers: Content-type, Authorization, Origin, X-Requested-With, X-Language, Accept-Language, Content-Type-Options'");
}
    
return [
    //'url' => 'http://127.0.0.1:8888',
    'debug' => true,
    'languages' => true,
    'api' => [
        'basicAuth' => true,
        'allowInsecure' => true
    ]
];
