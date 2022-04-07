<?php
header("Content-Type:text/html;charset=utf-8"); 
session_start(); 
$addr=''//域名
$username=md5($_POST['username'])
$password=md5($_POST['password'])
$serverUsername='';//SQL登录
$serverPass='';//SQL登录
$db = mysqli_connect("localhost:3308", $serverUsername, $serverPass, "basic_info");
$sql = "SELECT * FROM user_login WHERE username=$username AND password=$password";
$rs = mysqli_query($db, $sql);
if(mysqli_num_rows($rs)>0){
    setcookie('userInfo',$username.$password)
    header("location:".$addr.'/chat');
}
?>
