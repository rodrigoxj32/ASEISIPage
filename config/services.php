<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, Mandrill, and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => '',
        'secret' => '',
    ],

    'mandrill' => [
        'secret' => '',
    ],

    'ses' => [
        'key' => '',
        'secret' => '',
        'region' => 'us-east-1',
    ],

    'stripe' => [
        'model'  => App\User::class,
        'key' => '',
        'secret' => '',
    ],
    'google' => [
      'client_id' => '805657215467-bqa5ihq8nmorpiljhk2d4s94fqhstpkj.apps.googleusercontent.com',
      'client_secret' => 'X57rnsVI7Uz_EQTzBzqA-lVd',
      'redirect' => 'http://localhost:8000/auth/google/callback',
  ],

];
