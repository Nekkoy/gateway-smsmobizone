<?php

return [
    "enabled" => env('SMSMOBIZONE_ENABLED', false),
    "api_url" => env('SMSMOBIZONE_API_URL', 'https://api.mobizon.ua'),
    "api_key" => env('SMSMOBIZONE_API_KEY', ''),
    "name_sms" => env('SMSMOBIZONE_SMS_NAME', ''),
    "priority" => env('SMSMOBIZONE_PRIORITY', 1),
    "prefix" => env('SMSMOBIZONE_PREFIX', "any"),
    "tags" => env('SMSMOBIZONE_TAGS', '#mobizone'),
    "default" => env('SMSMOBIZONE_DEFAULT', false),
    "devmode" => env('SMSMOBIZONE_DEVMODE', false),
];
