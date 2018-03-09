<?php
header("Content-Type: text/html; charset=UTF-8");
/**
 * Author:wanggaobo
 * Date:2018/3/9 9:36
 **/
include_once 'config.php';

$hostname = $db['default']['hostname'];
$username = $db['default']['username'];
$password = $db['default']['password'];
$conn = mysqli_connect($hostname, $username, $password);
if(!$conn){
    die('数据库连接失败');
}
mysqli_query($conn, 'set names utf8');
mysqli_select_db($conn, 'test');



