<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>文章列表</title>
    <link rel="stylesheet" type="text/css" href="css/admin.css">
</head>
<body>
<div class="top"><h3>面向过程式CMS</h3></div>
<div class="main">
    <?php include_once './common/leftbar.php';?>
    <div class="content">
        <ul>
            <?php
            include_once "../connect.php";
            $sql = "SELECT * FROM article";
            $query = mysqli_query($conn, $sql);
            $num_rows = mysqli_num_rows($query);
            if($num_rows > 0){
                while ($row = mysqli_fetch_assoc($query)){
                ?>
                    <li><a href="editarticle.php?id=<?php echo $row['id'];?>"><?php echo $row['title']?></a></li>
                <?php
                }
            }else{
                ?>
                <li>暂无数据</li>
            <?php
            }
            ?>
        </ul>
    </div>
    <div class="clear"></div>
</div>
</body>
</html>


