<?php

namespace WPTrelloBoard\App\Hooks\Handlers;

use WPTrelloBoard\Database\DBMigrator;
use As247\WpEloquent\Application;

class ActivationHandler
{
    public function handle()
    {
        Application::bootWp();
        DBMigrator::migrate();
    }
}
