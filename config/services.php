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

  'facebook' => [
    'client_id' => '1198168476927917',
    'client_secret' => '34dbe10f20a01f364829cf983077cf4d',
    'redirect' => 'http://localhost:8000/auth/facebook/callback',
  ],

  'google' => [
    'client_id' => '696832883988-oafv9ei9jat3lqkkog3minq36209n7eq.apps.googleusercontent.com',
    'client_secret' => 'nT8Bn16OZKG7uMN48TAjbxU2',
    'redirect' => 'http://localhost:8000/auth/google/callback',
  ],

];
