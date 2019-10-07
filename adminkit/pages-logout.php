<?php 
require_once "includes/connect.php";
if($_SESSION['login']!='' && $_SESSION['password']!='' && $_SESSION['email']!='' ){
    header('Location: pages-login.php');
    $_SESSION['login']='';
    $_SESSION['password']='';
    $_SESSION['email']='';

    exit();
}
?>