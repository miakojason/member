<?php
// include_once "../include/connect.php";
include_once "../include/db.php";
// $sql="update `users` set `acc`='{$_POST['acc']}',
//                         `pw`='{$_POST['pw']}',
//                         `name`='{$_POST['name']}',
//                         `email`='{$_POST['email']}',
//                         `address`='{$_POST['address']}' 
//     where `id`='{$_POST['id']}'";
$res=$User->save($_POST);
// if($pdo->exec($sql)>0){
    if($res>0){
    $_SESSION['msg']='海賊更新成功';
}else{
    $_SESSION['msg']='資料無異動朝巴';
}

// echo $sql;
// header失敗echo檢查sql印出來有沒有錯誤
header("location:../member.php");


?>