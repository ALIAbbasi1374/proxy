<?php
date_default_timezone_set('Asia/Tehran');
ini_set("log_errors", 1);
ini_set("error_log", "./php-error.log");

// include './vendor/autoload.php';

# include all classes
foreach (glob("./class/*.php") as $filename) {
    include $filename;
}
# include all models
// instantiate Classes
 db::init();
$io = new IO;
foreach (glob("./model/*.php") as $filename) {
    include $filename;
}

# include all routes
foreach (glob("./routes/*.php") as $filename) {
    include $filename;
}
foreach (glob("./webAPI/*.php") as $filename) {
    include $filename;
}

dispatch();
