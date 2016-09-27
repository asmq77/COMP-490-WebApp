<?php
//Heroku format

$herokudb = array('mysql'  => [
    'driver'    => 'mysql',
    'host'      => env('DB_HOST', 'us-cdbr-iron-east-04.cleardb.net'),
    'database'  => env('DB_DATABASE', 'heroku_f7469a0c6b39995'),
    'username'  => env('DB_USERNAME', '<username>'),
    'password'  => env('DB_PASSWORD', '<password>'),
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
    'strict'    => false,
]);

//MAMP testing format
// $user = '';
// $password = '';
// $db = '';
// $host = '127.0.0.1';
// $port = 3306;
// $socket = 'localhost:/Applications/MAMP/tmp/mysql/mysql.sock';

// define (DB_USER, "mysql_user");
// define (DB_PASSWORD, "mysql_password");
// define (DB_DATABASE, "database_name");
// define (DB_HOST, "localhost");
// define (DB_PORT, 3306);
// define (DB_SOCKET,'localhost:/Applications/MAMP/tmp/mysql/mysql.sock')

// $link = mysqli_init();
// $success = mysqli_real_connect(
//    $link, 
//    $host,
//    $user, 
//    $password, 
//    $db,
//    $port,
//    $socket
// );
?>