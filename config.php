<?php
use DB\Database;
require 'database/class/Database.php';
class dbConf{
    public Database $DB;
    public function __construct(){
        $this->getConn();
        $this->DB;
    }
    public function getConn(){
        $server = "localhost";
        $dbUser = "dreamcre_classroom";
        $dbPass = "classroompassword";
        $dbName = "dreamcre_classroom";
        //db object
        $this->DB = new Database(
            $server,
            $dbUser,
            $dbPass,
            $dbName
        );
    }
}