<?php
if (!function_exists('register_my_menu')) {
    function register_my_menu() {
        register_nav_menu('primary', __('Primary Menu'));
    }
    add_action('init', 'register_my_menu');
}

