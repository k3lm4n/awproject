<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb4ee5a5c71688e7391aa47eb85c4feeb
{
    public static $files = array (
        '2dcfff174b60bb9421bafd3f75b415bf' => __DIR__ . '/../..' . '/../config/config.php',
        'd6bcb53768774895a16b43f3a1f17d9b' => __DIR__ . '/../..' . '/../app/Model/ClassConnection.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Src\\' => 4,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Src\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/../app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb4ee5a5c71688e7391aa47eb85c4feeb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb4ee5a5c71688e7391aa47eb85c4feeb::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
