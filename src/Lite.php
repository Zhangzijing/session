<?php
/**
 * Created by PhpStorm.
 * User: ZhangZijing
 * Date: 2019/1/9
 * Time: 14:20
 */
namespace PhalApi\Session;
class Lite
{
    public function __construct()
    {
        session_start();
    }
    public function __get($key)
    {
        if (isset($_SESSION[$key]))
        {
            return $_SESSION[$key];
        }
        elseif ($key === 'session_id')
        {
            return session_id();
        }
        return NULL;
    }

    public function __isset($key)
    {
        if ($key === 'session_id')
        {
            return (session_status() === PHP_SESSION_ACTIVE);
        }
        return isset($_SESSION[$key]);
    }

    public function __set($key, $value)
    {
        $_SESSION[$key] = $value;
    }
    public function destroy()
    {
        session_destroy();
    }
}