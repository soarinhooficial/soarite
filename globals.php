<?php
define('ROOT_PATH', str_replace('\\', '/', realpath(dirname(__FILE__))) . '/');
define('PATH', '/soarite/');

$db_name = 'soarite';
$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';

try {
    $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
} catch (\Throwable $th) {
    throw $th;
}
