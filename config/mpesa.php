<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Status
    |--------------------------------------------------------------------------
    |
    | This determines the state of the package, whether to use the sandbox or not.
    |
    | Possible values: sandbox | production
    */

    'status' => 'sandbox',

    /*
    |--------------------------------------------------------------------------
    | Credentials
    |--------------------------------------------------------------------------
    |
    | These are the credentials to be used to transact with the M-Pesa API
    */

    'consumer_key' => 'kqXIADTySe7gjwHKOct1Ne9WO4SUOsAT',

    'consumer_secret' => 'HWJgwT7sGhZGGGAw',

    'production_endpoint' => '',

    'initiator' => 'testapi0297',

    /*
    |--------------------------------------------------------------------------
    | File Cache Location
    |--------------------------------------------------------------------------
    |
    | This will be the location on the disk where the caching will be done.
    |
    */

    'cache_location' => 'cache',

    /*
    |--------------------------------------------------------------------------
    | STK Callback URL
    |--------------------------------------------------------------------------
    |
    | This is a fully qualified endpoint that will be be queried by Safaricom's
    | API on completion or failure of the transaction.
    |
    */

    'stk_callback' => 'http://9b182bf4.ngrok.io/api/payment' ,//'http://payments.smodavproductions.com/checkout.php',

    /*
    |--------------------------------------------------------------------------
    | Identity Validation Callback URL
    |--------------------------------------------------------------------------
    |
    | This is a fully qualified endpoint that will be be queried by Safaricom's
    | API on completion or failure of the transaction.
    |
    */

    'id_validation_callback' => 'http://payments.smodavproductions.com/checkout.php',

    /*
    |--------------------------------------------------------------------------
    | Callback Method
    |--------------------------------------------------------------------------
    |
    | This is the request method to be used on the Callback URL on communication
    | with your server.
    |
    | e.g. GET | POST
    |
    */

    'callback_method' => 'POST',

    /*
    |--------------------------------------------------------------------------
    | Paybill Number
    |--------------------------------------------------------------------------
    |
    | This is a registered Paybill Number that will be used as the Merchant ID
    | on every transaction. This is also the account to be debited.
    |
    |
    |
    */

    'short_code' => 174379,

    /*
    |--------------------------------------------------------------------------
    | SAG Passkey
    |--------------------------------------------------------------------------
    |
    | This is the secret SAG Passkey generated by Safaricom on registration
    | of the Merchant's Paybill Number.
    |
    */

    'passkey' => 'bfb279f9aa9bdbcf158e97dd71a467cd2e0c893059b10f78e6b72ada1ed2c919',

    /*
    |--------------------------------------------------------------------------
    | Transaction ID Handler
    |--------------------------------------------------------------------------
    |
    | Provide a fully qualified class name of the Class that will be
    | used to generate the transaction number. This class must implement the
    | Transactable Interface.
    |
    | Default: '\SmoDav\Mpesa\Generator'
    |
    */

    'transaction_id_handler' => '\SmoDav\Mpesa\Generator',
];
