<?php

if ($url = env('CLEARDB_DATABASE_URL', false)) {
    $debug = env('H_APP_DEBUG', false);
    $key = env('H_APP_KEY');
} else {
    $debug = env('APP_DEBUG', false);
    $key = env('APP_KEY');
}

return [
    /*
    |--------------------------------------------------------------------------
    | Application Debug Mode
    |--------------------------------------------------------------------------
    |
    | When your application is in debug mode, detailed error messages with
    | stack traces will be shown on every error that occurs within your
    | application. If disabled, a simple generic error page is shown.
    |
    */
    'debug' => $debug,
    /*

    /*
    |--------------------------------------------------------------------------
    | Encryption Key
    |--------------------------------------------------------------------------
    |
    | This key is used by the Illuminate encrypter service and should be set
    | to a random, 32 character string, otherwise these encrypted strings
    | will not be safe. Please do this before deploying an application!
    |
    */
    'key' => $key,
    'cipher' => 'AES-256-CBC',
];
