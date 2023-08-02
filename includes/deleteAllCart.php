<?php
session_start();
 $uid=$_SESSION['uid'];
 $mysql=new mysqli('localhost','root','','ice_cream');
 $sql="delete from cart where user_id='$uid'";
 if($mysql->query($sql)){
    $mysql->close();
    header('Location:../index.php');
    exit();
 }else{
    $mysql->close();
    echo "Connection issue";
    echo "You will be redirect to main page in 3sec";
    sleep(3);
    header('Location:../index.php');
    exit();
 }
?>