<?php

namespace App\Helpers;


class Alias
{
    protected static $aliases = [];

    public static function loadAliases(array $aliases)
    {
        self::$aliases = $aliases;
    }

    public static function get($alias)
    {
        if (isset(self::$aliases[$alias])) {
            return self::$aliases[$alias];
        }

        throw new \Exception("Alias '{$alias}' not found.");
    }
}