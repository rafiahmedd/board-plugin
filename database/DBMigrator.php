<?php

namespace WPTrelloBoard\Database;

require_once(ABSPATH . 'wp-admin/includes/upgrade.php');

use WPTrelloBoard\Database\Tables\SettingsTable;

class DBMigrator
{
    protected static $migrations = [
        SettingsTable::class,
    ];


    /**
     * This will migrate
     */
    public static function migrate()
    {
        foreach (static::$migrations as $class) {
            $class::migrate();
        }
    }
}