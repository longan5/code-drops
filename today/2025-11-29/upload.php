<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <script src="../bootstrap/jquery.min.js"></script>
    <script src="../bootstrap/js/bootstrap.bundle.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="../swiper/swiper-bundle.min.js"></script>
    <script src="../dplayer/dist/DPlayer.min.js"></script>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap-grid.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap-reboot.css">
    <link rel="stylesheet" href="../swiper/swiper-bundle.min.css" />

</head>
<body>

<form action="./index.php" method="post" enctype="multipart/form-data">
    <input type="file" name="upfile"/>
    <input type="submit" value="点我上传"/>
</form>

</body>
</html>

<?php

if(!empty($_FILES)){
    $tmpname=$_FILES['upfile']['tmp_name'];//临时文件名
    $name=$_FILES['upfile']['name'];//文件真名
    $file_name=date('YmdHis').rand(100,999).$name;//新命名
    $path='./uploads/'.$file_name;//上传的文件的最终位置
    //如果成功把临时文件移动到指定的文件夹并且重新命名成功了
    if(move_uploaded_file($tmpname,$path)){
        echo $name.'上传成功';
    }else{
        echo '上传失败';
    }
}

?>