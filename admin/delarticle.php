<?php
/**
 * Author:wanggaobo
 * Date:2018/3/9 16:05
 **/
include_once '../connect.php';
$id = intval($_GET['id']);
$sql = 'DELETE FROM article WHERE id = '. $id;
$query = mysqli_query($conn, $sql);
if($query){
    echo '<script>alert("删除文章成功");window.location.href="./articlelist.php";</script>';
}

