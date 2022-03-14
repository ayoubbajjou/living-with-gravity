<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],
    'facebook' => [
        'client_id' => '1022544615007607',
        'client_secret' => '017ae924685ca924c272a4de25a72007',
        'redirect' => app()->runningInConsole() ? '' : url('/callback/facebook'),
    ],
    
    'google' => [
        'client_id' => '473246924703-clvp8vbud3uodinknb4muph50ij626t8.apps.googleusercontent.com',
        'client_secret' => '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',
        'redirect' => app()->runningInConsole() ? '' : url('/callback/google')
    ],

];
