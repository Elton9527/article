<?php
/**
 * Author:wanggaobo
 * Date:2018/3/9 11:18
 **/
include_once '../connect.php';
$id = intval($_POST['id']);
$title = $_POST['title'];
$author = $_POST['author'];
$description = $_POST['description'];
$content = $_POST['content'];

if($id){
    $sql = "UPDATE article SET title='$title', author='$author', description='$description', content='$content', dateline=".time()." WHERE id = ".$id;
    if(mysqli_query($conn, $sql)){
        echo '<script>alert("修改文章成功");window.location.href="./articlelist.php";</script>';
    }else{
        echo $conn->error;
        echo '<script>alert("发布文章失败");window.location.href="./admin/editarticle.php?id="'.$id.';</script>';
    };
} else {
    $sql = "INSERT INTO article(title, author, description, content, dateline) VALUE('$title', '$author', '$description', '$content', ".time().")";
    if(mysqli_query($conn, $sql)){
        echo '<script>alert("发布文章成功");window.location.href="./articlelist.php";</script>';
    }else{
        echo $conn->error;
        echo '<script>alert("发布文章失败");window.location.href="./admin/addview.php";</script>';
    };
}

