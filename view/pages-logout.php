<?php 
if(!isset($_SESSION))
session_start();

if(!empty($_SESSION['password']) && !empty($_SESSION['email']) ){
    header('Location:/login');
    $_SESSION['login']='';
    $_SESSION['password']='';
    $_SESSION['email']='';
    exit();
}
?>