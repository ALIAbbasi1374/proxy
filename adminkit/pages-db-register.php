<?php
require_once "includes/connect.php";
session_start();
if(!empty($_POST["password"]) && !empty($_POST["email"])) {
    $name=$_POST["name"];
    $email=$_POST["email"];
    $password=$_POST["password"];
    $hash=sha1($password);
    $password_conf =$_POST["password_conf"];
    date_default_timezone_set('Asia/Tehran');
    $date=date("Y-m-d h:i:s");

    if (strlen($_POST["password"]) <= '6') {
        $_SESSION["danger"]="لطفا پسورد خود را بیشتر از 6 کاراکتر انتخاب کنید";
        header('Location:pages-register.php');
        exit();

    }else {
        if($password!=$password_conf){
            $_SESSION["danger"]="پسورد شما با تکرار آن برابر نیست";
            header('Location:pages-register.php');
            exit();
        }else {


            $query="INSERT INTO users(name,email,password,date) VALUES (:name,:email,:password,:date)";
            $res=$connect->prepare($query);
            $res->bindParam(":name",$name);
            $res->bindParam(":email",$email);
            $res->bindParam(":password",$hash);
            $res->bindParam(":date",$date);
            $res->execute();

            if ($query) {
                $_SESSION['login']=$name;
                $_SESSION['email']=$email;
                $_SESSION['password']=$hash;
                
                header('Location:index.php');
                exit();
            } else {
                echo "error";
            }
        }

    }

}else{

    $_SESSION["danger"]="فرم ها نباید خالی باشند";
    header('Location:pages-register.php');
    exit();
}


