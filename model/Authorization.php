<?php

class Authorization {

    public function login($email, $password){
        if(!isset($_SESSION))
            session_start();


        if(!empty($password) && !empty($email)) {
            $hash=sha1($password);
            if (strlen($password) <= '6') {
                $_SESSION["danger"]="لطفا پسورد خود را بیشتر از 6 کاراکتر انتخاب کنید";
                header('Location: /login');
                exit();
            }else{
                $row = db::fetchAll(
                    "SELECT * FROM `users` WHERE `email`=? AND `password`=?",
                    [$email,$hash]
                );

                if (empty($row)){
                    $_SESSION["danger"]="ایمیل یا رمز عبور کاربر اشتباه است";
                    header('Location:/login');
                    exit();
                }else{
                    $name = db::fetchColumn(
                        "SELECT `name` FROM `users` WHERE `email`=? AND `password`=?",
                        [$email,$hash]
                    );
                    $_SESSION['email']=$email;
                    $_SESSION['name']=$name;
                    $_SESSION['password']=$hash;
                    header('Location: /');
                    exit();
                }
            }
        }else{
            $_SESSION["danger"]="فرم ها نباید خالی باشند";
            header('Location:/login');
            exit();
        }
    }


    public function register($name,$email,$password,$password_conf){
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
                    header('Location:/register');
                    exit();

                }else {
                    if($password!=$password_conf){
                        $_SESSION["danger"]="پسورد شما با تکرار آن برابر نیست";
                        header('Location:/register');
                        exit();
                    }else {
                        $row =  db::insert(
                            'users',
                             [
                                 'name' =>$name, 
                                 'email' =>$email, 
                                 'password' =>$hash,
                                 'date' => $date,
                             ]
                             );  
                        if ($row) {
                            $_SESSION['name']=$name;
                            $_SESSION['email']=$email;
                            $_SESSION['password']=$hash;
                            header('Location:/');
                            exit();
                        } else {
                            echo "error";
                        }
                    }

                }

            }else{

                $_SESSION["danger"]="فرم ها نباید خالی باشند";
                header('Location:/register');
                exit();
            }
    }

    

}