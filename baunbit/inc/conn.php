<?php session_start();
error_reporting(0);
require "ez_sql_core.php";
require "ez_sql_mysql.php";
$db_user = "root";
$db_pass = "root";
$db_name = "lyk2016";
$db_host = "localhost";
$db = new ezSQL_mysql($db_user, $db_pass, $db_name, $db_host);
$db->query("SET NAMES 'utf8'");
$db->query("SET CHARACTER SET 'utf8'");
$db->query("SET COLLATION_CONNECTION='utf8_turkish_ci'");