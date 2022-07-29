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
        'client_id' => '598015261278565',
        'client_secret' => '3a541af626af92edfd44053855e65b53',
        'redirect' => 'http://localhost:8000/auth/facebook/callback',
    ],
    'google' => [
        'client_id' => '386229691343-01vu3r8cum1lm1on388lnfbfjs22i8vn.apps.googleusercontent.com',
        'client_secret' => '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',
        'redirect' => 'http://localhost:8000/auth/google-callback',
    ],
    'github' => [
        'client_id' => '4f81008f6fcb9a0e581f',
        'client_secret' => 'e6536e12d6f087458674b23a5508c7ac68459852',
        'redirect' => 'http://127.0.0.1:8000/auth/github/callback',
    ],
    'instagram' => [
        'client_id' => '483710020023361',
        'client_secret' => '65273db359bb93adb8dba5c2ee019ade',
        'redirect' => 'http://localhost:8000/auth/instagram-callback'
    ],
    'twitter' => [
        'client_id' => '8JS1GvRflY5g9N3kZc0heYTqL',
        'client_secret' => 'eYujptPLBAAzdHIz8hiqGgz4MkJTcmL1JAGEuEZsGU1MykjK',
        'redirect' => 'http://laravel.localhost/login/twitter/callback',
     ],


];
