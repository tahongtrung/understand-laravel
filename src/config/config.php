<?php

return [

    /**
     * Input key
     */
    'token' => 'your-input-token-from-understand-io',

    /**
     * Specifies whether logger should throw an exception of issues detected
     */
    'silent' => true,

    /**
     * Specify which handler to use (sync|queue)
     */
    'handler' => 'sync',

    'log_types' => [
        'eloquent_log' => [
            'enabled' => false,
            'meta' => [
                'session_id' => 'UnderstandFieldProvider::getSessionId',
                'request_id' => 'UnderstandFieldProvider::getProcessIdentifier',
                'user_id' => 'UnderstandFieldProvider::getUserId',
                'env' => 'UnderstandFieldProvider::getEnvironment',
                'client_ip' => 'UnderstandFieldProvider::getClientIp',
            ]
        ],
        'laravel_log' => [
            'enabled' => true,
            'meta' => [
                'session_id' => 'UnderstandFieldProvider::getSessionId',
                'request_id' => 'UnderstandFieldProvider::getProcessIdentifier',
                'user_id' => 'UnderstandFieldProvider::getUserId',
                'env' => 'UnderstandFieldProvider::getEnvironment',
                'client_ip' => 'UnderstandFieldProvider::getClientIp',
            ]
        ],
        'exception_log' => [
            'enabled' => true,
            'meta' => [
                'session_id' => 'UnderstandFieldProvider::getSessionId',
                'request_id' => 'UnderstandFieldProvider::getProcessIdentifier',
                'user_id' => 'UnderstandFieldProvider::getUserId',
                'env' => 'UnderstandFieldProvider::getEnvironment',
                'url' => 'UnderstandFieldProvider::getUrl',
                'method' => 'UnderstandFieldProvider::getRequestMethod',
                'client_id' => 'UnderstandFieldProvider::getClientIp',
                'user_agent' => 'UnderstandFieldProvider::getClientUserAgent'
            ]
        ]
    ]

];