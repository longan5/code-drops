<?php
$dsn='mysql:host=localhost;dbname=student-data';
$user='root';
$pwd='root';

try{
    $pdo = new PDO($dsn, $user, $pwd);
    $sql="SELECT * FROM student where age = :age";
    //预处理
    $res=$pdo->prepare($sql);
    //这里改变参数
    $age=$_GET['age'];
    $res->execute(['age'=>$age]);
    $jieguo=$res->fetch(PDO::FETCH_ASSOC);
    print_r($jieguo);
}catch(PDOException $e){
    echo $e->getMessage();
}

?>