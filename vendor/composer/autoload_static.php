<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd59b961feaeaaab0d8a7a5f27d70e64d
{
    public static $prefixLengthsPsr4 = array (
        'O' => 
        array (
            'OceanApplications\\currencylayer\\' => 32,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'OceanApplications\\currencylayer\\' => 
        array (
            0 => __DIR__ . '/..' . '/oceanapplications/currencylayer-php-client/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd59b961feaeaaab0d8a7a5f27d70e64d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd59b961feaeaaab0d8a7a5f27d70e64d::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
