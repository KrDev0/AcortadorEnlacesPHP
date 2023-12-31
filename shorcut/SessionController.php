<?php
?>
<?php

namespace shorcut;

class SessionController
{
    public static function get($key)
    {
        self::sessionStart();
        return $_SESSION[$key];
    }

    public static function logout()
    {
        self::sessionStart();
        session_destroy();
    }

    public static function redirectIfNotLoggedIn()
    {
        self::sessionStart();
        if (!isset($_SESSION["id"]) || !isset($_SESSION["email"])) {
            header("Location: login.php?login");
            exit;
        }
    }

    public static function propagateUser($id, $email)
    {
        self::sessionStart();
        $_SESSION["id"] = $id;
        $_SESSION["email"] = $email;
    }

    public static function sessionStart()
    {
        if (session_status() !== PHP_SESSION_ACTIVE) {
            session_start();
            session_regenerate_id(true);
        }
    }
}
