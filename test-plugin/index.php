
<?php
/*
Plugin Name: Gutenberg Group Test
Plugin URI: https://gist.github.com/strarsis/3c3a96e4c634b35a5cd14de747e1ec82
Description: Adds a test block style for core/group block.
Version: 0.0.1
Author: strarsis
Author URI: https://gist.github.com/strarsis
License: MIT
*/

add_action( 'init', function() {
    if(!function_exists('register_block_style')) return;

    // Block styles

    // Group
    register_block_style('core/group', [
        'name'  => 'test',
        'label' => 'Test',
    ]);
});
