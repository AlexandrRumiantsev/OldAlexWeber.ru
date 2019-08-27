<?php

return [
    
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=;dbname=t3100',
    'username' => 't3100',
    'password' => '6Exniskay20',
    'charset' => 'utf8',

    /**
    $user = 'root';
    $password = 'root';
    $db = 'yii2advanced';
    $host = 'localhost';
    $port = 3306;
    
    $link = mysqli_init();
    $success = mysqli_real_connect(
                                   $link,
                                   $host,
                                   $user,
                                   $password,
                                   $db,
                                   $port
                                   );
     */
    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
];
