<?php
// session_start();
include_once "../include/connect.php";
$acc=$_POST['acc'];
$pw=$_POST['pw'];

// $dsn="mysql:host=localhost;charset=utf8;dbname=member";
// $pdo=new PDO($dsn,'root','');

//$sql="select * from users where `acc`='$acc' && `pw`='$pw'";
// $sql="select count(*) from users where `acc`='$acc' && `pw`='$pw'";

//$user=$pdo->query($sql)->fetch();
// $user=$pdo->query($sql)->fetchColumn();
//print_r($user);

//if($user['acc']==$acc && $user['pw']==$pw){

 $res=total('users',['acc'=>$acc,'pw'=>$pw]);
if($res){
    $_SESSION['user']=$acc;
    header("location:../index.php");
}else{
    header('location:../login_form.php?error=帳號密碼錯誤');
}


?>