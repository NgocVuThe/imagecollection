<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita2134e61dc00036ebf24211ac4947187
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'App\\Controller\\HomeController' => __DIR__ . '/../..' . '/app/controllers/HomeController.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita2134e61dc00036ebf24211ac4947187::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita2134e61dc00036ebf24211ac4947187::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita2134e61dc00036ebf24211ac4947187::$classMap;

        }, null, ClassLoader::class);
    }
}
