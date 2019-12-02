<?php
return [
    'components' => [
        // ...
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=127.0.0.1;dbname=base1',
            'username' => 'default',
            'password' => 'secret',
            'charset' => 'utf8',
        ],
    ],
];