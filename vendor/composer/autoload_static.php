<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3358c50ef01bc2c15db609dc474e8a4f
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'RockDeveloper2017\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'RockDeveloper2017\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'RockDeveloper2017\\Setup' => __DIR__ . '/../..' . '/src/Setup.class.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3358c50ef01bc2c15db609dc474e8a4f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3358c50ef01bc2c15db609dc474e8a4f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3358c50ef01bc2c15db609dc474e8a4f::$classMap;

        }, null, ClassLoader::class);
    }
}
