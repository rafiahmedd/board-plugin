<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit620497d7743664dc2a55375f72f57a20
{
    public static $files = array (
        '07b3d30d480da9938a58cfd5ad5e2cff' => __DIR__ . '/..' . '/as247/wp-eloquent/src/Support/helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'WPTrelloBoard\\App\\' => 18,
        ),
        'A' => 
        array (
            'As247\\WpEloquent\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'WPTrelloBoard\\App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
        'As247\\WpEloquent\\' => 
        array (
            0 => __DIR__ . '/..' . '/as247/wp-eloquent/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'WPTrelloBoard\\Database\\DBMigrator' => __DIR__ . '/../..' . '/database/DBMigrator.php',
        'WPTrelloBoard\\Database\\Tables\\SettingsTable' => __DIR__ . '/../..' . '/database/Tables/SettingsTable.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit620497d7743664dc2a55375f72f57a20::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit620497d7743664dc2a55375f72f57a20::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit620497d7743664dc2a55375f72f57a20::$classMap;

        }, null, ClassLoader::class);
    }
}
