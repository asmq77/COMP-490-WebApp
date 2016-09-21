<?php
//Heroku format
// 	'mysql'  => [
//     'driver'    => 'mysql',
//     'host'      => env('DB_HOST', 'us-cdbr-iron-east-02.cleardb.net'),
//     'database'  => env('DB_DATABASE', 'heroku_f7469a0c6b39995'),
//     'username'  => env('DB_USERNAME', 'b419fdf6d21e11'),
//     'password'  => env('DB_PASSWORD', 'c78bdf37'),
//     'charset'   => 'utf8',
//     'collation' => 'utf8_unicode_ci',
//     'prefix'    => '',
//     'strict'    => false,
// ],

//MAMP testing format
$user = '';
$password = '';
$db = '';
$host = '127.0.0.1';
$port = 3306;
$socket = 'localhost:/Applications/MAMP/tmp/mysql/mysql.sock';

$link = mysqli_init();
$success = mysqli_real_connect(
   $link, 
   $host,
   $user, 
   $password, 
   $db,
   $port,
   $socket
);
?>