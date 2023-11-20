<?php
include_once "../include/connect.php";
// $dsn="mysql:host=localhost;charset=utf8;dbname=member";
// $pdo=new PDO($dsn,'root','');
//  過濾特殊符號 https://www.php.net/manual/zh/function.trim.php
$acc=htmlspecialchars(trim($_POST['acc']));

// 注意$_POST變數，用大括號{}隔開''
// $sql="insert into `users`(`acc`,`pw`,`name`,`email`,`address`)
//                   values('{$_POST['acc']}',
//                          '{$_POST['pw']}',
//                          '{$_POST['acc']}',
//                          '{$_POST['email']}',
//                          '{$_POST['address']}')";
// $pdo->exec($sql);
 // exec檢查
 insert("users",['acc'=>"{$acc}",
                 'pw'=>"{$_POST['pw']}",
                 'name'=>"{$_POST['name']}",
                 'email'=>"{$_POST['email']}",
                 'address'=>"{$_POST['address']}"]);

// 不輸入資料空白註冊也會新增一筆
// 註冊後，用header導向首頁，才不會停留在空白畫面
header("Location:../index.php");
// 或著是導向註冊畫面
// header("Location:reg.php");
?>



