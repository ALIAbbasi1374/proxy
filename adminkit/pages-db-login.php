<?php 
require_once "includes/connect.php";
session_start();
if(!empty($_POST["password"]) && !empty($_POST["email"])) {
    $email=$_POST['email'];
    $password=$_POST['password'];
    $hash=sha1($password);
    if (strlen($_POST["password"]) <= '6') {
        $_SESSION["empty"]="لطفا پسورد خود را بیشتر از 6 کاراکتر انتخاب کنید";
        header('Location:pages-login.php');
    }else{

        $sql = "SELECT * FROM users WHERE email=:email AND password=:password";
        $res = $connect->prepare($sql);
        $res->bindParam(":email", $email);
        $res->bindParam(":password", $hash);
        $res->execute();


        $row=$res->fetch(PDO::FETCH_ASSOC);
        if ($row==false){

            $_SESSION["danger"]="ایمیل یا رمز عبور کاربر اشتباه است";
            header('Location:pages-login.php');
            exit();

        }else{
            $_SESSION['login']=$row['name'];
            $_SESSION['email']=$row['email'];
            $_SESSION['password']=$hash;
            header('Location:index.php');
            exit();
        }



    }
}else{
    $_SESSION["danger"]="فرم ها نباید خالی باشند";
    header('Location:pages-login.php');
    exit();
}

?>