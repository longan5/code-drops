<?php
$dsn = 'mysql:host=localhost;dbname=student-data';
$user = 'root';
$pwd  = 'root';

try {
    // 1. 连接时就打开异常模式
    $pdo = new PDO($dsn, $user, $pwd, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);

    // 2. 执行写语句
    $sql      = "INSERT INTO student (name,skill,age) VALUES ('cyh','face',15)";
    $rowCount = $pdo->exec($sql);   // 失败会抛异常；成功返回受影响行数

    // 3. 正常分支
    echo "执行成功，受影响行数：{$rowCount}";

} catch (PDOException $e) {
    // 4. 这里才是真正的错误信息
    echo '插入失败：' . $e->getMessage();
}
?>