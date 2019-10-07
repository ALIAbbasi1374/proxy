<?php
use \Firebase\JWT\JWT;
error_reporting(E_ERROR | E_PARSE);

class IO {
    public static $body = null;
    public static $header = null;
    public static $token = null;
    public $payload = [];
    public static $userID = -1;
    public static $CONST = [];
    public static $username = '';
    public static $userVersion = '';

    public function __construct() {
        self::$body = json_decode(file_get_contents('php://input'), true);
        self::$header = apache_request_headers();
        
        
        if (self::$header['Authorization']) {
            self::$token = str_replace('Bearer ', '', self::$header['Authorization']);
            $this->payload = $this->getPayload();
            if (!empty($this->payload)) {
                self::$userID = $this->payload['id'];
            }
        }
        if (self::$header['Version']) {
            self::$userVersion = self::$header['Version'];
        }
        // $this->getCONST();
    // $this->getUsersName();
    }

    private function getPayload() {
        try {
            return (array) JWT::decode(self::$token, JWT_KEY, [JWT_ALG]);
        } catch (\Throwable $th) {
            return [];
        }
    }
    private function getCONST() {
        self::$CONST = db::fetchKeyPair("SELECT `name`, `value` FROM `constants`");

        return true;
    }

    
    private function getUsersName() {
        self::$username = db::fetchColumn("SELECT `name` FROM `members` WHERE `id`=?", [self::$userID]) ? : '';

        return true;
    }
}
