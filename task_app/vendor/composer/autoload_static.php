<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit451e7d8183f424746049b3937bc061a4
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit451e7d8183f424746049b3937bc061a4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit451e7d8183f424746049b3937bc061a4::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit451e7d8183f424746049b3937bc061a4::$classMap;

        }, null, ClassLoader::class);
    }
}
