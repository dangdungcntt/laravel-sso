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

    /*
     |--------------------------------------------------------------------------
     | Settings necessary for the SSO server.
     |--------------------------------------------------------------------------
     |
     | These settings should be changed if this page is working as SSO server.
     |
     */

    'routePrefix' => 'api/sso',
    'routeMiddleware' => [
        'api'
    ],

    'usersModel' => \App\User::class,
    'brokersModel' => Nddcoder\LaravelSSO\Models\Broker::class,

    // Table used in Nddcoder\LaravelSSO\Models\Broker model
    'brokersTable' => 'brokers',

    // Field use when find broker
    'brokerIdField' => 'name',

    // Logged in user fields sent to brokers.
    'userFields' => [
        // Return array field name => database column name
        'id' => 'id',
    ],

    'usernameField' => 'username',

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

    'userIdField' => 'id',
];
