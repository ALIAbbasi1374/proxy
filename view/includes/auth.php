<?php
if(!isset($_SESSION))
session_start();

if(empty($_SESSION['email']) &&  empty($_SESSION['password']) ){
header('Location:/login');
exit();
}
