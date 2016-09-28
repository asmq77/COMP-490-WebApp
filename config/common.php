<?php


/**
 * 
 * User: bryanherrera
 * Date: 9/27/16
 * 
 */
include './config/config.php';
/*
 * Return username of database;
 * @return string
 * */
function getUsername(){
    global $herokudb;
    return $herokudb['mysql']['username'];
}
/*
 * Return password of database;
 * @return string
 * */
function getPassword(){
    global $herokudb;
    return $herokudb['mysql']['password'];
}
/*
 * Optional parameters when creating the PDO
 * @return array
*/
function getOptions(){
    return array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',);
}
/*
 * Gets the root path of the server
 * @return string
 * */
function getRootPath(){
    return realpath(__DIR__ . '/..');
}

/*
 * Gets the DSN specifically for mysql connection
 * @return string
 * */
function getDsn(){
    global $herokudb;
    return 'mysql:host=' . $herokudb['mysql']['host'] . ';dbname=' . $herokudb['mysql']['database'];
}
/*
 * Gets the pdo object so we can access database
 * @return \PDO
 * */
function getPDO(){
    return new PDO(getDsn(),getUsername(), getPassword(), getOptions());
}

function htmlEscape($html){
    return htmlspecialchars($html, ENT_HTML5, 'UTF-8');
}
function convertSqlDate($sqlDate){
    /* @var $date DateTime*/
    $date = DateTime :: createFromFormat('Y-m-d H:i:s',$sqlDate);
    return $date ->format('m/d/Y g:i a');
}
?>