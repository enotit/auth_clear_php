<?php

namespace Passing\Tools;

class FileManager
{
    public static function readFile($filename)
    {
        if (!file_exists($filename))
            Health::setStatus(false);
        $conf_json = file_get_contents($filename);
        if (!$conf_json)
            Health::setStatus(false);

        return $conf_json;
    }

}