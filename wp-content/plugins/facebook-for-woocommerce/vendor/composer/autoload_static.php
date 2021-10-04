<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3f790c8865bba7f592bf745823388190
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'SkyVerge\\WooCommerce\\Facebook\\' => 30,
        ),
        'C' => 
        array (
            'Composer\\Installers\\' => 20,
        ),
        'A' => 
        array (
            'Automattic\\WooCommerce\\ActionSchedulerJobFramework\\' => 51,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'SkyVerge\\WooCommerce\\Facebook\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
        ),
        'Composer\\Installers\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers',
        ),
        'Automattic\\WooCommerce\\ActionSchedulerJobFramework\\' => 
        array (
            0 => __DIR__ . '/..' . '/woocommerce/action-scheduler-job-framework/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3f790c8865bba7f592bf745823388190::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3f790c8865bba7f592bf745823388190::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}