<?php
/*
 * This code was written by enotit.
 * distribution/modification/copying is free (but please mention me).
 * t.me/enotit 9.2022
 *
 */
namespace Passing\DBHandler;
use Passing\Tools\Health;
use Passing\Tools\FileManager;
class Connect
{
    static mixed $db = null;
    private static function init()
    {
       $conf_json = FileManager::readFile("dbhandler/conf.json");

        $conf = json_decode($conf_json, true);

        static::$db = mysqli_connect($conf["hostname"], $conf["username"], $conf["password"]);
		if (!static::$db){
			Health::setStatus(false);
		}
        mysqli_select_db(static::$db, $conf["table"]);

        $create_table_file = FileManager::readFile("dbhandler/create_table.sql");
        if (!static::$db->query($create_table_file))
            Health::setStatus(false);
    }


    public static function query(string $request)
    {
        if (!static::$db)
            static::init();

        static::$db->query($request);

    }
}