<?php

namespace Classes;

class System
{
    public static function includeClasses(string $directory): void
    {
        if ($directoryContent = opendir($directory)) {
            while (false !== ($file = readdir($directoryContent))) {
                $filePath = $directory . '/' . $file;

                if (stristr($file, '.php') && is_file($filePath)) {
                    /** @noinspection PhpIncludeInspection */
                    require_once $filePath;

                }
            }

            closedir($directoryContent);
        }
    }

    public static function load(): void
    {
        include ('vendor/autoload.php');
        self::includeClasses('classes/core/');
        self::includeClasses('classes/converters/');
        self::includeClasses('classes/services/');
    }
}
