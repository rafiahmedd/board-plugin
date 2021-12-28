<?php defined('ABSPATH') or die;

/*
Plugin Name: WP Trello Board
Description: The Ultimate Trello Board Plugin For Your WordPress.
Version: 1.0.0
Author: Rafi Ahmed
Author URI: https://devrafi.com
Plugin URI: https://devrafi.com
License: GPLv2 or later
Text Domain: wp-trello-board
// Domain Path: /language
*/

define('WP_TRELLO_BOARD_VERSION', '1.5.3');
define('WP_TRELLO_BOARD__DIR', 'wp-trello-board');
define('WP_TRELLO_BOARD__PLUGIN_URL', plugin_dir_url(__FILE__));

require __DIR__.'/vendor/autoload.php';

call_user_func(function($bootstrap) {
    $bootstrap(__FILE__);
}, require(__DIR__.'/app/app.php'));

