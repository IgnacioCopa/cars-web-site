<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdadce9344d8e6bfaa64777c558b161aa
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitdadce9344d8e6bfaa64777c558b161aa::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdadce9344d8e6bfaa64777c558b161aa::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitdadce9344d8e6bfaa64777c558b161aa::$classMap;

        }, null, ClassLoader::class);
    }
}
