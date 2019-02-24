<?php

return [
    /*
     |--------------------------------------------------------------------------
     | Laravel SSO Settings
     |--------------------------------------------------------------------------
     |
     | Set type of this web page. Possible options are: 'server' and 'broker'.
     |
     | You must specify either 'server' or 'broker'.
     |
     */

    'type' => 'server',

    // Prefix of routes registered by package and use when send command from broker to SSO Server
    'routePrefix' => 'api/sso',

    // Username field to authenticate (like: email, username,..)
    'usernameField' => 'email',

    // User ID field: required field to mapping User
    'userIdField' => 'id',

    // User model to authenticate & login in broker
    'usersModel' => \App\User::class,


    /*
     |--------------------------------------------------------------------------
     | Settings necessary for the SSO server.
     |--------------------------------------------------------------------------
     |
     | These settings should be changed if this page is working as SSO server.
     |
     */


    
    'routeGroupMiddleware' => [
        'sso'
    ],

    'routeAttachMiddleware' => [
        'auth'
    ],

    // Broker model use when find broker
    'brokersModel' => Nddcoder\LaravelSSO\Models\Broker::class,

    // Field use when find broker
    'brokerIdField' => 'name',

    // Table used in Nddcoder\LaravelSSO\Models\Broker model
    'brokersTable' => 'brokers',

    // Logged in user fields sent to brokers.
    'userFields' => [
        // Return array field name => database column name
        'id' => 'id',
    ],


    /*
     |--------------------------------------------------------------------------
     | Settings necessary for the SSO broker.
     |--------------------------------------------------------------------------
     |
     | These settings should be changed if this page is working as SSO broker.
     |
     */

    'serverUrl' => env('SSO_SERVER_URL', null),
    'brokerName' => env('SSO_BROKER_NAME', null),
    'brokerSecret' => env('SSO_BROKER_SECRET', null),
];
