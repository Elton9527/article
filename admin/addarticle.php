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
        <form action="articlehandle.php" method="post">
            <p><label>标题：</label><input name="title"/></p>
            <p><label>作者：</label><input name="author"/></p>
            <p>
                <label style="float:left;">简介：</label>
                <textarea name="description" cols="100" rows="3"></textarea>
            <p>
                <label style="float:left;">内容：</label>
                <textarea name="content" cols="100" rows="10"></textarea>
            </p>
            <input type="submit" value="提交">
        </form>
    </div>
</div>

</body>
</html>

