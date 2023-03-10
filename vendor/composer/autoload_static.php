<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfe3afffcb5d00846926ec1e1c068361d
{
    public static $prefixLengthsPsr4 = array (
        'c' => 
        array (
            'chillerlan\\Settings\\' => 20,
            'chillerlan\\QRCode\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'chillerlan\\Settings\\' => 
        array (
            0 => __DIR__ . '/..' . '/chillerlan/php-settings-container/src',
        ),
        'chillerlan\\QRCode\\' => 
        array (
            0 => __DIR__ . '/..' . '/chillerlan/php-qrcode/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfe3afffcb5d00846926ec1e1c068361d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfe3afffcb5d00846926ec1e1c068361d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitfe3afffcb5d00846926ec1e1c068361d::$classMap;

        }, null, ClassLoader::class);
    }
}
