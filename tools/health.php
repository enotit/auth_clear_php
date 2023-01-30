<?php
namespace Passing\Tools;

class Health
{
    private static bool $isAlive = true;
    public static function getStatus() : bool
    {
        return static::$isAlive ?: false;
    }
    public static function setStatus(bool $newStatus)
    {
        static::$isAlive = $newStatus;
        static::check();
    }

    public static function check()
    {
        if (!static::$isAlive)
            die("<h1>Site disabled</h1> <br> Failure with DB. Please write to <a href='https://t.me/enotit'>@enotit </a>");

    }
}