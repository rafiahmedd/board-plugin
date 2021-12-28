<?php

use As247\WpEloquent\Application;
use WPTrelloBoard\App\Hooks\Handlers\ActivationHandler;

return function($file) {

    register_activation_hook($file, function() {
        (new ActivationHandler)->handle();
    });

    // register_deactivation_hook($file, function() {
    //     (new DeactivationHandler)->handle();
    // });

    add_action('plugins_loaded', function() use ($file) {
        // $application = new Application($file);
        // do_action('wp_trello_board/loaded', $application);
        // do_action('wp_trello_board/addons_loaded', $application);
        echo 'aa';
    });
};
