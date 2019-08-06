<?php

return [
    'id' => 'CloseSessionOnRecreateApplication',
    'basePath' => __DIR__,
    'controllerNamespace' => 'app\closeSessionOnRecreateApplication\controllers',
    'components' => [
        'request' => [
            'enableCsrfValidation' => false,
            'cookieValidationKey' => 'test'
        ],
    ],
];