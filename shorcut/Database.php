<?php
?>
<?php

namespace shorcut;

use PDO;

class Database
{
    static function get()
    {
        $password = Utils::getVarFromEnvironmentVariables("MYSQL_PASSWORD");
        $user = Utils::getVarFromEnvironmentVariables("MYSQL_USER");
        $dbName = Utils::getVarFromEnvironmentVariables("MYSQL_DATABASE_NAME");
        $dbHost = Utils::getVarFromEnvironmentVariables("MYSQL_DATABASE_HOST");
        $database = new PDO('mysql:host='. $dbHost . ';dbname=' . $dbName, $user, $password);
        $database->query("set names utf8;");
        $database->setAttribute(PDO::ATTR_EMULATE_PREPARES, FALSE);
        $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $database->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        return $database;
    }
}
