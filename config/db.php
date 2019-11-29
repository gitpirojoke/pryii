<?php
return [
    'components' => [
        // ...
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=mysql;dbname=base1',
            'username' => 'root',
            'password' => 'root',
            'charset' => 'utf8',
        ],
    ],
];