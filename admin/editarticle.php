<?php
    include_once "../connect.php";
    $id = intval($_GET['id']);
    $sql = 'SELECT * FROM article WHERE id = '.$id;
    $query = mysqli_query($conn, $sql);
    $data = mysqli_fetch_assoc($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>编辑文章</title>
    <link rel="stylesheet" type="text/css" href="css/admin.css">
</head>
<body>
<div class="top"><h3>面向过程式CMS</h3></div>
<div class="main">
    <?php include_once './common/leftbar.php';?>
    <div class="content">
        <form action="articlehandle.php" method="post">
            <input type="hidden" name="id" value="<?php echo $data['id']?>">
            <p><label>标题：</label><input name="title" value="<?php echo $data['title']?>"/></p>
            <p><label>作者：</label><input name="author" value="<?php echo $data['author']?>"/></p>
            <p>
                <label style="float:left;">简介：</label>
                <textarea name="description" cols="100" rows="3"><?php echo $data['description']?></textarea>
            </p>
            <p>
                <label style="float:left;">内容：</label>
                <textarea name="content" cols="100" rows="10"><?php echo $data['content']?></textarea>
            </p>
            <input type="submit" value="提交">
            <a href="delarticle.php?id=<?php echo $data['id']?>">删除文章</a>
        </form>
    </div>
</div>
</body>
</html>

