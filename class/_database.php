<?php
# v2.1
class db {
    private static $pdo;
    private static $instance;
    private static $excludeErrors = [
        'Integrity constraint violation: 1062 Duplicate entry'
    ];

    private function __construct() {}

    public static function init() {
        set_exception_handler(function($e) {
            $utils = new Utils;
            if( !$utils->containsArr( $e->getMessage() , self::$excludeErrors ) ){
                $TEL = new Telegram();
                $TEL->SendMessage(
                    "<code>{$_SERVER['REQUEST_URI']}</code>".PHP_EOL.
                    "<code>{$e->getMessage()}</code>",
                    true,
                    'SERVER_CRASH_REPORT'
                );
                error_log(
                    date('Y-m-d H:i:s').' | '.$_SERVER['REQUEST_URI'].' | '.$e->getMessage().PHP_EOL,
                    3,
                    "./sql_log.log"
                );
            }
        });
        if (!isset(self::$instance)) {
            $c = __CLASS__;
            self::$instance = new $c;
            try{
                self::$pdo = new PDO(
                    "mysql:host=localhost;dbname=".DB_NAME.";charset=UTF8",
                    DB_USER,
                    DB_PASS,
                    [
                        PDO::ATTR_EMULATE_PREPARES   => false,
                        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
                    ]
                );
            } catch (\Throwable $th) {
                //throw $th;
            }
        }
        return self::$instance;
    }

    public static function fetch($sql,$params=NULL){
        $stmt = self::$pdo->prepare($sql);
        $stmt->execute($params);
        return $stmt->fetch();
    }

    public static function fetchColumn($sql,$params=NULL){
        $stmt = self::$pdo->prepare($sql);
        $stmt->execute($params);
        return $stmt->fetchColumn();
    }

    public static function fetchAll($sql,$params=NULL){
        $stmt = self::$pdo->prepare($sql);
        $stmt->execute($params);
        return $stmt->fetchAll();
    }

    public static function fetchAllColumn($sql,$params=NULL){
        $stmt = self::$pdo->prepare($sql);
        $stmt->execute($params);
        return $stmt->fetchAll(PDO::FETCH_COLUMN);
    }

    public static function fetchKeyPair($sql,$params=NULL){
        $stmt = self::$pdo->prepare($sql);
        $stmt->execute($params);
        return $stmt->fetchAll(PDO::FETCH_KEY_PAIR);
    }

    public static function exist($sql,$params=NULL){
        $stmt = self::$pdo->prepare($sql);
        $stmt->execute($params);
        return $stmt->rowCount() ? true:false;
    }

    public static function rowCount($sql,$params=NULL){
        $stmt = self::$pdo->prepare($sql);
        $stmt->execute($params);
        return $stmt->rowCount();
    }

    public static function query($sql,$params=NULL){
        $stmt = self::$pdo->prepare($sql);
        $stmt->execute($params);
        return $stmt->rowCount();
    }

    private static function queryBuilder($tblName, $insertItems, $ignore) {
        $ignore = $ignore? 'IGNORE':'';
        $c=''; $v='';
        foreach ($insertItems as $key => $value) {
            $c .= '`'.$key.'`,';
            $v .= ':'.$key.',';
        }
        $c = rtrim($c,',');
        $v = rtrim($v,',');
        $finalQuery = "INSERT {$ignore} INTO `{$tblName}` ({$c}) VALUES ({$v})";
        return $finalQuery;
    }

    public static function insert($tblName, $insertItems, $ignore = false) {
        $stmt = self::$pdo->prepare(
            self::queryBuilder($tblName, $insertItems, $ignore)
        );
        $stmt->execute($insertItems);
        return self::$pdo->lastInsertId();
    }
}